<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return view('links.index', ['links' => $links]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        Link::create($request->all());

        return redirect()->route('links.index')->with('success', 'Link criado com sucesso!');
    }

    public function update(Request $request, Link $link)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        $link->update([
            'title' => $request->title,
            'url' => $request->url,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('links.index')->with('success', 'Link atualizado com sucesso!');
    }

    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('links.index')->with('success', 'Link removido com sucesso!');
    }

    public function showProfile()
    {
        $links = Link::where('is_active', true)->get();
        return view('profile', ['links' => $links]);
    }
}
