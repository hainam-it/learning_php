<?php
session_start();
session_unset();
session_destroy();
?>

<script>
// Xóa sessionStorage khi logout
sessionStorage.clear();

// Chuyển về login.php
window.location.href = 'login.php';
</script>
