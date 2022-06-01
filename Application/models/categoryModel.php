<?php

class categoryModel extends model
{
    public function create($ad)
    {
        $query = $this->db->prepare("INSERT INTO kategori (ad) VALUES (?)");
        $insert = $query->execute(array($ad));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function listview()
    {
        $query = $this->db->prepare("SELECT * FROM kategori");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getData($id)
    {
        $query = $this->db->prepare("SELECT * FROM kategori WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id, $ad)
    {
        $query = $this->db->prepare("UPDATE kategori SET ad = ? WHERE id = ?");
        $update = $query->execute(array($ad, $id));

        return $update;
    }

    public function deleteData($id)
    {
        $query = $this->db->prepare("DELETE FROM kategori WHERE id = ?");
        $query->execute(array($id));
    }
}
