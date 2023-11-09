<?= $this->extend('/template/template-fe') ?>
<?= $this->section('content') ?>

<div class="col-sm-8">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="420px" src="<?= base_url('ui-img/logo1.jpeg') ?>" alt="first slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="420px" src="<?= base_url('ui-img/logo2.png') ?>" alt="second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="420px" src="<?= base_url('ui-img/logo3.png') ?>" alt="third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-sm-4">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Jumlah Pendaftar Saat Ini</h5>
        </div>
        <div class="card-body">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number">813</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-men"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Laki-Laki</span>
                        <span class="info-box-number">421</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-women"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Perempuan</span>
                        <span class="info-box-number">392</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <a href="<?= base_url('ppdb/register') ?>" class="btn btn-info btn-flat btn-block"><i class="fas fa-file-alt"></i> Daftar Sekarang!</a>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>