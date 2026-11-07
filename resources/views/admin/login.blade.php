<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body { font-family: Arial; background: #1a1a2e; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .box { background: white; padding: 40px; border-radius: 10px; width: 350px; }
        h2 { text-align: center; color: #333; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #2d46b9; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .error { color: red; font-size: 13px; margin-top: 10px; }
    </style>
</head>
<body>
<div class="box">
    <h2>🔐 Admin Panel</h2>
    @if ($errors->any())
        <p class="error">{{ $errors->first('msg') }}</p>
    @endif
    <form method="POST" action="{{ route('admin.login.post') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Masuk</button>
    </form>
</div>
</body>
</html>