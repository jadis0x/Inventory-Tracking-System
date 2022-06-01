<?php

class stok extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 3)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('stokModel')->listview();

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stok/index', ['data' => $data]);
        $this->render('site/footer');
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 3)) {
            helper::redirect(SITE_URL);
            die();
        }

        $urunler = $this->model('urunlerModel')->listview();
        $musteriler = $this->model('musterilerModel')->listview();
        $kasalar = $this->model('kasaModel')->listview();

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('stok/create', ['urunler' => $urunler, 'musteriler' => $musteriler, 'kasalar' => $kasalar]);
        $this->render('site/footer');
    }

    public function send()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 3)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $urun_id = intval($_POST['urun_id']);
            $musteri_id = intval($_POST['musteri_id']);
            $islem_tipi = intval($_POST['islem_tipi']);
            $adet = intval($_POST['adet']);
            $fiyat = helper::cleaner($_POST['fiyat']);
            $kasa_id = intval($_POST['kasa_id']);

            if ($adet != 0 && $fiyat != "") {
                $insert = $this->model('stokModel')->create($urun_id, $musteri_id, $islem_tipi, $adet, $fiyat, $kasa_id);

                if ($insert) {
                    helper::flashData("statu", "Stok başarıyla eklendi.");
                    helper::redirect(SITE_URL . "/stok/create");
                } else {
                    helper::flashData("statu", "Stok eklenemedi.");
                    helper::redirect(SITE_URL . "/stok/create");
                }
            } else {
                helper::flashData("statu", "Stok fiyat ve adeti boş bırakılamaz!");
                helper::redirect(SITE_URL . "/stok/create");
            }
        } else {
            echo "Geçersiz İstek";
        }
    }

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 3)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('stokModel')->getData($id);

        $urunler = $this->model('urunlerModel')->listview();
        $musteriler = $this->model('musterilerModel')->listview();
        $kasalar = $this->model('kasaModel')->listview();


        $this->render('site/header');   
        $this->render('site/sidebar');
        $this->render('stok/edit', ['data' => $data, 'urunler' => $urunler, 'musteriler' => $musteriler, 'kasalar' => $kasalar]);
        $this->render('site/footer');
    }

    public function update($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 3)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $urun_id = intval($_POST['urun_id']);
            $musteri_id = intval($_POST['musteri_id']);
            $islem_tipi = intval($_POST['islem_tipi']);
            $adet = intval($_POST['adet']);
            $fiyat = helper::cleaner($_POST['fiyat']);
            $kasa_id = intval($_POST['kasa_id']);

            if ($adet != 0 && $fiyat != "") {
                $insert = $this->model('stokModel')->updateData($id, $urun_id, $musteri_id, $islem_tipi, $adet, $fiyat, $kasa_id);

                if ($insert) {
                    helper::flashData("statu", "Stok başarıyla düzenlendi.");
                    helper::redirect(SITE_URL . "/stok/edit/" . $id);
                } else {
                    helper::flashData("statu", "Stok düzenlenirken bir hata oluştu.");
                    helper::redirect(SITE_URL . "/stok/edit/" . $id);
                }
            } else {
                helper::flashData("statu", "Stok fiyat ve adeti boş bırakılamaz!");
                helper::redirect(SITE_URL . "/stok/edit");
            }
        } else {
            echo "Geçersiz İstek";
        }
    }

    public function delete($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 3)) {
            helper::redirect(SITE_URL);
            die();
        }

        $query = $this->model('stokModel')->getDelete($id);
        helper::redirect(SITE_URL . "/stok");
    }
}
