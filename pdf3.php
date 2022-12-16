<?php
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
include_once('TCPDF-main/tcpdf.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
       // $image_file = K_PATH_IMAGES.'vbspu.jpg';
       // $this->Image($image_file, 10, 10,0,0, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('freesans', 'B', 12);
        $this->Cell(35, 0, 'मकान नंबर :'.$_POST['HNO'],0, 0, 'L');
        // Title
       // $this->Cell(0, 15, ' पंचायत केशवपुर ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
         $this->Cell(0, 15, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('freesans', 'I', 20);
        // Page number
        $this->Cell(0,10,sign, 0, false, 'R', 0, '', 0, false, 'T', 'M');
       // $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(L, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ANKIT_MAURYA');
$pdf->SetTitle('MASTER_REGISTER');
$pdf->SetSubject('SURVEY');
$pdf->SetKeywords('TCPDF,NAME');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('freesans', 'B', 12);

// add a page
$pdf->AddPage();
$pdf->setJPEGQuality(75);
// Example of Image from data stream ('PHP rules')
$imgdata = base64_decode('iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABlBMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDrEX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==');

// The '@' character is used to indicate that follows an image data stream and not an image file name
$pdf->Image('@'.$imgdata);
$pdf->Image('logofinal.jpg', 5,16, 288,30, 'JPG', 'http://www.keshawpur.online', '', true, 150, '', false, false, 1, false, false, false);
//$pdf->Cell(0,50,'Veer Bahadur Sing ',1,1,'C');
$pdf->Ln(30);
// print a block of text using Write()
//$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

// ---------------------------------------------------------
//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

// test Cell stretching
$pdf->Cell(25, 0, 'मोबाईल नंबर :', 0, 0, 'L');
$pdf->Cell(30, 0, $_POST['mno'], 1, 0, 'L');
$pdf->Cell(15, 0, 'पंचायत :', 0, 0, 'C');
$pdf->Cell(30, 0, $_POST['gpn'],1,0, 'L');
$pdf->Cell(25, 0, 'न्याय पंचायत :', 0, 0, 'C');
$pdf->Cell(30, 0, $_POST['npn'],1,0, 'L');
$pdf->Cell(10, 0, 'गाव :', 0, 0, 'C');
$pdf->Cell(30, 0, $_POST['gn'],1,0, 'L');
$pdf->Cell(13, 0, 'मजरा :', 0, 0, 'C');
$pdf->Cell(0, 0, $_POST['mn'],1,1, 'L');
$pdf->Ln(1);
$pdf->Cell(25, 0, 'मुखीया का नाम:', 0, 0, 'C');
$pdf->Cell(50, 0, $_POST['hh'],1,0,'L');
$pdf->Cell(35 , 0, 'मुखीया का जाती :', 0, 0, 'C');
$pdf->Cell(40, 0, $_POST['cn'],1,0,'L');
$pdf->Cell(60, 0, 'परीवार के कूल जन :', 0, 0, 'C');
$pdf->Cell(0, 0, $_POST['NO'],1,1,'L');
$pdf->Ln(1);
$pdf->Cell(20, 0, 'शौचालय :', 0, 0, 'L ');
$pdf->Cell(40, 0, $_POST['l'],1,0,'L');
$pdf->Cell(15, 0, 'मकान  :', 0, 0, 'C');
$pdf->Cell(60, 0, $_POST['A'],1,0,'L');
$pdf->Cell(30, 0, 'सौभाग्य योजना :', 0, 0, 'C');
$pdf->Cell(20 , 0, $_POST['S'],1,0,'L');
$pdf->Cell(40, 0, 'उज्जवला योजना :', 0, 0, 'C');
$pdf->Cell(0, 0, $_POST['U'],1,1,'L');
$pdf->Ln(7);
$pdf->Cell(7, 0, 'S.', 1, 0, 'L');
$pdf->Cell(45, 0, 'नाम', 1, 0, 'C');
$pdf->Cell(47, 0, 'पापा/पित', 1, 0, 'C');
$pdf->Cell(32, 0, 'आधार', 1, 0, 'C');
$pdf->Cell(10, 0, 'AGE', 1, 0, 'C');
$pdf->Cell(10, 0, 'लींग', 1, 0, 'C');
$pdf->Cell(34, 0, 'राशन नंबर', 1, 0, 'C');
$pdf->Cell(15, 0, 'मानरेगा', 1, 0, 'C');
$pdf->Cell(20, 0, 'पेंशन', 1, 0, 'C');
$pdf->Cell(18, 0, 'PMKSN', 1, 0, 'C');
$pdf->Cell(16, 0, 'PMJAY', 1, 0, 'C');
$pdf->Cell(0, 0, 'MKSY', 1, 1, 'C');
for($n=1;$n<=$_POST['NO'];$n++){
    $pdf->Cell(7, 0,$_POST['SN'.$n], 1,0,'C');
    $pdf->Cell(45, 0, $_POST['name'.$n], 1, 0,'L');
    $pdf->Cell(47, 0,$_POST['fname'.$n], 1, 0, 'L');
    $pdf->Cell(32, 0, $_POST['adhar'.$n], 1, 0, 'L');
    $pdf->Cell(10, 0,$_POST['age'.$n], 1, 0, 'C');
    $pdf->Cell(10, 0, $_POST['gender'.$n], 1, 0, 'C');
    $pdf->Cell(34, 0,$_POST['rasion'.$n], 1, 0, 'L');
    $pdf->Cell(15, 0,$_POST['manrega'.$n], 1, 0, 'C');
    $pdf->Cell(20, 0,$_POST['pension'.$n], 1, 0, 'C');
    $pdf->Cell(18, 0,$_POST['pmksn'.$n], 1, 0, 'C');
    $pdf->Cell(16, 0,$_POST['pmjay'.$n], 1, 0, 'C');
    $pdf->Cell(0, 0,$_POST['mksy'.$n], 1, 1, 'C');

}

//Close and output PDF document
$pdf->Output('K-'.$_POST['HNO'].'_'.$_POST['hh'].'.pdf','D');
?>
//============================================================+
// END OF FILE
//============================================================+