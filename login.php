<?php
session_start();

// Data pengguna sementara menggunakan array asosiatif (sesuai modul)
$users = [
    'admin' => 'password123',
    'petugas' => 'simbarang2026'
];

$error = '';

// Jika tombol login ditekan
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Cek apakah username terdaftar dan passwordnya cocok
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['user'] = $username;
        header('Location: indeks.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SIM-Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f6f9; font-family: Arial, sans-serif;">
    <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 320px;">
        <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Login SIM-Barang</h2>
        
        <?php if (!empty($error)): ?>
            <p style="color: red; font-size: 14px; text-align: center; margin-bottom: 15px;"><?= $error ?></p>
        <?php endif; ?>

        <form action="" method="POST">
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Username:</label>
                <input type="text" name="username" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Password:</label>
                <input type="password" name="password" required style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <button type="submit" name="login" style="width: 100%; background: #007bff; color: white; border: none; padding: 10px; border-radius: 4px; cursor: pointer; font-weight: bold;">Masuk</button>
        </form>
    </div>
</body>
</html>S