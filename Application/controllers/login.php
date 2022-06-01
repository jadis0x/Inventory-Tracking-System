<?php

class login extends controller
{
    public function index()
    {
        $this->render('login');
    }

    public function send()
    {
        if (isset($_POST)) {
            $email = helper::cleaner($_POST['email']);
            $password = helper::cleaner($_POST['sifre']);

            if ($email != "" && $password != "") {
                $control = $this->model('uyeModel')->control($email, md5($password));

                if ($control == 0) {
                    helper::flashData("statu", "Kullanıcı Bulunamadı!");
                    helper::redirect(SITE_URL . "/login");
                } else {
                    sessionManager::createSession(['email' => $email, 'password' => md5($password)]);
                    helper::redirect(SITE_URL);
                }
            } else {
                helper::flashData("statu", "Lütfen Tüm Alanları Giriniz!");
                helper::redirect(SITE_URL . "/login");
            }
        } else {
            exit("HATA :: POST");
        }
    }
}
