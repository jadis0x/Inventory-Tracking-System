<?php

class uyeModel extends model
{
    public function control($email, $password)
    {
        $query = $this->db->prepare("SELECT * FROM uyeler WHERE email = ? AND sifre = ?");
        $query->execute(array($email, $password));

        return $query->rowCount();
    }

    // yetki ayarı
    public function permission($id, $permission)
    {
        $data = $this->getData($id);

        if ($data['yetki'] == "") {
            return true;
        } else {
            $permissions = explode(',', $data['yetki']);

            if (in_array($permission, $permissions)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function listview()
    {
        $query = $this->db->prepare("SELECT * FROM uyeler");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad, $email, $sifre, $yetki)
    {
        $query = $this->db->prepare("INSERT INTO uyeler(ad,email,sifre,yetki) VALUES (?,?,?,?)");
        $insert = $query->execute(array($ad, $email, $sifre, $yetki));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id)
    {
        $query = $this->db->prepare("SELECT * FROM uyeler WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id, $ad, $email, $sifre, $yetki)
    {
        $query = $this->db->prepare("UPDATE uyeler SET ad = ?, email = ?, sifre = ?, yetki = ? WHERE id = ?");
        $update = $query->execute(array($ad, $email, $sifre, $yetki, $id));

        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function getDelete($id)
    {
        $query = $this->db->prepare("DELETE FROM uyeler WHERE id = ?");
        $query->execute(array($id));
    }
}
