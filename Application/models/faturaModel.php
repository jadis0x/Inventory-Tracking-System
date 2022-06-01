<?php

class faturaModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("SELECT * FROM faturalar");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($musteriid, $fatura_no, $tutar, $aciklama, $tip)
    {
        $query = $this->db->prepare("INSERT INTO faturalar(musteriid,fatura_no,tutar,aciklama,tip) VALUES (?,?,?,?,?)");
        $insert = $query->execute(array($musteriid, $fatura_no, $tutar, $aciklama, $tip));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id)
    {
        $query = $this->db->prepare("SELECT * FROM faturalar WHERE id = ?");
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updateData($id, $musteriid, $fatura_no, $tutar, $aciklama, $tip)
    {
        $query = $this->db->prepare("UPDATE faturalar SET musteriid = ?, fatura_no = ?, tutar = ?, aciklama = ?, tip = ? WHERE id = ?");
        $update = $query->execute(array($musteriid, $fatura_no, $tutar, $aciklama, $tip, $id));

        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function getDelete($id)
    {
        $query = $this->db->prepare("DELETE FROM faturalar WHERE id = ?");
        $query->execute(array($id));
    }
}
