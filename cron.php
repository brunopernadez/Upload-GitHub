<?php
require 'config.php';

$secret = $_GET['secret'] ?? '';
if ($secret !== 'AntiMati123') {
    die("Akses ditolak!");
}

$old_keys = supabase_request("licenses?game=eq.KEEPALIVE&select=id");

if (!empty($old_keys)) {
    foreach ($old_keys as $key) {
        supabase_request("licenses?id=eq.{$key['id']}", 'DELETE');
    }
}

$new_key = "AUTO_ALIVE_" . generateRandomString(10);
supabase_request("licenses", 'POST', [
    'user_key' => $new_key,
    'game' => 'KEEPALIVE',
    'duration_days' => 1,
    'max_devices' => 1,
    'created_by' => 1
]);

echo "Berhasil! Key lama dihapus, Key baru ($new_key) dibuat. Supabase aman dari pause.";
?>