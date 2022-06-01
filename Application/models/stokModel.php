<?php

class stokModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("SELECT * FROM stok");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($urun_id, $musteri_id, $islem_tipi, $adet, $fiyat, $kasa_id)
    {
        $query = $this->db->prepare("INSERT INTO stok(urun_id, musteri_id, islem_tipi, adet, fiyat, date, kasa_id) VALUES (?,?,?,?,?,?,?)");
        $date = date("Y-m-d");
        $insert = $query->execute(array($urun_id, $musteri_id, $islem_tipi, $adet, $fiyat, $date, $kasa_id));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id)    
    {
        $query = $this->db->prepare("SELECT * FROM stok WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id, $urun_id, $musteri_id, $islem_tipi, $adet, $fiyat, $kasa_id)
    {
        $query = $this->db->prepare("UPDATE stok SET urun_id = ?, musteri_id = ?, islem_tipi = ?, adet = ?, fiyat = ?, kasa_id = ? WHERE id = ?");
        $update = $query->execute(array($urun_id, $musteri_id, $islem_tipi, $adet, $fiyat, $kasa_id, $id));

        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function getDelete($id)
    {
        $query = $this->db->prepare("DELETE FROM stok WHERE id = ?");
        $query->execute(array($id));
    }
}
