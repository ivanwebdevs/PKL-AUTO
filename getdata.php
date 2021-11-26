<?php
date_default_timezone_set('Asia/Singapore');
$jam = date("h:i:sa");
$tanggal = date("Y/m/d");


if (isset($_POST['datapkl'])){
    $datapkl = $_POST['datapkl'];
    $handle = fopen('datapkl.log','a');
    fwrite($handle,"$tanggal $jam|$datapkl\n");
    echo "Success write data";
}
?>
  
  <?php $datapklnya = file("datapkl.log"); 
  
  foreach($datapklnya as $datapklnyaline){
      
      $datanyaexplode = explode('|',"$datapklnyaline"); 
      $kegiatan = $datanyaexplode['1'];
      $data_tanggal_waktu = $datanyaexplode['0'];
      $data_tanggal_waktu_explode = explode(' ',$data_tanggal_waktu);
      
      $tanggalnya = $data_tanggal_waktu_explode['0'];
      $waktunya = $data_tanggal_waktu_explode['1'];
      
      echo "$waktunya<br>";
  }
?>
