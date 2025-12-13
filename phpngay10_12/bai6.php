<!-- FORM GET -->
<form action="bai6.php" method="GET">
    <input type="text" name="search">
    <button type="submit">Search (GET)</button>
</form>

<!-- FORM POST -->
<form action="bai6.php" method="POST">
    <input type="text" name="fullname">
    <button type="submit">Search (POST)</button>
</form>

<?php
// GET
if (isset($_GET['search'])) {
    echo "GET: " . htmlspecialchars($_GET['search']);
}

// POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "POST: " . htmlspecialchars($_POST['fullname']);
}
?>



<?php 
//Tạo 3 trang web bao gồm login.php, welcom.php, logout.php
//người dùng truy cập vào login.php, nhập tên -> hệ thống lưu session
// welcom.php kiểm tra session nếu có thì hiển thị lời chào, nếu không thì chuyển về trang login.php
//người dùng nhấn đăng xuất, hệ thống hủy sesion và chuyển về trang login.php

$conn = mysql_connect("servername", "username", "password");or die("Could not connect: " . mysql_error());
?>
<?php 
