<?php

class kullanici extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 6)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('uyeModel')->listview();

        $this->render("site/header");
        $this->render("site/sidebar");
        $this->render("uyeler/index", ['data' => $data]);
        $this->render("site/footer");
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 6)) {
            helper::redirect(SITE_URL);
            die();
        }

        $this->render("site/header");
        $this->render("site/sidebar");
        $this->render("uyeler/create");
        $this->render("site/footer");
    }

    public function send()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 6)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $ad = helper::cleaner($_POST['ad']);
            $email = helper::cleaner($_POST['email']);
            $sifre = helper::cleaner($_POST['sifre']);
            $izinler = $_POST['izinler'];

            if ($ad != "" && $email != "" && $sifre != "") {
                $insert = $this->model('uyeModel')->create($ad, $email, md5($sifre), implode(',', $izinler));

                if ($insert) {
                    helper::flashData("statu", "Kullanıcı Eklendi!");
                    helper::redirect(SITE_URL . "/kullanici/create");
                } else {
                    helper::flashData("statu", "Kullanıcı eklenirken bir hata oluştu");
                    helper::redirect(SITE_URL . "/kullanici/create");
                }
            } else {
                helper::flashData("statu", "Gerekli alanları doldurunuz");
                helper::redirect(SITE_URL . "/kullanici/create");
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

        if (!$this->model('uyeModel')->permission($this->myuserid, 6)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('uyeModel')->getData($id);

        $this->render("site/header");
        $this->render("site/sidebar");
        $this->render("uyeler/edit", ['data' => $data]);
        $this->render("site/footer");
    }

    public function update($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 6)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $ad = helper::cleaner($_POST['ad']);
            $email = helper::cleaner($_POST['email']);
            $sifre = $_POST['sifre'];
            $izinler = $_POST['izinler'];

            if ($ad != "" && $email != "") {

                if ($sifre == "") {
                    $data = $this->model('uyeModel')->getData($id);
                    $sifre = $data['sifre'];
                } else {
                    $sifre = md5($sifre);
                }

                $insert = $this->model('uyeModel')->updateData($id, $ad, $email, $sifre, implode(',', $izinler));
                if ($insert) {
                    helper::flashData("statu", "Kullanıcı düzenlendi");
                    helper::redirect(SITE_URL . "/kullanici/edit/" . $id);
                } else {
                    helper::flashData("statu", "Kullanıcı düzenlenirken bir hata oluştu");
                    helper::redirect(SITE_URL . "/kullanici/edit/" . $id);
                }
            } else {
                helper::flashData("statu", "Gerekli alanları doldurunuz");
                helper::redirect(SITE_URL . "/kullanici/edit/" . $id);
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

        if (!$this->model('uyeModel')->permission($this->myuserid, 6)) {
            helper::redirect(SITE_URL);
            die();
        }

        $delete = $this->model('uyeModel')->getDelete($id);
        helper::redirect(SITE_URL . "/kullanici/");
    }
}
