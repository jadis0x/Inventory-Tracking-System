<?php

class raporModel extends model
{
    public function girenUrunToplam($id)
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam FROM stok WHERE urun_id = ? AND islem_tipi ='0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['toplam']);
    }

    public function cikanUrunToplam($id)
    {

        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam  FROM stok WHERE urun_id = ? AND islem_tipi ='1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['toplam']);
    }

    public function girenUrunAdet($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE urun_id = ? AND islem_tipi ='0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['SUM(adet)']);
    }

    public function cikanUrunAdet($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE urun_id = ? AND islem_tipi ='1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['SUM(adet)']);
    }

    public function toplamAlinanUrun($id) // muster_id
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE musteri_id = ? AND islem_tipi ='0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['SUM(adet)']);
    }

    public function toplamSatilanUrun($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE musteri_id = ? AND islem_tipi ='1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['SUM(adet)']);
    }

    public function toplamKazanilanPara($id)
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam FROM stok WHERE musteri_id = ? AND islem_tipi ='1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['toplam']);
    }

    public function toplamKaybedilenPara($id)
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam FROM stok WHERE musteri_id = ? AND islem_tipi ='0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['toplam']);
    }

    public function toplamGelir()
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam FROM stok WHERE islem_tipi = '1'");
        $query->execute();
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['toplam']);
    }

    public function toplamGider()
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam FROM stok WHERE islem_tipi = '0'");
        $query->execute();
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['toplam']);
    }

    public function filtrele($firstDate, $secondDate)
    {
        $query = $this->db->prepare('SELECT * FROM stok WHERE date BETWEEN ? AND ? group by urun_id');
        $query->execute(array($firstDate, $secondDate));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // KASA HESAPLAMALARI


    public function girenUrunToplamKasa($id)
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam FROM stok WHERE kasa_id = ? AND islem_tipi ='0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['toplam']);
    }

    public function cikanUrunToplamKasa($id)
    {

        $query = $this->db->prepare("SELECT SUM(fiyat*adet) as toplam  FROM stok WHERE kasa_id = ? AND islem_tipi ='1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['toplam']);
    }

    public function girenUrunAdetKasa($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE kasa_id = ? AND islem_tipi ='0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['SUM(adet)']);
    }

    public function cikanUrunAdetKasa($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE kasa_id = ? AND islem_tipi ='1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['SUM(adet)']);
    }

    public function faturaGelir($id)
    {
        $query = $this->db->prepare("SELECT sum(tutar) FROM faturalar WHERE musteriid = ? AND tip = '0'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['sum(tutar)']);
    }

    public function faturaGider($id)
    {
        $query = $this->db->prepare("SELECT sum(tutar) FROM faturalar WHERE musteriid = ? AND tip = '1'");
        $query->execute(array($id));

        $sonuc = $query->fetch(PDO::FETCH_ASSOC);

        return doubleval($sonuc['sum(tutar)']);
    }
}
