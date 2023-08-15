<!DOCTYPE html>
<html>
<head>
    <title>Email Registration</title>
</head>
<body style="min-height: 100vh; background-color: #f3f4f6; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
        <h1 style="font-weight: bold; font-size: 24px;">Hello, <?= $name ?></h1>
        <p>Kami Menginformasikan bahwa email anda telah memiliki akun pada website kami, silahkan Login Menggunakan akun berikut.</p>
        <p>Username: <?= $username ?></p>
        <p>Password: <?= $password ?></p>
        <p>atau Klik Tombol Di bawah</p>
        <a href="https://kataman.indranurwahid.my.id/login" style="background-color: #1abc9c; color: #ffffff; text-decoration: none; padding: 10px 20px; border-radius: 4px;">Masuk</a>
    </div>
</body>
</html>
