<?php
date_default_timezone_set('Asia/Singapore');
$tahun = date("Y");

$waktu = date('s');

if (!empty($_POST['datapkl'])){
    $datepost = $_POST['datepost'];
    file_put_contents('datelast.log',"$datepost");
    $datepost_explode = explode('T',"$datepost");
    $tanggal_raw = $datepost_explode['0'];
    $tanggal = str_replace("-","/",$tanggal_raw);
    $jam = $datepost_explode['1'].":".$waktu;
    $datapkl = $_POST['datapkl'];
    file_put_contents('datalast.log',"$datapkl");
    $handle = fopen('datapkl.log','a');
    fwrite($handle,"$tanggal $jam|$datapkl\n");
    echo "Success write data";
}

$last = file_get_contents("./datelast.log");
?>



<html>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btnnya {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btnnya:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}
</style>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
   
    <br>
<a class="btnnya" onclick="function_Last()">Use Last Config</a><br><br>
    <form method="post" action="">
        
        <input type="text" name="datapkl" id="datapklku" required>
        <input type="datetime-local" name="datepost" value="<?php echo $last;?>" required>
        <button type="submit" class="btnnya">Masukan Data</button>
    </form>
    <a href="./" class="btnnya">refresh</a><br><br><br>
    
     <a href="./convert.php" class="btnya">Convert</a><br><br><br>
    <script>
        
        
        function function_Last(){
            document.getElementById("datapklku").value = "<?php echo file_get_contents('datalast.log')?>";
        }
        
        
    </script>
<table>
  <tr>
    <th>Kegiatan</th>
    <th>Tanggal</th>
    <th>Jam</th>
  </tr>
  
  
  <?php $datapklnya = file("datapkl.log"); 
  
 
  $datapklnya = array_reverse($datapklnya);
  foreach($datapklnya as $datapklnyaline){
      
      $datanyaexplode = explode('|',"$datapklnyaline"); 
      $kegiatan = $datanyaexplode['1'];
      $data_tanggal_waktu = $datanyaexplode['0'];
      $data_tanggal_waktu_explode = explode(' ',$data_tanggal_waktu);
      
      $tanggalnya = $data_tanggal_waktu_explode['0'];
      $waktunya = $data_tanggal_waktu_explode['1'];
      
      echo "
  <tr>
    <td>$kegiatan</td>
    <td>$tanggalnya</td>
    <td>$waktunya</td>
  </tr>
  ";
  }
?>
</table>

</body>
    
    
</html>