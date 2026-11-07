

<?php $__env->startSection('title', 'Gallery - DaVinci Reklame'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Gallery Karya Kami</h1>
            <p class="text-gray-500">Kumpulan hasil karya terbaik DaVinci Reklame</p>
        </div>

        
        <div class="flex flex-wrap justify-center gap-2 mb-10">
            <a href="<?php echo e(route('gallery')); ?>" class="px-5 py-2 bg-blue-600 text-white rounded-full text-sm font-medium hover:bg-blue-700 transition">Semua</a>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('gallery', ['kategori' => $kategori])); ?>" class="px-5 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-blue-600 hover:text-white transition">
                    <?php echo e($kategori); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <?php if($galleries->count() > 0): ?>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="<?php echo e(asset('images/gallery/' . $item->gambar)); ?>" 
                             alt="<?php echo e($item->judul); ?>" 
                             class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800"><?php echo e($item->judul); ?></h5>
                            <span class="text-xs text-blue-600 bg-blue-50 px-2 py-1 rounded-full"><?php echo e($item->kategori); ?></span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mt-10">
                <?php echo e($galleries->links()); ?>

            </div>
        <?php else: ?>
            <div class="text-center py-20 text-gray-400">
                <i class="fas fa-images text-5xl mb-4"></i>
                <p class="text-lg">Belum ada foto di gallery.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/public/gallery.blade.php ENDPATH**/ ?>