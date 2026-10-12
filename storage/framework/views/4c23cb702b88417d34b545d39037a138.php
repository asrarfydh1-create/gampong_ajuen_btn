<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($event->judul); ?> - Gampong Ajuen BTN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-blue-800 text-white p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold uppercase">Gampong Ajuen BTN</h1>
            <a href="<?php echo e(route('home')); ?>" class="text-sm underline hover:text-blue-200">← Kembali ke Beranda</a>
        </div>
    </header>

    <main class="container mx-auto mt-8 px-4 max-w-3xl mb-12">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold mb-2"><?php echo e($event->kategori); ?></span>
            <h1 class="text-2xl font-bold text-gray-800 mb-2"><?php echo e($event->judul); ?></h1>
            <p class="text-xs text-gray-500 mb-6">📅 <?php echo e(\Carbon\Carbon::parse($event->tanggal_event)->translatedFormat('d F Y')); ?> | 📍 <?php echo e($event->lokasi); ?></p>

            <?php if($event->gambar): ?>
                <img src="<?php echo e(asset('storage/' . $event->gambar)); ?>" alt="<?php echo e($event->judul); ?>" class="w-full rounded-lg mb-6 max-h-96 object-cover">
            <?php endif; ?>

            <div class="prose text-gray-700 whitespace-pre-line leading-relaxed">
                <?php echo e($event->deskripsi); ?>

            </div>
        </div>
    </main>

</body>
</html><?php /**PATH C:\laragon\www\gampong-ajuen-btn\resources\views/event-detail.blade.php ENDPATH**/ ?>