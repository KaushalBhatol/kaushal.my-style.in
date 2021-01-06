<?php
$year = date('Y');
$host_url = $_SERVER['HTTP_HOST'];
$current_url  = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="<?=$meta_description?>"/>

<link rel="icon" type="image/jpeg" sizes="16x16" href="http://www.mediafire.com/convkey/92d6/os3tvbpv4awurgw9g.jpg">
<link rel="icon" type="image/jpeg" sizes="32x32" href="http://www.mediafire.com/convkey/7353/vql1b7l9sqrdnic9g.jpg">
<link rel="icon" type="image/jpeg" sizes="180x180" href="http://www.mediafire.com/convkey/794e/0os5yixw6ig1hvh9g.jpg">
<link rel="icon" type="image/jpeg" sizes="192x192" href="http://www.mediafire.com/convkey/8923/zt3nmdkxu9kzj3n9g.jpg">
<link rel="icon" type="image/jpeg" sizes="512x512" href="http://www.mediafire.com/convkey/a495/bf7295dlv8oem4f9g.jpg">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<title><?=$title  . ' | ' . $host_url;?></title>
</head>
<body>