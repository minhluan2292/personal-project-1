<?php
session_start();
session_unset();
session_destroy();

header("location:http://minhluan2292.esy.es/");
exit();
?>