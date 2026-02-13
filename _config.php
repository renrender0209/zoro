<?php
$db_host = getenv('DB_HOST') ?: '127.0.0.1';
$db_port = getenv('DB_PORT') ?: '3306';
$db_name = getenv('DB_NAME') ?: 'defaultdb';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_ssl  = getenv('DB_SSL') ?: '';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_init();

/**
 * Aiven 側が SSL mode REQUIRED の場合：
 * - まずは “暗号化のみ（証明書検証なし）” で接続できることが多いです。
 * - より厳密にやるなら CA証明書を指定して VERIFY_CA 相当の構成にします（後述）。
 */
if (strtoupper($db_ssl) === 'REQUIRED') {
  mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
}

mysqli_real_connect(
  $conn,
  $db_host,
  $db_user,
  $db_pass,
  $db_name,
  (int)$db_port
) or die("Connection failed");
