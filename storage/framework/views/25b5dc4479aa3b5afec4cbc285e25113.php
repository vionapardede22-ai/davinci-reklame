

<?php $__env->startSection('header', 'Ringkasan Statistik'); ?>

<?php $__env->startSection('content'); ?>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex items-center">
            <div class="p-3 bg-blue-100 text-blue-600 rounded-lg mr-4"><i class="fas fa-concierge-bell fa-2x"></i></div>
            <div>
                <p class="text-sm text-gray-500">Total Layanan</p>
                <h3 class="text-2xl font-bold"><?php echo e($serviceCount); ?></h3>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex items-center">
            <div class="p-3 bg-green-100 text-green-600 rounded-lg mr-4"><i class="fas fa-images fa-2x"></i></div>
            <div>
                <p class="text-sm text-gray-500">Gallery</p>
                <h3 class="text-2xl font-bold"><?php echo e($galleryCount); ?></h3>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>