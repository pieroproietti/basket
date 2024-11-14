<?php
// Nome del file da scaricare
$file = $_GET['file'];

// Verifica se il file esiste
if (!file_exists($file)) {
    die("Il file not exists.");
}

// Incrementa il contatore di download
$download_count = 0;
$count_file = 'download_count_' . basename($file) . '.txt';

if (file_exists($count_file)) {
    $download_count = (int)file_get_contents($count_file);
}

$download_count++;
file_put_contents($count_file, $download_count);

// Reindirizza all'URL del file
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
