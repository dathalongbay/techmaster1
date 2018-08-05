<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "Dang xuat thanh cong";
?>
<a href="http://localhost/techmaster1/session/index.php">Quay ve trang chu</a>
