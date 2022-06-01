<?php

class category extends controller
{

    public function index()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 0)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('categoryModel')->listview();

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('category/index', ['data' => $data]);
        $this->render('site/footer');
    }

    public function create()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 0)) {
            helper::redirect(SITE_URL);
            die();
        }

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('category/create');
        $this->render('site/footer');
    }

    public function send()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 0)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $ad = helper::cleaner($_POST['ad']);

            if ($ad != "") {
                $ekle = $this->model('categoryModel')->create($ad);

                if ($ekle) {
                    helper::flashData("statu", "Kategori Eklendi.");
                    helper::redirect(SITE_URL . "/category/create");
                } else {
                    helper::flashData("statu", "Kategori eklenirken bir hata oluştu.");
                    helper::redirect(SITE_URL . "/category/create");
                }
            } else {
                helper::flashData("statu", "Lütfen tüm alanları doldurun.");
                helper::redirect(SITE_URL . "/category/create");
            }
        } else {
            exit("Giriş Yok");
        }
    }

    public function edit($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 0)) {
            helper::redirect(SITE_URL);
            die();
        }

        $data = $this->model('categoryModel')->getData($id);

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('category/edit', ['data' => $data]);
        $this->render('site/footer');
    }

    public function update($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 0)) {
            helper::redirect(SITE_URL);
            die();
        }

        if (isset($_POST)) {
            $ad = helper::cleaner($_POST['ad']);

            if ($ad != "") {
                $duzenle = $this->model('categoryModel')->updateData($id, $ad);

                if ($duzenle) {
                    helper::flashData("statu", "Kategori Başarıyla Düzenlendi.");
                    helper::redirect(SITE_URL . "/category/edit/" . $id);
                } else {
                    helper::flashData("statu", "Kategori düzenlenirken bir hata oluştu.");
                    helper::redirect(SITE_URL . "/category/edit/" . $id);
                }
            } else {
                helper::flashData("statu", "Lütfen tüm alanları doldurun.");
                helper::redirect(SITE_URL . "/category/edit/" . $id);
            }
        } else {
            exit("Giriş Yok");
        }
    }

    public function delete($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        if (!$this->model('uyeModel')->permission($this->myuserid, 0)) {
            helper::redirect(SITE_URL);
            die();
        }

        $delete = $this->model('categoryModel')->deleteData($id);

        helper::redirect(SITE_URL . "/category");
    }
}
