<?php
/*
* MATGIS YMM
* Version V.001
* Author Serdar YİĞİT
* Email support@matgis(dot)com(dot)tr
* Web www(dot)matgis(dot)com(dot)tr
*/

class yonetici_model extends model{
    
    public function __construct() {
        //başka bir veritabanına bağlanmak istersek bu construc ın içine yazarız
        //parent->Üst sınıfın sabitlerine, statik özellik ve metotlarına erişmeyi sağlar.
        parent::__construct();
    }

    // Yönetici Giriş Kontrolü Yapılmaktadır.
    public function yoneticikontrolu($array = array()){
        $sql = "SELECT * FROM admin t1 inner join adminyetki t2 ON (t2.ADMINID=t1.ADID)
        inner join adminmodulleri t3 ON (t2.MODULID=t3.AMID) WHERE t1.GSMNO = :GSMNO AND t1.SIFRE = :SIFRE";
        $count = $this->db->affectedrows($sql, $array);
        
        if($count > 0){
            $sql = "SELECT * FROM admin t1 inner join adminyetki t2 ON (t2.ADMINID=t1.ADID)
            inner join adminmodulleri t3 ON (t2.MODULID=t3.AMID) WHERE t1.GSMNO = :GSMNO AND t1.SIFRE = :SIFRE";
            return $this->db->select($sql, $array);
        }else{
            return false;
        }
    }
    // Kullanıcı Bilgisi Getir
    public function kullanicigetir($adminDurumu) {
    $sql = $this->db->select("SELECT * FROM admin WHERE GSMNO='$adminDurumu' AND DURUMU='1'");
    return $sql;
    } 

    // Yönetici Şifresini Güncelleme gösterir metod
    public function yoneticisifredegis($data,$kulid) {
      try {
      $sql =  $this->db->update("admin", $data, "ADID='$kulid'");
      $this->db->commit();
      return $sql;
      } catch (Exception $e) {
       echo $e->getMessage();
       $this->db->rollback();
      }
     }    
    // YÖnetici girişlerinin logları tutulmaktadır. Log insert etme metodu.
    public function yoneticilogu($yoneticilogu) {
        try {
            $sql = $this->db->insert("zlogadmin", $yoneticilogu);
            $this->db->commit();
            return $sql;
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->db->rollback();
        }
    }
    // YÖnetici çıkış logları tutulmaktadır. Log insert etme metodu.
    public function yoneticicikislogu($yoneticilogu) {
        try {
            $sql = $this->db->insert("zlogadmin", $yoneticilogu);
            $this->db->commit();
            return $sql;
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->db->rollback();
        }
    }   

}