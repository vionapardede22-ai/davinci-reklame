

<?php $__env->startSection('header', 'Edit Layanan'); ?>

<?php $__env->startSection('content'); ?>

<div class="max-w-2xl bg-white rounded-xl shadow-sm p-8 border border-gray-100">

<form action="<?php echo e(route('admin.services.update', $service->id)); ?>"
      method="POST"
      enctype="multipart/form-data">

    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Nama Layanan
        </label>

        <input type="text"
               name="nama"
               value="<?php echo e(old('nama', $service->nama)); ?>"
               class="w-full border rounded-lg p-3"
               required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            FontAwesome Icon
        </label>

        <input type="text"
               name="icon"
               value="<?php echo e(old('icon', $service->icon)); ?>"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Deskripsi
        </label>

        <textarea name="deskripsi"
                  rows="5"
                  class="w-full border rounded-lg p-3"
                  required><?php echo e(old('deskripsi', $service->deskripsi)); ?></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Foto Layanan
        </label>

        <?php if($service->gambar): ?>
            <img src="<?php echo e(asset('images/services/'.$service->gambar)); ?>"
                 class="w-40 rounded border mb-3">
        <?php endif; ?>

        <input type="file"
               name="gambar"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Urutan Tampil
        </label>

        <input type="number"
               name="urutan"
               value="<?php echo e(old('urutan', $service->urutan)); ?>"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">
            Status
        </label>

        <select name="aktif"
                class="w-full border rounded-lg p-3">

            <option value="1" <?php echo e($service->aktif ? 'selected' : ''); ?>>
                Aktif
            </option>

            <option value="0" <?php echo e(!$service->aktif ? 'selected' : ''); ?>>
                Nonaktif
            </option>

        </select>
    </div>

    <div class="flex space-x-3">
        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold">
            Update Layanan
        </button>

        <a href="<?php echo e(route('admin.services.index')); ?>"
           class="bg-gray-200 text-gray-700 px-6 py-3 rounded-lg font-bold">
            Batal
        </a>
    </div>

</form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/admin/services/edit.blade.php ENDPATH**/ ?>