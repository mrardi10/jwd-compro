<?php
$d = $_GET['d'] ?? '';
?>
<section id="galeri-detail" class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="mt-5 text-center">Touring Akhir Tahun ke Pegunungan atau Pantai Ini yang Perlu Diperhatikan</h2>
                    <p class="card-text text-center">
                        <i class="fa fa-calendar-alt"></i> 12 Des 2023 &nbsp;
                        <i class="fa fa-user"></i> Honda Riders Community
                    </p>
                    <div class="row mx-0">
                        <div class="col-md-12 text-center">
                            <img src="assets/image/artikel-<?= $d ?>.jpg" class="w-50" alt="Gambar Artikel Honda Riders Community">
                        </div>
                        <div class="col-md-12 mt-4">

                            <p>Brad &amp; Sis, tak terasa saat ini kita sudah berada di penghujung tahun 2023 atau sudah jelang akhir tahun. Dimana sebagian besar masyarakat di Indonesia akan menikmati liburan dalam rangka natal dan tahun baru (Nataru). Demikian pula para bikers, biasanya ada yang memanfaatkan liburannya ini dengan melakukan kegiatan touring.</p>

                            <p>Selain untuk mengisi liburan, touring akhir tahun&nbsp;dilakukan para bikers sekaligus juga untuk melepas penat dari rutinitas sehari-hari serta sebagai ajang untuk bersilaturahmi antar bikers. Lokasi tujuan touring biasanya yang pilih para bikers menyasar ke daerah pegunungan atau pantai.</p>

                            <p><img alt="" src="https://i.ibb.co/grsrz0v/Jamnas-dan-Anniversary-CB150-X-ADV-ID.jpg"></p>

                            <p>Kemana pun tujuan touring, apalagi jarak jauh, perlu diingat dan harus diperhatikan adalah pastikan kondisi kesehatan si bikers nya sedang stabil atau prima. Riding jarak jauh membutuhkan daya tahan tubuh yang kuat, karena akan bersentuhan langsung dengan udara panas atau dingin. Sebelum berangkat, istirahatlah yang cukup dengan tidur lebih awal dan hindari begadang.</p>

                            <p>Kemudian cek kondisi sepeda motor yang akan digunakan, pastikan dalam keadaan baik sebelum digunakan. Cek kondisi rem, rantai, aki, oli, ban, dan lampu-lampu sebelum berkendara, terutama pengecekan lampu depan, rem, belakang, dan sein. Jika akan berpergian jarak jauh, pengendara disarankan melakukan pengecekan di bengkel resmi terpercaya.</p>

                            <p><img alt="" src="https://i.ibb.co/BqbsdjL/IMG-4359.jpg"></p>

                            <p>Tak kalah penting adalah perlengkapan berkendara seperti safety gear harus sesuai standar untuk mendukung #Cari_Aman dan kenyamanan selama perjalanan. Guna menghadapi kemungkinan cuaca panas dan dingin saat berkendara gunakan jaket, sarung tangan, helm bervisor (kaca) bening, sepatu tertutup sampai mata kaki, dan jas hujan setelan.</p>

                            <p>Brad Rio, Sekjen CB150X ADV.ID menyarankan jika para bikers ingin melakukan touring akhir tahun agar benar-benar matang dalam memilih lokasi tujuannya mau kemana. “Karena mau memilih ke daerah pegunungan maupun pantai, biasanya karena liburan akhir tahun, semuanya pasti ramai dan jalanan pun biasanya macet. Jika ingin pesan penginapan, harus dari jauh-jauh hari karena pasti akan susah kalo carinya on the spot,’ saran Brad Rio.</p>

                            <p><img alt="" src="https://i.ibb.co/JF6tq6z/Lembah-Arau.jpg"></p>

                            <p>Sementara itu, Ketua Ikatan Motor Honda Jawa Barat (IMHJB) Brad Igoy menyampaikan bahwasannya touring akhir tahun sudah menjadi menjadi salah satu agenda yang ditunggu para bikers. “Karena banyak bikers yang mendapatkan cuti bersama atau libur nasional. Untuk itu, tentunya kita harus menyiapkan lokasi tujuan yang jelas seperti spot wisata yang recommended dengan budget seminimal mungkin, tapi suguhan destinasi wisata yang sangat indah,” ujar Brad Igoy.</p>

                            <p><img alt="" src="https://i.ibb.co/L8rmYGv/20220910163248-IMG-6276.jpg"></p>

                            <p>Jika lokasi tujuan touring ke pantai, Ketua paguyuban Honda West Borneo Community (HWBC) Brad Fery menyarankan dengan konsep camping. “Supaya dapat momen kebersamaannya, lebih bagus lagi konsepnya family gathering ditambah dengan kegiatan bakar-bakar jagung atau sosis. Kita bisa ngobrol santai di depan tenda sambil sharing atau berbagi cerita seputar komunitas atau dunia bikers,” tutup Brad Fery.</p>

                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h2 class="card-title text-center">Artikel Lainnya</h2>
                        <div class="row mx-0">
                            <?php if ($d != 1) : ?>
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

                            <?php if ($d != 2) : ?>
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

                            <?php if ($d != 3) : ?>
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