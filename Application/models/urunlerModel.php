<?php

class urunlerModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("SELECT * FROM urunler");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad, $kategoriId, $ozellik)
    {
        $query = $this->db->prepare("INSERT INTO urunler(ad, kategoriId, ozellikler, date) VALUES (?,?,?,?)");
        $date = date("Y-m-d");
        $insert = $query->execute(array($ad, $kategoriId, $ozellik, $date));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id)
    {
        $query = $this->db->prepare("SELECT * FROM urunler WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id, $ad, $kategoriId, $ozellik)
    {
        $query = $this->db->prepare("UPDATE urunler SET ad = ?, kategoriId = ?, ozellikler = ? WHERE id = ?");
        $update = $query->execute(array($ad, $kategoriId, $ozellik, $id));

        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function getDelete($id)
    {
        $query = $this->db->prepare("DELETE FROM urunler WHERE id = ?");
        $query->execute(array($id));
    }

    public function ara($name)
    {
        $query = $this->db->prepare("SELECT * FROM urunler WHERE ad LIKE ?");
        $query->execute(array("%" . $name . "%"));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
