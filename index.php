<?php
    // Tentukan konten dinamis yang ingin dimuat berdasarkan parameter 'content'
    $pag = isset($_GET['pag']) ? 'views/pages/'.$_GET['pag'].'.php' : 'views/pages/home.php';
    include 'views/layout/template.php'; // Muat template dengan konten dinamis yang dipilih
?>