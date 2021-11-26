<?php
// menyertakan autoloader
require_once 'dompdf/autoload.inc.php';

$servername = $_SERVER['SERVER_NAME'];








// mengacu ke namespace DOMPDF
use Dompdf\Dompdf;

// menggunakan class dompdf
$dompdf = new Dompdf();

$html = file_get_contents("https://$servername/pkl/jurnal.php");
$dompdf->loadHtml($html);

// (Opsional) Mengatur ukuran kertas dan orientasi kertas

$customPaper = array(0,0,900,595);
$dompdf->set_paper($customPaper);
//$dompdf->setPaper('A4', 'landscape');

// Menjadikan HTML sebagai PDF
$dompdf->render();

// Output akan menghasilkan PDF (1 = download dan 0 = preview)
$dompdf->stream("certificate",array("Attachment"=>0));
?>

