<?php
include __DIR__ . '/../../db/dischi.php';

$genre = isset($_GET['genre']) ? $_GET['genre'] : null;

if ($genre) {
    $dischi = array_filter($dischi, function ($t) {
      $genre = $_GET['genre'];
      return $genre == $t['genre'];
    });
  }

$data = [
    'success' => true,
    'response' => array_values($dischi),
];

header('Content-Type: application/json');

echo json_encode($data);