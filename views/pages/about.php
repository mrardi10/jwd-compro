<section id="about" class="container py-4">
    <div class="row">
        <div class="col-md-4 text-center">
            <?php
            foreach ($gambar_about as $k => $item) :
            ?>
                <img src="assets/image/<?= $item['content'] ?>" class="img-fluid w-100 mb-4" alt="Gambar Tentang Kami <?= $k+1 ?>">                
            <?php endforeach; ?>                        
        </div>
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">
                    <?= $teks_about; ?>
                </div>
            </div>
        </div>
    </div>
</section>