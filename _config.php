<?php
$db_host = getenv('DB_HOST') ?: "localhost";
$db_user = getenv('DB_USER') ?: "root";
$db_pass = getenv('DB_PASS') ?: "";
$db_name = getenv('DB_NAME') ?: "anime";
$db_port = getenv('DB_PORT') ?: "3306";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, (int)$db_port)
  or die("Connection fail");

$websiteTitle = getenv('WEBSITE_TITLE') ?: "Zoro";
$contactEmail = getenv('CONTACT_EMAIL') ?: "@gmail.com";
$version = getenv('APP_VERSION') ?: "0.2";

$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/files/images/logo_zoro.png";

$discord = "https://dsc.gg/kirixen";
$github = "https://github.com/kirixen";
$twitter = "https://x.com/KiriX3n";

$disqus = "https://.disqus.com/embed.js";
$api = getenv('API_ENDPOINT') ?: "";

$banner = $websiteUrl . "/files/images/banner.png";
?>
