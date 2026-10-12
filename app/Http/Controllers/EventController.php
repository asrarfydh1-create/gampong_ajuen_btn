<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController
{
    public function index()
    {
        $events = Event::latest('tanggal_event')->get();
        return view('welcome', compact('events'));
    }

    public function create()
    {
        return view('event-tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'tanggal_event' => 'required|date',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('dokumentasi', 'public');
        }

        Event::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul) . '-' . time(),
            'kategori' => $request->kategori,
            'tanggal_event' => $request->tanggal_event,
            'lokasi' => $request->lokasi ?? 'Komplek BTN Ajuen',
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('home')->with('success', 'Dokumentasi event berhasil ditambahkan!');
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('event-detail', compact('event'));
    }
}