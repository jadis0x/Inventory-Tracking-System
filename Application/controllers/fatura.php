<?php

class fatura extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 5)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('faturaModel')->listview();

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('faturalar/index', ['data' => $data]);
        $this->render('site/footer');
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 5)) {
            helper::redirect(SITE_URL);
            die();
        }

        $musteriler = $this->model('musterilerModel')->listview();

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('faturalar/create', ['musteriler' => $musteriler]);
        $this->render('site/footer');
    }

    public function send()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 5)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $musteriid = intval($_POST['musteriid']);
            $fatura_no = intval($_POST['fatura_no']);
            $tip = intval($_POST['tip']);
            $tutar = helper::cleaner($_POST['tutar']);
            $aciklama = helper::cleaner($_POST['aciklama']);

            if ($musteriid != 0 && $fatura_no != 0 && $tutar != "") {
                $insert = $this->model("faturaModel")->create($musteriid, $fatura_no, $tutar, $aciklama, $tip);

                if ($insert) {
                    helper::flashData("statu", "Fatura başarıyla eklendi");
                    helper::redirect(SITE_URL . "/fatura/create");
                } else {
                    helper::flashData("statu", "Fatura eklenirken bir hata oluştu");
                    helper::redirect(SITE_URL . "/fatura/create");
                }
            } else {
                helper::flashData("statu", "Lütfen gerekli yerleri doldurunuz");
                helper::redirect(SITE_URL . "/fatura/create");
            }
        } else {
            exit("Geçersiz İstek");
        }
    }

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 5)) {
            helper::redirect(SITE_URL);
            die();
        }

        $musteriler = $this->model('musterilerModel')->listview();
        $data = $this->model('faturaModel')->getData($id);

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('faturalar/edit', ['musteriler' => $musteriler, 'data' => $data]);
        $this->render('site/footer');
    }

    public function update($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 5)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $musteriid = intval($_POST['musteriid']);
            $fatura_no = intval($_POST['fatura_no']);
            $tip = intval($_POST['tip']);
            $tutar = helper::cleaner($_POST['tutar']);
            $aciklama = helper::cleaner($_POST['aciklama']);

            if ($musteriid != 0 && $fatura_no != 0 && $tutar != "") {
                $insert = $this->model("faturaModel")->updateData($id, $musteriid, $fatura_no, $tutar, $aciklama, $tip);

                if ($insert) {
                    helper::flashData("statu", "Fatura başarıyla düzenlendi");
                    helper::redirect(SITE_URL . "/fatura/edit/" . $id);
                } else {
                    helper::flashData("statu", "Fatura düzenlenirken bir hata oluştu");
                    helper::redirect(SITE_URL . "/fatura/edit/" . $id);
                }
            } else {
                helper::flashData("statu", "Lütfen gerekli yerleri doldurunuz");
                helper::redirect(SITE_URL . "/fatura/edit/" . $id);
            }
        } else {
            exit("Geçersiz İstek");
        }
    }

    public function delete($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 5)) {
            helper::redirect(SITE_URL);
            die();
        }

        $sil = $this->model('faturaModel')->getDelete($id);
        helper::redirect(SITE_URL . "/fatura");
    }
}
