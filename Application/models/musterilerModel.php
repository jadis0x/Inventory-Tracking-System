<?php

class musterilerModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("SELECT * FROM musteriler");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad, $soyad, $sirket, $email, $telefon, $adres, $tc, $notu)
    {
        $query = $this->db->prepare("INSERT INTO musteriler (ad, soyad, email, telefon, adres, tc, notu, sirket, date) VALUES (?,?,?,?,?,?,?,?,?)");
        $date = date("Y-m-d");
        $insert = $query->execute(array($ad, $soyad, $email, $telefon, $adres, $tc, $notu, $sirket, $date));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id)
    {
        $query = $this->db->prepare("SELECT * FROM musteriler WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id, $ad, $soyad, $sirket, $email, $telefon, $adres, $tc, $notu)
    {
        $query = $this->db->prepare("UPDATE musteriler SET ad = ?, soyad = ?, sirket = ?, email = ?, telefon = ?, adres = ?, tc = ?, notu = ? WHERE id = ?");
        $update = $query->execute(array($ad, $soyad, $sirket, $email, $telefon, $adres, $tc, $notu, $id));

        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM musteriler WHERE id = ?");
        $query->execute(array($id));
    }
}
