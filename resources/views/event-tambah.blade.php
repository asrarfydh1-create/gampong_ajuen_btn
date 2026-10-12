<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokumentasi Event - Gampong Ajuen BTN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-blue-800 text-white p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold uppercase">Gampong Ajuen BTN</h1>
            <a href="{{ route('home') }}" class="text-sm underline hover:text-blue-200">← Kembali ke Beranda</a>
        </div>
    </header>

    <main class="container mx-auto mt-8 px-4 max-w-2xl mb-12">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-6 text-gray-800 border-b pb-2">Tambah Dokumentasi Event</h2>

            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Event / Kegiatan</label>
                    <input type="text" name="judul" required class="w-full border rounded p-2 focus:outline-blue-600" placeholder="Contoh: Gotong Royong Kebersihan Komplek">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Kategori Event</label>
                        <select name="kategori" required class="w-full border rounded p-2 focus:outline-blue-600">
                            <option value="Gotong Royong">Gotong Royong</option>
                            <option value="Keagamaan">Keagamaan / Pengajian</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="HUT RI">HUT RI / Perayaan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Event</label>
                        <input type="date" name="tanggal_event" required class="w-full border rounded p-2 focus:outline-blue-600">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Lokasi Kegiatan</label>
                    <input type="text" name="lokasi" value="Komplek BTN Ajuen" class="w-full border rounded p-2 focus:outline-blue-600">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Deskripsi Kegiatan</label>
                    <textarea name="deskripsi" rows="4" required class="w-full border rounded p-2 focus:outline-blue-600" placeholder="Tuliskan jalannya kegiatan..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Foto Dokumentasi</label>
                    <input type="file" name="gambar" accept="image/*" class="w-full border rounded p-2">
                </div>

                <button type="submit" class="w-full bg-blue-800 text-white font-semibold py-2 rounded hover:bg-blue-900 transition">Simpan Dokumentasi</button>
            </form>
        </div>
    </main>

</body>
</html>