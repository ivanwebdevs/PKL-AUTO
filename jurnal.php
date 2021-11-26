<?php 

$title = "Jurnal PKL";
$judul = "JURNAL KEGIATAN HARIAN TARUNA";
$kota = "Balikpapan";
$tahun = "2021";

$tanggal_theme = "$kota,.....................................$tahun";

?>



<html><head><title><?php echo $title;?></title></title><style>img[src*='https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png'] {
display: none;}

footer .pagenum:before {
      content: counter(page);
}


</style><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><meta http-equiv='Content-Style-Type' content='text/css' /><meta name='generator' content='Aspose.Words for .NET 21.11.0' /><title></title><style type='text/css'>body { font-family:'Times New Roman'; font-size:12pt }p { margin:0pt }table { margin-top:0pt; margin-bottom:0pt }</style></head>

<?php 



$datanya_raw = file('datapkl.log');

foreach ($datanya_raw as $datanyageming){
    if (!empty($datanyageming)){
        $data_total[] = $datanyageming;
    }
}



$total_data  = count($data_total);

$total_sheet_raw = $total_data / 20;

$total_sheet = round($total_sheet_raw, 0);

if (strpos($total_sheet_raw, '.') !== false) {
    $total_sheet = $total_sheet + 1;
}



$bagian_atas = "
<body><div><p style='text-align:center'><span style='font-weight:bold'>$judul</span></p><p style='text-align:center'><span style='font-weight:bold; -aw-import:ignore'> </span></p><table cellspacing='0' cellpadding='0' style='border:0.75pt solid #000000; -aw-border:0.5pt single; -aw-border-insideh:0.5pt single #000000; -aw-border-insidev:0.5pt single #000000; border-collapse:collapse'><tr><td style='width:22.9pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single'><p style='text-align:center'><span style='font-weight:bold'>NO</span></p></td><td style='width:95.35pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single'><p style='text-align:center'><span style='font-weight:bold'>HARI/TANGGAL</span></p></td><td style='width:542.25pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single'><p style='text-align:center'><span style='font-weight:bold'>URAIAN KEGIATAN</span></p></td><td style='width:124.15pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single'><p style='text-align:center'><span style='font-weight:bold'>MULAI PUKUL</span></p><p style='text-align:center'><span style='font-weight:bold; -aw-import:spaces'> </span><span style='font-weight:bold'>............S/D...................</span></p></td></tr>


";

$bagian_bawah = "



</table>





<p style='margin-left:468pt; text-indent:36pt'><span style='font-weight:bold; -aw-import:ignore'> </span></p><p style='margin-left:468pt; text-indent:36pt'><span style='font-weight:bold; -aw-import:spaces'>            </span><span>                    $tanggal_theme</span></p><p><span>                          Pembimbing Sekolah</span><span style='width:5pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span><span style='width:36pt; display:inline-block'> </span>         <span>Pembimbing Industri</span></p><p><span style='-aw-import:ignore'> </span></p><p><span style='-aw-import:ignore'> </span></p><p><span style='-aw-import:ignore'> </span></p><p style='margin-left:540pt'><span style='-aw-import:ignore'> </span></p><p><span style='height:0pt; display:block; position:absolute; z-index:1'><img src='images/Aspose.Words.2603e609-0eb9-43cc-a542-d77867bd710e.001.png' width='228' height='3' alt='' style='margin-top:22.4pt; margin-left:586.55pt; -aw-left-pos:587.3pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:23.5pt; -aw-wrap-type:none; position:absolute' /></span><span style='height:0pt; display:block; position:absolute; z-index:0'><img src='images/Aspose.Words.2603e609-0eb9-43cc-a542-d77867bd710e.001.png' width='228' height='3' alt='' style='margin-top:21.95pt; margin-left:35.9pt; -aw-left-pos:36.65pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:23.05pt; -aw-wrap-type:none; position:absolute' /></span><span style='width:36pt; display:inline-block'> </span></p></div></body> ";





$urutan_page = range(1, $total_sheet);


foreach ($urutan_page as $page){
    





echo $bagian_atas;








$page = (int)"$page";


$last_page = $page * 20 - 20;

$datanya = array_slice($datanya_raw,$last_page,20);


foreach ($datanya as $num => $nums){
    
    $explode_data = explode('|',$nums);
    $jam_tanggal_explode = explode(' ',$explode_data['0']);
    
    
    
    
    
    $tanggal = $jam_tanggal_explode['0'];
    $jam = $jam_tanggal_explode['1'];
    $kegiatan = $explode_data['1'];
    


$value0 = "$num";
$value1 = "$tanggal";
$value2 = "$kegiatan";
$value3 = "$jam - Selesai";

$theme = "
<tr><td style='width:22.9pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single'><p style='text-align:center'><span>$value0</span></p></td><td style='width:95.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single'><p><span style='-aw-import:spaces'>&#xa0;</span><span>$value1</span></p></td><td style='width:542.25pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single'><p><span>$value2</span></p></td><td style='width:124.15pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single'><p><span>$value3</span></p></td></tr>


";
 echo $theme;   
    
    
}




echo $bagian_bawah;




}







?>



</html>






