

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Galeri</h1>
        <a href="<?php echo e(route('admin.gallery.create')); ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
            <i class="fas fa-plus mr-2"></i> Tambah Foto
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline"><?php echo e(session('success')); ?></span>
        </div>
    <?php endif; ?>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Urutan</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Foto</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Judul</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($gallery->urutan); ?></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <img src="<?php echo e(asset('images/gallery/' . $gallery->gambar)); ?>" alt="<?php echo e($gallery->judul); ?>" class="h-20 w-32 object-cover rounded shadow-sm">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($gallery->judul); ?></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm flex space-x-2">
                        <a href="<?php echo e(route('admin.gallery.edit', $gallery->id)); ?>" class="text-blue-600 hover:text-blue-900 bg-blue-100 p-2 rounded">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="<?php echo e(route('admin.gallery.destroy', $gallery->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-900 bg-red-100 p-2 rounded">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center italic text-gray-500">Belum ada data galeri.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/admin/gallery/index.blade.php ENDPATH**/ ?>