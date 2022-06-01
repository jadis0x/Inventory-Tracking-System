<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= $this->model('raporModel')->toplamGelir(); ?></h3>

                        <p>Toplam Gelir</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $this->model('raporModel')->toplamGider(); ?></h3>

                        <p>Toplam Gider</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= $this->model('raporModel')->toplamGelir() - $this->model('raporModel')->toplamGider(); ?></h3>

                        <p>Kalan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <section class="col-lg-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i style="font-size: 17px;" class="fa fa-search"></i>
                        <h4 style="display: inline-block;">Hızlı Ürün Ara</h4>
                    </div>

                    <form action="" method="POST">
                        <div class="box-body">

                            <div class="form-group">
                                <input type="search" class="form-control" name="ad" placeholder="Ürün Adı Giriniz..">
                            </div>

                            <?php
                            // arama yapıldıysa
                            if ($_POST) {
                                $data = $this->model('urunlerModel')->ara($_POST['ad']);

                                if (count($data) != 0) {
                            ?>
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Ad</th>
                                            <th>Stok Giriş</th>
                                            <th>Stok Çıkış</th>
                                            <th>Stok Kalan</th>
                                        </tr>
                                        <?php
                                        foreach ($data as $key => $value) {
                                            $girenAdet = $this->model('raporModel')->girenUrunAdet($value['id']);
                                            $cikanAdet = $this->model('raporModel')->cikanUrunAdet($value['id']);
                                        ?>
                                            <tr>
                                                <td><?= $value['id']; ?></td>
                                                <td><?= $value['ad']; ?></td>
                                                <td><?= $girenAdet; ?></td>
                                                <td><?= $cikanAdet; ?></td>
                                                <td><?= $girenAdet - $cikanAdet; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-right btn btn-default">Ara <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>
            </section>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->