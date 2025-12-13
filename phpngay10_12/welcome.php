<?php
session_start();

// Nếu chưa đăng nhập -> quay lại login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Lấy session PHP và đẩy vào sessionStorage
$username = $_SESSION['username'];
?>

<h2>Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>

<!-- Nút đăng xuất -->
<button onclick="window.location.href='logout.php'">Đăng xuất</button>

<script>
// Lưu PHP session vào sessionStorage
sessionStorage.setItem("username", "<?php echo htmlspecialchars($username); ?>");
</script>
