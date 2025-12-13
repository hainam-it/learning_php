<?php
session_start();

// Nếu đã đăng nhập -> chuyển sang welcome.php
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}

// Xử lý khi người dùng bấm Login
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);

    if (!empty($username)) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Vui lòng nhập tên!";
    }
}
?>

<form action="" method="POST">
    <input type="text" name="username" placeholder="Nhập tên của bạn">
    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($error)) echo "<p style='color:red'>$error</p>";
?>
