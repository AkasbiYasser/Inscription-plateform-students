<?php
session_start();
session_destroy();
header("Location: espace_admin.php");
?>