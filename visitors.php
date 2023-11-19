<?php
include "admin/adminconfig.php";

// Capture the visitor's IP address and user agent
$ipAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Insert the visitor's information into the database
$db->query("INSERT INTO counter ( ip_address, user_agent, datetimes) VALUES (NOW(), '$ipAddress', '$userAgent')");


// <------------------------------------------------------------------------------------------------------------------------------->

// today
$todayVisit = "SELECT COUNT(*) FROM counter WHERE DATE(visit_time) = CURDATE()";

// this week
$WeekVisit = "SELECT COUNT(*) FROM counter WHERE YEARWEEK(visit_time, 1) = YEARWEEK(NOW(), 1)";

// this month
$MonthVisit = "SELECT COUNT(*) FROM counter WHERE MONTH(visit_time) = MONTH(NOW())";

// total visitors
$totalVisit = "SELECT COUNT(*) FROM counter";
