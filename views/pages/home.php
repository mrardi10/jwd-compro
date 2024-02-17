<section id="home" class="container py-4">
    <div class="row">

        <div class="col-md-12 mb-4">
            <div class="card shadow border-0">                        
            <iframe class="w-100" height="400" src="https://www.youtube.com/embed/<?= $video_home ?>?si=Er4mxov2Y2D--aS3&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">                
                    <?= $kata_pengantar ?>                  
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
    var data = [100, 120, 140, 160, 180, 200]; 

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
            min: 0
        },
        series: [{
            type: 'line',
            name: 'Member',
            data: data,
            color: '#cf314c'
        }]
    });
</script>