<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gampong Ajuen BTN - Dokumentasi Kegiatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header Navbar -->
    <header class="bg-blue-800 text-white p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold uppercase tracking-wide">Gampong Ajuen BTN</h1>
                <p class="text-sm text-blue-200">Dokumentasi Kegiatan & Informasi Komplek</p>
            </div>
            <a href="{{ route('event.create') }}" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-sm font-semibold transition">+ Tambah Event</a>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="container mx-auto mt-8 px-4 mb-12">
        <h2 class="text-xl font-bold mb-6 text-gray-800 border-b-2 border-blue-800 pb-2">Dokumentasi Event Komplek</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($events as $event)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    @if($event->gambar)
                        <img src="{{ asset('storage/' . $event->gambar) }}" alt="{{ $event->judul }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">Tidak ada foto</div>
                    @endif
                    <div class="p-5">
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold mb-2">{{ $event->kategori }}</span>
                        <h3 class="font-bold text-lg text-gray-800 mb-1">{{ $event->judul }}</h3>
                        <p class="text-xs text-gray-500 mb-3">📅 {{ \Carbon\Carbon::parse($event->tanggal_event)->translatedFormat('d F Y') }} | 📍 {{ $event->lokasi }}</p>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ Str::limit($event->deskripsi, 100) }}</p>
                        <a href="{{ route('event.show', $event->slug) }}" class="text-blue-600 text-sm font-semibold hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-gray-500 bg-white rounded-lg shadow">
                    Belum ada dokumentasi event yang diunggah.
                </div>
            @endforelse
        </div>
    </main>

</body>
</html>