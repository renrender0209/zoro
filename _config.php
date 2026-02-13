<?php
$db_host = getenv('DB_HOST') ?: '127.0.0.1';
$db_port = (int)(getenv('DB_PORT') ?: 3306);
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'anime';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port)
  or die("Connection fail");

// 以降は既存設定のままでOK
$websiteTitle = getenv('WEBSITE_TITLE') ?: "Zoro";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/files/images/logo_zoro.png";
$contactEmail = getenv('CONTACT_EMAIL') ?: "@gmail.com";
$version = getenv('APP_VERSION') ?: "0.2";

$discord = "https://dsc.gg/kirixen";
$github = "https://github.com/kirixen";
$twitter = "https://x.com/KiriX3n";

$disqus = "https://.disqus.com/embed.js";
$api = getenv('API_ENDPOINT') ?: "";

$banner = $websiteUrl . "/files/images/banner.png";
?>
