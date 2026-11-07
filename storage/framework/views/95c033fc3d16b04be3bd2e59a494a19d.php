

<?php $__env->startSection('title', 'Tentang Kami - Davinci Reklame'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-blue-900 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold mb-4">Tentang Davinci Reklame</h1>
        <p class="text-blue-200">Melayani kebutuhan reklame, papan nama, batu prasasti, batu nisan, stempel, dan papan bunga sejak tahun 2006.</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="<?php echo e(asset('images/reklame2.png')); ?>" alt="DaVinci Reklame" class="rounded-xl shadow-2xl">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Berpengalaman dan Terpercaya</h2>
                <p class="text-gray-600 mb-4">
                    Davinci Reklame merupakan usaha yang bergerak di bidang pembuatan reklame dan kebutuhan identitas usaha. 
                    Kami melayani pembuatan papan nama, plank merk, batu prasasti, batu nisan, stempel, papan bunga, 
                    serta berbagai produk lainnya dengan kualitas terbaik dan harga yang kompetitif.
                </p>

                <p class="text-gray-600 mb-4">
                    Dengan pengalaman sejak tahun 2006, kami selalu mengutamakan ketepatan waktu, kualitas pengerjaan, 
                    dan kepuasan pelanggan dalam setiap pesanan yang kami kerjakan.
                </p>

                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-lg mr-4">
                            <i class="fas fa-eye text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Visi Kami</h4>
                            <p class="text-sm text-gray-600">
                                Menjadi penyedia jasa reklame dan pembuatan media informasi yang terpercaya, berkualitas, dan profesional.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-lg mr-4">
                            <i class="fas fa-bullseye text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Misi Kami</h4>
                            <p class="text-sm text-gray-600">
                                Memberikan hasil pengerjaan terbaik, pelayanan ramah, harga terjangkau, serta penyelesaian tepat waktu untuk setiap pelanggan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/public/about.blade.php ENDPATH**/ ?>