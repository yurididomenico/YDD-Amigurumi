<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Puppet;
use App\Size;
use App\Type;
use App\User;



class PuppetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'puppets' => Puppet::with('size', 'type')->paginate(10) //pagination in 10 schede da 10 records
        ];

        return view('admin.puppets.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::All();
        $types = Type::All();
        $users = User::All();
        return view('admin.puppets.create', compact('sizes', 'types', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $newPuppet = new Puppet();

        if (array_key_exists('image', $data)) {
            $cover_url = Storage::put('puppet_covers', $data['image']); //Potrebbe darti errore Storage -> inserisci in alto use Illuminate\Support\Facades\Storage;
            $data['cover'] = $cover_url;
        }

        $newPuppet->fill($data);
        $newPuppet->user_id = auth()->user()->id; // Assumi che l'utente autenticato sia l'autore del puppet
        $newPuppet->save();

        return redirect()->route('admin.puppets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singolo_puppet = Puppet::findOrFail($id);
        return view('admin.puppets.show', compact('singolo_puppet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puppet = Puppet::findOrFail($id);

        $sizes = Size::All();
        $types = Type::All();

        return view('admin.puppets.edit', compact('puppet', 'sizes', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $singoloPuppet = Puppet::findOrFail($id);
        $singoloPuppet->update($data);

        return redirect()->route('admin.puppets.show', $singoloPuppet->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singoloPuppet = Puppet::findOrFail($id);
        if ($singoloPuppet->cover) {
            Storage::delete($singoloPuppet->cover);
        }
        $singoloPuppet->delete();
        return redirect()->route('admin.puppets.index');
    }
}
