<section id="profile" class="container py-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow p-4  border-0">
        <div class="card-title">
          <h2 class="text-center">Profil Honda Riders Community</h2>
        </div>
        <div class="card-body">
          <p>Honda Riders Community, didirikan pada tahun 1999, telah menjadi rumah bagi ribuan penggemar motor Honda yang bersatu dalam semangat petualangan. Komunitas ini tidak hanya menyediakan platform bagi pengendara untuk berkumpul, tetapi juga menjadi sumber inspirasi, pengetahuan, dan kebersamaan di atas jalan raya.</p>
          <div class="row mx-0">
            <div class="col-md-12 text-center">
              <img src="assets/image/profile.png" class="img-fluid mb-4 w-50" alt="Gambar Profil">
            </div>
            <div class="col-md-6">
              <div class="card-title">
                <h3>Pengalaman Kami</h3>
              </div>
              <ul>
                <?php
                foreach ($pengalaman_profile as $k => $item) :
                ?>
                  <li>
                    <?= $item['content'] ?>
                  </li>
                <?php endforeach; ?>
              </ul>

            </div>
            <div class="col-md-6">
              <div class="card-title">
                <h3>Kelebihan Kami</h3>
              </div>
              <ul class="list-unstyled powerlist">
                <?php
                foreach ($kelebihan_profile as $k => $item) :
                ?>
                  <li>
                    <i class="fas fa-check-circle"></i>
                    <?= $item['content'] ?>
                  </li>
                <?php endforeach; ?>         
              </ul>
            </div>
          </div>
          <p>Honda Riders Community terus tumbuh dan berkembang, membangun jembatan antara penggemar motor Honda, menciptakan pengalaman berkendara yang unik, dan menjadi kekuatan positif di komunitas.</p>
        </div>
      </div>
    </div>
  </div>
</section>