<?php 
    $getBulan = $_GET['bulan'] ?? '';
    $getLokasi = $_GET['lokasi'] ?? '';
?>
<section id="event" class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0 bg-dark">
                <div class="card-body">
                    <h2 class="card-title text-white text-center">Event</h2>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <div class="form-filter">
                                <form action="" method="get">                                    
                                    <input type="hidden" name="pag" value="event">
                                    <select class="form-control" id="bulan" name="bulan">
                                        <option value="">Pilih Bulan</option>
                                        <option value="januari" <?= $getBulan == 'januari' ? 'selected' : '' ?>>Januari</option>
                                        <option value="februari" <?= $getBulan == 'februari' ? 'selected' : '' ?>>Februari</option>                                        
                                    </select>                                    
                                    <select class="form-control" id="lokasi" name="lokasi">
                                        <option value="">Pilih Lokasi</option>
                                        <option value="jakarta" <?= $getLokasi == 'jakarta' ? 'selected' : '' ?>>Jakarta</option>
                                        <option value="bandung" <?= $getLokasi == 'bandung' ? 'selected' : '' ?>>Bandung</option>                                        
                                    </select>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-5">
                        <div class="col-md-4">
                            <div class="card shadow border-0 card-event" id="event01">
                                <div class="row g-0">
                                    <div class="col-md-4 date-event">
                                        <span>10 Feb 2024</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">AHMT Geber Adventure - WMS</h5>
                                            <p class="card-text">Event by Honda Indonesia</p>
                                            <a href="?pag=eventdetail&d=1" class="btn btn-sm btn-danger">Check Event</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow border-0 card-event" id="event02">
                                <div class="row g-0">
                                    <div class="col-md-4 date-event">
                                        <span>10 Feb 2024</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">AHMT Geber Adventure - WMS</h5>
                                            <p class="card-text">Event by Honda Indonesia</p>
                                            <a href="?pag=eventdetail&d=1" class="btn btn-sm btn-danger">Check Event</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow border-0 card-event" id="event03">
                                <div class="row g-0">
                                    <div class="col-md-4 date-event">
                                        <span>10 Feb 2024</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">AHMT Geber Adventure - WMS</h5>
                                            <p class="card-text">Event by Honda Indonesia</p>
                                            <a href="?pag=eventdetail&d=1" class="btn btn-danger">Check Event</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>