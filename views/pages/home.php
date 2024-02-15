<section id="home" class="container py-4">
    <div class="row">

        <div class="col-md-12 mb-4">
            <div class="card shadow border-0">            
            <iframe class="w-100" height="400" src="https://www.youtube.com/embed/O8zmISoEB9U?si=Er4mxov2Y2D--aS3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-center">Selamat datang di Honda Riders Community!</h2>
                    <p class="card-text">
                        Salam sejahtera bagi seluruh penggemar motor Honda di seluruh penjuru. Saya dengan bangga menyambut Anda di Honda Riders Community, wadah yang kami ciptakan untuk menghubungkan hati dan semangat para pengendara Honda.
                    </p>
                    <p class="card-text">
                        Seiring berjalannya waktu, kami telah membentuk keluarga besar di mana setiap kehadiran memiliki makna yang mendalam. Bersama-sama, kami mengarungi setiap kilometer dengan semangat persaudaraan, merayakan kebebasan, dan menjalin ikatan yang kokoh di atas dua roda.
                    </p>
                    <p class="card-text">
                        Honda Riders Community bukan sekadar sebuah klub pengendara, melainkan tempat di mana kisah petualangan tercipta, pengalaman dibagikan, dan pertemanan diperkokoh. Di sini, setiap perjalanan memiliki arti tersendiri, dan setiap anggota adalah bagian tak terpisahkan dari cerita yang kita tulis bersama.
                    </p>
                    <p class="card-text">
                        Kami berkomitmen untuk menjadi sumber inspirasi, wadah pembelajaran, dan tempat bertukar ide bagi setiap pengendara Honda. Mari bergabung, jadilah bagian dari perjalanan ini, dan rasakan kehangatan komunitas yang membangkitkan semangat setiap penggemar motor Honda.
                    </p>
                    <p class="card-text">
                        Terima kasih atas dukungan dan partisipasinya. Bersama-sama, kita akan terus menjelajahi, menginspirasi, dan merayakan kehidupan di atas roda.
                    </p>
                    <p class="card-text">
                        <span class="text-iconic">Selamat menikmati perjalanan, Honda Riders!</span>
                    </p>
                    <p class="card-text">
                        Ardi
                        <br>
                        Ketua Honda Riders Community
                    </p>
                    <a href="?pag=profile">
                        <button type="button" class="btn btn-sm btn-danger">
                            Kunjungi Profil
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="d-block p-4 background-logo">
                <img src="assets/image/logo-no-bg.png" class="img-fluid w-100 mb-4" alt="Honda Riders Community">
            </div>
            <div class="d-block mt-3">
                <div id="member" class="graph-content"></div>
            </div>
        </div>
        <div class="col-md-12">

        </div>
    </div>
</section>
<!-- Load Highcharts library -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/themes/dark-unica.js"></script>
<script>
    // Data anggota klub motor per bulan (contoh)
    var data = [100, 120, 140, 160, 180, 200]; // Data anggota selama 6 bulan terakhir yang naik

    // Membuat grafik menggunakan Highcharts
    Highcharts.chart('member', {
        title: {
            text: 'Pertumbuhan Member'
        },
        xAxis: {
            categories: ['Sep 23', 'Oct 23', 'Nov 23', 'Dec 23','Jan 24','Feb 24'] // Bulan-bulan terakhir
        },
        yAxis: {
            title: {
                text: 'Jumlah Member'
            },
            min: 0 // Label dimulai dari 0
        },
        series: [{
            type: 'line',
            name: 'Member',
            data: data,
            color: '#cf314c'
        }]
    });
</script>