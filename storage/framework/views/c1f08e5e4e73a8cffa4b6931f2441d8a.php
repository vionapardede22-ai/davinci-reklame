<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - DaVinci Reklame</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 to-gray-900 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Admin Login</h2>
            <p class="text-gray-500">Kelola konten website Anda</p>
        </div>

        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Email Address</label>
                <input type="email" name="email" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">
                Masuk ke Dashboard
            </button>
        </form>
        
        <div class="mt-6 text-center">
            <a href="<?php echo e(route('home')); ?>" class="text-blue-600 hover:underline text-sm"><i class="fas fa-arrow-left mr-1"></i> Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\davinci-reklame\resources\views/auth/login.blade.php ENDPATH**/ ?>