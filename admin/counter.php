<?php

session_start();
if (isset($_SESSION['views'])) {
    # code...
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 0;
}
