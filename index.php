<?php
    // Tentukan konten dinamis yang ingin dimuat berdasarkan parameter 'content'
    $pag = isset($_GET['pag']) ? 'pages/'.$_GET['pag'].'.php' : 'pages/home.php';
    include 'layout/template.php'; // Muat template dengan konten dinamis yang dipilih
?>