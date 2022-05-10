<?php

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
ob_start(); 

echo '<div>Generate your content</div>';
 
$html = ob_get_contents();
ob_end_clean(); 

$mpdf->WriteHTML($html);
$mpdf->Output();