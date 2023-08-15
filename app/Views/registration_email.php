<!DOCTYPE html>
<html>
<head>
    <title>Email Template</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-base-200 flex justify-center items-center">
        <div class="bg-white rounded-lg p-10 shadow-lg">
            <h1 class="font-bold text-2xl">Hello, <?= $name ?></h1>
            <p>Kami Menginformasikan bahwa email anda telah memiliki akun pada wedsite kami, silahkan Login Menggunakan akun berikut .</p>
            <p>Username :<?= $username ?></p>
            <p>Password : <?= $password ?></p>
            <p>atau Klik Tombol Di bawah</p>
            <button class="btn btn-success"><a href="https://kataman.indranurwahid.my.id/login">Masuk</a></button>
        </div>
    </div>
</body>
</html>