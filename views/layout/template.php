<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda Riders Community | Memberdayakan Perjalanan, Menyalakan Passion</title>
    <meta name="description" content="Honda Riders Community - Memberdayakan Perjalanan, Menyalakan Passion. Bergabunglah dengan kami untuk mendapatkan berita, acara, dan informasi terbaru seputar sepeda motor Honda.">
    <meta name="keywords" content="Honda, motor, sepeda motor, komunitas, penggemar, riders, Honda Riders Community, klub motor">
    <meta name="author" content="MRArdi10">

    <!-- Icon (favicon) -->
    <link rel="icon" href="assets/image/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=1l" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="d-flex mb-5">
        <aside class="sidebar">
            <?php include 'sidebar.php'; ?>
        </aside>
        <main class="content">
            <?php include $pag; ?> <!-- Ini akan memuat konten dinamis -->
        </main>
    </div>
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>