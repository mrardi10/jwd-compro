<?php
$d = $_GET['d'] ?? '';
?>
<section id="galeri-detail" class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-center">Galeri <br> Honda Riders Day 2023</h2>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/image/galeri-<?= $d ?>.webp" class="d-block w-100" alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/image/galeri-1-1.webp" class="d-block w-100" alt="Slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/image/galeri-1-2.webp" class="d-block w-100" alt="Slide 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/image/galeri-1-3.webp" class="d-block w-100" alt="Slide 4">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-center">Galeri Lainnya</h2>
                    <div class="row mx-0">
                        <?php if($d != 1): ?>
                        <div class="col-md-4">
                            <a href="?pag=gallerydetail&d=1">
                                <div class="card shadow border-0 misi-item my-3">
                                    <img src="assets/image/galeri-1.webp" class="card-img-top" alt="Gambar Artikel">
                                    <div class="card-body">
                                        <h5 class="card-title">Honda Riders Day 2023</h5>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><i class="far fa-calendar-alt"></i> 4 November 2023</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endif ?>

                        <?php if($d != 2): ?>
                        <div class="col-md-4">
                            <a href="?pag=gallerydetail&d=2">
                                <div class="card shadow border-0 misi-item my-3">
                                    <img src="assets/image/galeri-2.webp" class="card-img-top" alt="Gambar Artikel">
                                    <div class="card-body">
                                        <h5 class="card-title">Honda Riders Day 2022</h5>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><i class="far fa-calendar-alt"></i> 11 November 2022</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endif ?>

                        <?php if($d != 3): ?>
                        <div class="col-md-4">
                            <a href="?pag=gallerydetail&d=3">
                                <div class="card shadow border-0 misi-item my-3">
                                    <img src="assets/image/galeri-3.webp" class="card-img-top" alt="Gambar Artikel">
                                    <div class="card-body">
                                        <h5 class="card-title">Honda Riders Day 2021</h5>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><i class="far fa-calendar-alt"></i> 15 November 2021</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>