<?php
session_start();
session_destroy();
header("location:/sis-asistencia2/vista/login/login.php");
?>