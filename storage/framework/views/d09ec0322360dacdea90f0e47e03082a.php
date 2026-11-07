

<?php $__env->startSection('title', 'Hubungi Kami - DaVinci Reklame'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Silahkan Bertanya</h1>
                <p class="text-gray-600 mb-8">ingin merayakan pernikahan? ulangtahun? atau ingin membuat stempel, batu nisan, batu prasasti? Mari hubungi kami.</p>
                
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Telepon / WhatsApp</p>
                            <p class="font-bold text-gray-800"><?php echo e($company->phone ?? '0812-6971-5001'); ?></p>
                        </div>
                    </div>
                    <!-- <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-envelope"></i>
                        </div> -->
                        <!-- <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-bold text-gray-800"><?php echo e($company->email ?? 'hello@davincireklame.com'); ?></p>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-8 rounded-2xl shadow-inner flex flex-col justify-center items-center text-center space-y-6">
                <div class="w-20 h-20 bg-green-500 text-white rounded-full flex items-center justify-center">
                    <i class="fab fa-whatsapp text-5xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Chat via WhatsApp</h2>
                <p class="text-gray-600">Klik tombol di bawah untuk langsung menghubungi kami melalui WhatsApp. Kami siap membantu!</p>
                <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $company->phone ?? '081269715001')); ?>?text=Halo+DaVinci+Reklame%2C+saya+ingin+bertanya+mengenai+layanan+Anda."
                   target="_blank"
                   class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-4 rounded-xl transition flex items-center justify-center space-x-3 text-lg shadow-md">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    <span>Hubungi via WhatsApp</span>
                </a>
                <p class="text-sm text-gray-400"><?php echo e($company->phone ?? '0812-6971-5001'); ?></p>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/public/contact.blade.php ENDPATH**/ ?>