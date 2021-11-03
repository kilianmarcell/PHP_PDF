<?php

use Marcell\Pdf\Tartalom;

require "../vendor/autoload.php";


//Forrás:   https://github.com/dompdf/dompdf

$tartalom = new Tartalom();

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($tartalom -> kiir());

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();