
<?php

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah username dan password benar
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika username dan password benar direct ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <ul>

        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <?php if (isset($error)): ?>
                <p style="color: red; font-style: italic;">Username / password salah!</p>
            <?php endif;?>
            <button type="submit" name="submit">Submit</button>
    </form>
</ul>
</body>
</html>