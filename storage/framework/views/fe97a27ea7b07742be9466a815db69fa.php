

<?php $__env->startSection('title', 'Davinci Reklame - Solusi Advertising Profesional'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="relative bg-slate-900 bg-cover bg-center bg-no-repeat text-white py-40 md:py-48 flex items-center justify-center min-h-[600px]" style="background-image: url('<?php echo e(asset('images/reklame6.png')); ?>');">
    
    <!-- Lighter dark overlay to keep the background photo very visible while keeping text readable -->
    <div class="absolute inset-0 bg-blue-900/50 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="max-w-4xl mx-auto">
            

           <!-- Lokasi -->
            <h2
                class="text-5xl md:text-7xl lg:text-8xl mb-4 text-white drop-shadow-[0_4px_8px_rgba(0,0,0,0.8)] whitespace-nowrap"
                style="font-family:'Cinzel', serif; letter-spacing:8px;">
                PAKPAK BHARAT
            </h2>

            <!-- Subtitle -->
            <span class="text-xs md:text-sm font-bold uppercase tracking-[0.3em] text-yellow-400 border border-yellow-400 bg-slate-950/60 px-6 py-2 rounded-full inline-block mb-6 backdrop-blur-sm">
                MATAKOCING - SALAK
            </span>
            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight mb-6 drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)] uppercase select-none">
                DAVINCI REKLAME
            </h1>

            <!-- Services list -->
            <p class="text-lg md:text-2xl text-gray-100 font-medium mb-12 max-w-3xl mx-auto leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">
                PAPAN BUNGA • BATU NISAN • BATU PRASASTI • STEMPEL • PLANK MERK DLL
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap justify-center items-center gap-4">
                <a href="https://wa.me/6281269715001" target="_blank"
                   class="inline-flex items-center gap-2 border-2 border-white bg-white text-slate-950 px-8 py-4 rounded-lg font-black uppercase tracking-wider hover:bg-transparent hover:text-white transition duration-300 shadow-xl">
                    <i class="fab fa-whatsapp text-xl"></i>
                    HP/WA 0812 6971 5001
                </a>
                
                <a href="<?php echo e(route('services')); ?>"
                   class="inline-flex items-center gap-2 border-2 border-white bg-transparent text-white px-8 py-4 rounded-lg font-black uppercase tracking-wider hover:bg-white hover:text-slate-950 transition duration-300 shadow-xl">
                    <i class="fas fa-list"></i>
                    LAYANAN KAMI
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Features -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">

            <!-- Papan Bunga -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-seedling text-blue-600 text-2xl"></i>
                </div>

                <h3 class="font-semibold text-lg mb-2">
                    Papan Bunga
                </h3>

                <p class="text-gray-600 text-sm">
                    Melayani papan bunga ucapan selamat, pernikahan, dan duka cita.
                </p>
            </div>

            <!-- Stempel -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-stamp text-blue-600 text-2xl"></i>
                </div>

                <h3 class="font-semibold text-lg mb-2">
                    Stempel
                </h3>

                <p class="text-gray-600 text-sm">
                    Pembuatan stempel flash, otomatis, dan stempel usaha.
                </p>
            </div>

            <!-- Batu Nisan -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-monument text-blue-600 text-2xl"></i>
                </div>

                <h3 class="font-semibold text-lg mb-2">
                    Batu Nisan
                </h3>

                <p class="text-gray-600 text-sm">
                    Batu nisan granit dan marmer dengan berbagai ukuran.
                </p>
            </div>

            <!-- Batu Prasasti -->
            <div class="text-center md:col-start-2">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-landmark text-blue-600 text-2xl"></i>
                </div>

                <h3 class="font-semibold text-lg mb-2">
                    Batu Prasasti
                </h3>

                <p class="text-gray-600 text-sm">
                    Batu prasasti granit dan marmer untuk peresmian, penghargaan, dan kebutuhan lainnya.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Services -->
<section class="py-20 bg-gray-50">

    <div class="container mx-auto px-6">

        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Layanan Kami
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto">
                Kami menyediakan dan menyewakan papan bunga, stempel,
                batu nisan dan batu prasasti.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition p-6">

                <?php if($service->gambar): ?>

                    <img src="<?php echo e(asset('images/services/' . $service->gambar)); ?>"
                         alt="<?php echo e($service->nama); ?>"
                         class="w-full h-48 object-cover rounded-lg mb-4">

                <?php else: ?>

                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 h-48 rounded-lg mb-4 flex items-center justify-center">
                        <i class="<?php echo e($service->icon ?? 'fas fa-bullhorn'); ?> text-white text-5xl"></i>
                    </div>

                <?php endif; ?>

                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    <?php echo e($service->nama); ?>

                </h3>

                <p class="text-gray-600 mb-4">
                    <?php echo e(Str::limit($service->deskripsi, 100)); ?>

                </p>

                <?php if($service->link): ?>

                <a href="<?php echo e($service->link); ?>"
                class="text-blue-600 font-semibold hover:text-blue-700"
                target="_blank">
                    Selengkapnya
                    <i class="fas fa-arrow-right ml-1"></i>
                </a>

            <?php else: ?>

                <a href="<?php echo e(route('services')); ?>"
                class="text-blue-600 font-semibold hover:text-blue-700">
                    Selengkapnya
                    <i class="fas fa-arrow-right ml-1"></i>
                </a>

            <?php endif; ?>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="col-span-3 text-center py-12">
                <i class="fas fa-inbox text-gray-300 text-6xl mb-4"></i>
                <p class="text-gray-500">
                    Belum ada layanan tersedia
                </p>
            </div>

            <?php endif; ?>

        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/public/home.blade.php ENDPATH**/ ?>