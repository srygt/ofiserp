<?php

/*
* MATGIS YMM
* Version V.001
* Author Serdar YİĞİT
* Email support@matgis(dot)com(dot)tr
* Web www(dot)matgis(dot)com(dot)tr 
*/

class index_model extends model {
    function __construct() {
     parent::__construct();
   error_reporting(E_ALL ^ E_NOTICE);
   ini_set('error_reporting', E_ALL ^ E_NOTICE);
    }
    // Menüyü getirmeyi gösterir metod
    public function menulistesi() {
      try {
      $sql = $this->db->select("SELECT * FROM admin t1 inner join adminyetki t2 ON (t2.ADMINID=t1.ADID)
      inner join adminmodulleri t3 ON (t2.MODULID=t3.AMID) WHERE t1.ADID='".session::get("AdminID")."' AND t1.DURUMU='1' AND t3.am_Durum='1' ORDER BY SN ASC");
      return $sql;        
      if (!is_integer($sql)) {
      throw new Exception('Yönetici getirme SQL sorgusu başarısız!');
      }
      } catch (Exception $e) {
      echo $e->getMessage();
      }        
      }
    // Menüyü getirmeyi gösterir metod
    public function menuyetkim($ID) {
      try {
      $sql = $this->db->select("SELECT * FROM admin t1 inner join adminyetki t2 ON (t2.ADMINID=t1.ADID)
      inner join adminmodulleri t3 ON (t2.MODULID=t3.AMID) WHERE t1.ADID='".session::get("AdminID")."' AND t3.AMID='{$ID}' AND t1.DURUMU='1' AND t3.am_Durum='1' ORDER BY SN ASC");
      return $sql;        
      if (!is_integer($sql)) {
      throw new Exception('Yönetici getirme SQL sorgusu başarısız!');
      }
      } catch (Exception $e) {
      echo $e->getMessage();
      }        
      }
      
}