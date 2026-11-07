

<?php $__env->startSection('title', 'Layanan Kami - DaVinci Reklame'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-gray-800">Layanan Davinci Reklame</h1>
            <p class="text-gray-600 mt-4">
                Melayani pembuatan papan bunga, batu nisan, batu prasasti, stempel, plank merk, dan berbagai kebutuhan reklame lainnya.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php
                $gambar = match($service->nama) {
                    'Papan Bunga' => 'reklame1.png',
                    'Stempel' => 'reklame3.png',
                    'Batu Nisan' => 'reklame4.png',
                    'Batu Prasasti' => 'reklame5.png',
                    'Dll' => 'reklame2.png',
                    default => 'reklame6.png'
                };
            ?>

            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">

                <img src="<?php echo e(asset('images/' . $gambar)); ?>"
                    alt="<?php echo e($service->nama); ?>"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">
                        <?php echo e($service->nama); ?>

                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        <?php echo e($service->deskripsi); ?>

                    </p>

                    <a href="<?php echo e(route('contact')); ?>"
                    class="inline-flex items-center text-blue-600 font-semibold hover:underline">
                        Pesan Sekarang
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/public/services.blade.php ENDPATH**/ ?>