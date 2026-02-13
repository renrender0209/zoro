<?php
// ===== Website Settings (まず先に定義) =====
$websiteTitle = "Zoro";
$websiteUrl   = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo  = $websiteUrl . "/files/images/logo_zoro.png";
$contactEmail = "your-email@gmail.com";
$version      = "1.0";

// （必要なら）外部サービス等
$discord = "";
$github  = "";
$twitter = "";
$disqus  = "";
$api     = "";
$banner  = $websiteUrl . "/files/images/banner.png";

// ===== Database Settings =====
$db_host = getenv('DB_HOST') ?: '127.0.0.1';
$db_port = getenv('DB_PORT') ?: '3306';
$db_name = getenv('DB_NAME') ?: 'defaultdb';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_ssl  = getenv('DB_SSL') ?: '';      // REQUIRED
$ssl_ca  = getenv('DB_SSL_CA') ?: '';   // /etc/secrets/aiven-ca.pem (方法1)

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
  $conn = mysqli_init();

  // SSL設定（Aiven SSL REQUIRED対応）
  // CAがあるならそれを使って接続（Secret Files方式）
  if ($ssl_ca) {
    mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);
  } elseif (strtoupper($db_ssl) === 'REQUIRED') {
    // CA未設定なら暗号化のみ（証明書検証なし）
    mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
  }

  mysqli_real_connect(
    $conn,
    $db_host,
    $db_user,
    $db_pass,
    $db_name,
    (int)$db_port,
    NULL,
    (strtoupper($db_ssl) === 'REQUIRED' || $ssl_ca) ? MYSQLI_CLIENT_SSL : 0
  );
} catch (Throwable $e) {
  // ここで die しない：サイト設定（$websiteTitle等）を生かす
  error_log("DB connection failed: " . $e->getMessage());
  $conn = null;
}
