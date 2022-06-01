<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= IMG_PATH; ?>/default.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $this->myuserinfo['ad']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 0)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>KATEGORİLER</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/category/create"><i class="fa fa-circle-o text-aqua"></i> Yeni Kategori Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/category"><i class="fa fa-circle-o text-aqua"></i> Kategori Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>


            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 1)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>ÜRÜNLER</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/urunler/create"><i class="fa fa-circle-o text-aqua"></i> Yeni Ürün Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/urunler"><i class="fa fa-circle-o text-aqua"></i> Ürün Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>


            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 2)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>MÜŞTERİLER</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/musteriler/create"><i class="fa fa-circle-o text-aqua"></i> Yeni Müşteri Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/musteriler"><i class="fa fa-circle-o text-aqua"></i> Müşteri Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>

            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 3)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>STOK İŞLEMLERİ</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/stok/create"><i class="fa fa-circle-o text-aqua"></i> Yeni Stok İşlemi Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/stok"><i class="fa fa-circle-o text-aqua"></i> Stok İşlemleri Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>


            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 4)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>KASA</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/kasa/create"><i class="fa fa-circle-o text-aqua"></i> Yeni Kasa Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/kasa"><i class="fa fa-circle-o text-aqua"></i> Kasa Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>


            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 5)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>FATURALAR</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/fatura/create"><i class="fa fa-circle-o text-aqua"></i> Yeni Fatura Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/fatura"><i class="fa fa-circle-o text-aqua"></i> Fatura Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>

            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 6)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>KULLANICILAR</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/kullanici/create"><i class="fa fa-circle-o text-aqua"></i>Yeni Kullanıcı Oluştur</a></li>
                        <li><a href="<?= SITE_URL; ?>/kullanici/"><i class="fa fa-circle-o text-aqua"></i>Kullanıcı Listesi</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>

            <?php
            if ($this->model('uyeModel')->permission($this->myuserid, 7)) {
            ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>RAPORLAR</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= SITE_URL; ?>/rapor/urun"><i class="fa fa-circle-o text-aqua"></i>Ürün Listesi</a></li>
                        <li><a href="<?= SITE_URL; ?>/rapor/musteri"><i class="fa fa-circle-o text-aqua"></i>Müşteri Listesi</a></li>
                        <li><a href="<?= SITE_URL; ?>/rapor/tarih"><i class="fa fa-circle-o text-aqua"></i>Tarih Bazlı Raporlama</a></li>
                        <li><a href="<?= SITE_URL; ?>/rapor/kasa"><i class="fa fa-circle-o text-aqua"></i>Kasa Raporu</a></li>
                    </ul>
                </li>
            <?php
            }
            ?>

            <li>
                <a href="<?= SITE_URL; ?>/logout"><i class="fa fa-laptop"></i><span>Çıkış</span></a>
            </li>

    </section>
</aside>