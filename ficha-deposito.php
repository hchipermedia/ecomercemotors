<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'On');

/**
 * Template Name: Ficha deposito
 * Description: ...
 */

 require(TEMPLATEPATH . '/inc/fpdf/fpdf.php'); 
 define('FPDF_FONTPATH', TEMPLATEPATH . '/inc/fpdf/font'); 


/**
 * PREPARO VARIABLES
 */

function getRandomCode() {
    $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $su = strlen($an) - 1;
    return substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1);
}

$numero = getRandomCode();
$titulo = 'Soluciones Hipermedia | Ficha de depósito';
$autor = 'Soluciones Hipermedia'; 
$tituloFicha = 'Ficha de deposito';
$subtituloFicha = 'Datos para el deposito o transferencia';
// $banco = utf8_decode(get_field('bancoBancarios', 'option'));
// $titular = utf8_decode(get_field('titularBancarios', 'option'));
// $clabe = get_field('clabeBancarios', 'option');
// $cuenta = get_field('sucursalBancarios', 'option');

$trozoDeCadena = substr($descripcionFormulario, 0, 3);
$trozoDeCadenaMayusculas = strtoupper( $trozoDeCadena ); 
$trozoDeCadenaMayusculas;
$montoSinDecimales = intval($montoFormulario);
$soloDia = date('d');
$soloMes = date('m');
$folio = $idUsuario.$montoSinDecimales.$trozoDeCadenaMayusculas.$soloDia.$soloMes;

$numOrden = $folio;
$fechaGene = date('Y-m-d');
$fechaLimite = date('Y-m-d', strtotime("$fechaGene + 3 day"));;
$importe = '$'.$montoFormulario;
$subTotal = '$'.$montoFormulario;
$iva = '$'.(16*$montoFormulario)/100;
$totalConIva = ((16*$montoFormulario)/100)+$montoFormulario;
$total = '$'.$totalConIva;
$direccion = 'Dirección';
$telefono = 'Teléfono';
$mail = 'correo';
$web = 'web';
$descripcion =  $_POST['concepto'].' - '.$_POST['descripcion'] ;
$importe = '$'.$_POST['importe'];

/**
 * CREO FUNCIONES PARA EL DOCUMENTO
 */
class PDF extends FPDF {
   // Margins
   var $left = 20;
   var $right = 20;
   var $top = 20;
   var $bottom = 20;
         
   // Create Table
   function WriteTable($tcolums)
   {
      // go through all colums
      for ($i = 0; $i < sizeof($tcolums); $i++)
      {
         $current_col = $tcolums[$i];
         $height = 0;
         
         // get max height of current col
         $nb=0;
         for($b = 0; $b < sizeof($current_col); $b++)
         {
            // set style
            $this->SetFont($current_col[$b]['font_name'], $current_col[$b]['font_style'], $current_col[$b]['font_size']);
            $color = explode(",", $current_col[$b]['fillcolor']);
            $this->SetFillColor($color[0], $color[1], $color[2]);
            $color = explode(",", $current_col[$b]['textcolor']);
            $this->SetTextColor($color[0], $color[1], $color[2]);            
            $color = explode(",", $current_col[$b]['drawcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            $this->SetLineWidth($current_col[$b]['linewidth']);
                        
            $nb = max($nb, $this->NbLines($current_col[$b]['width'], $current_col[$b]['text']));            
            $height = $current_col[$b]['height'];
         }  
         $h=$height*$nb;
         
         
         // Issue a page break first if needed
         $this->CheckPageBreak($h);
         
         // Draw the cells of the row
         for($b = 0; $b < sizeof($current_col); $b++)
         {
            $w = $current_col[$b]['width'];
            $a = $current_col[$b]['align'];
            
            // Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            
            // set style
            $this->SetFont($current_col[$b]['font_name'], $current_col[$b]['font_style'], $current_col[$b]['font_size']);
            $color = explode(",", $current_col[$b]['fillcolor']);
            $this->SetFillColor($color[0], $color[1], $color[2]);
            $color = explode(",", $current_col[$b]['textcolor']);
            $this->SetTextColor($color[0], $color[1], $color[2]);            
            $color = explode(",", $current_col[$b]['drawcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            $this->SetLineWidth($current_col[$b]['linewidth']);
            
            $color = explode(",", $current_col[$b]['fillcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            
            
            // Draw Cell Background
            $this->Rect($x, $y, $w, $h, 'FD');
            
            $color = explode(",", $current_col[$b]['drawcolor']);            
            $this->SetDrawColor($color[0], $color[1], $color[2]);
            
            // Draw Cell Border
            if (substr_count($current_col[$b]['linearea'], "T") > 0)
            {
               $this->Line($x, $y, $x+$w, $y);
            }            
            
            if (substr_count($current_col[$b]['linearea'], "B") > 0)
            {
               $this->Line($x, $y+$h, $x+$w, $y+$h);
            }            
            
            if (substr_count($current_col[$b]['linearea'], "L") > 0)
            {
               $this->Line($x, $y, $x, $y+$h);
            }
                        
            if (substr_count($current_col[$b]['linearea'], "R") > 0)
            {
               $this->Line($x+$w, $y, $x+$w, $y+$h);
            }
            
            
            // Print the text
            $this->MultiCell($w, $current_col[$b]['height'], $current_col[$b]['text'], 0, $a, 0);
            
            // Put the position to the right of the cell
            $this->SetXY($x+$w, $y);         
         }
         
         // Go to the next line
         $this->Ln($h);          
      }                  
   }

   
   // If the height h would cause an overflow, add a new page immediately
   function CheckPageBreak($h)
   {
      if($this->GetY()+$h>$this->PageBreakTrigger)
         $this->AddPage($this->CurOrientation);
   }


   // Computes the number of lines a MultiCell of width w will take
   function NbLines($w, $txt)
   {
      $cw=&$this->CurrentFont['cw'];
      if($w==0)
         $w=$this->w-$this->rMargin-$this->x;
      $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
      $s=str_replace("\r", '', $txt);
      $nb=strlen($s);
      if($nb>0 and $s[$nb-1]=="\n")
         $nb--;
      $sep=-1;
      $i=0;
      $j=0;
      $l=0;
      $nl=1;
      while($i<$nb)
      {
         $c=$s[$i];
         if($c=="\n")
         {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
         }
         if($c==' ')
            $sep=$i;
         $l+=$cw[$c];
         if($l>$wmax)
         {
            if($sep==-1)
            {
               if($i==$j)
                  $i++;
            }
            else
               $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
         }
         else
            $i++;
      }
      return $nl;
   }

   // Cabecera de página
   function Header() {
       // Logo
       $this->Image( get_bloginfo('template_url') . '/images/logo.png',50,10,100);
       $this->Ln(30);
   }


}


//----------------CREO EL DOCUMENTO----------------//
$pdf = new PDF('P','mm','Letter');

$pdf->SetTitle(utf8_decode($title));
$pdf->SetAuthor(utf8_decode($author));
$pdf->AddPage(P, Letter);


// TITULO "Ficha de pago"
$col = array();
$col[] = array('text' => ' ', 'width' => '15', 'height' => '10', 'align' => 'C', 'font_name' => 'Arial',  'font_size' => '17', 'fillcolor' => '255,255,255');

$col[] = array('text' => $tituloFicha, 'width' => '165', 'height' => '10', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '17', 'font_style' => '', 'fillcolor' => '0,84,168', 'textcolor' => '255,255,255', 'drawcolor' => '0,84,168', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

// Espacio entre filas; relleno blanco
$col = array();
$col[] = array('text' => ' ', 'width' => '220', 'height' => '7', 'fillcolor' => '255,255,255');
$rows[] = $col;

//SUBTITULO "Datos para el deposito..."
$col = array();
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => $subtituloFicha, 'width' => '165', 'height' => '12', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '16', 'font_style' => '', 'fillcolor' => '255,124,7', 'textcolor' => '255,255,255', 'drawcolor' => '255,124,7', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

// Espacio entre filas; relleno blanco
$col = array();
$col[] = array('text' => ' ', 'width' => '220', 'height' => '5', 'fillcolor' => '255,255,255');
$rows[] = $col;

//FILA 1
$col = array();
// columna 1
$col[] = array('text' => 'Banco:', 'width' => '50', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $banco, 'width' => '50', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

//FILA 2
$col = array();
// columna 1
$col[] = array('text' => 'Titular:', 'width' => '50', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $titular, 'width' => '50', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

//FILA 3
$col = array();
// columna 1
$col[] = array('text' => 'CLABE:', 'width' => '50', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $clabe, 'width' => '50', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

//FILA 4
$col = array();
// columna 1
$col[] = array('text' => 'CUENTA:', 'width' => '50', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $cuenta, 'width' => '50', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

// //FILA 5
// $col = array();
// // columna 1
// $col[] = array('text' => 'Folio:', 'width' => '50', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// // columna 2
// $col[] = array('text' => $folio, 'width' => '50', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// $rows[] = $col;


// Espacio entre filas; relleno blanco
$col = array();
$col[] = array('text' => ' ', 'width' => '220', 'height' => '4', 'fillcolor' => '255,255,255');
$rows[] = $col;


// //Datos orden
// $col = array();
// // columna 1
// $col[] = array('text' => 'Referencia:', 'width' => '45', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '13', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '103,20,12', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// // columna 2
// $col[] = array('text' => $numero, 'width' => '40', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '12', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '103,20,12', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// $rows[] = $col;

//Fecha generacion orden
$col = array();
// columna 1
$col[] = array('text' => utf8_decode('Fecha de generación de la orden:'), 'width' => '83', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $fechaGene, 'width' => '40', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

//Expiracion
$col = array();
// columna 1
$col[] = array('text' => utf8_decode('Expiración de ficha de pago:'), 'width' => '74', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $fechaLimite, 'width' => '40', 'height' => '8', 'align' => 'L', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '255,255,255', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

// Espacio entre filas; relleno blanco
$col = array();
$col[] = array('text' => ' ', 'width' => '220', 'height' => '6', 'fillcolor' => '255,255,255');
$rows[] = $col;

//Descripcion
//FILA 1
$col = array();
// columna 1
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => utf8_decode('Descripción:'), 'width' => '110', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => 'Importe (MXN)', 'width' => '55', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

//FILA 2
$col = array();
// columna 1
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => $descripcion, 'width' => '110', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '103,20,12', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $importe, 'width' => '55', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

//FILA 3
$col = array();
// columna 1
/*$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => 'Sub Total:', 'width' => '110', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $subTotal, 'width' => '55', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;*/

//FILA 4
/*$col = array();
// columna 1
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => '16.00% IVA:', 'width' => '110', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $iva, 'width' => '55', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '255,255,255', 'textcolor' => '0,0,0', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;
*/
//FILA 5
$col = array();
// columna 1
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => 'Total:', 'width' => '110', 'height' => '8', 'align' => 'R', 'font_name' => 'Arial', 'font_size' => '14', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '103,20,12', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $total, 'width' => '55', 'height' => '8', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '14', 'font_style' => 'B', 'fillcolor' => '255,255,255', 'textcolor' => '103,20,12', 'drawcolor' => '205,205,205', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

// Espacio entre filas; relleno blanco
$col = array();
$col[] = array('text' => ' ', 'width' => '220', 'height' => '55', 'fillcolor' => '255,255,255');
$rows[] = $col;


//linea amarilla footer
$col = array();
$col = array();
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => ' ', 'width' => '165', 'height' => '1.5', 'fillcolor' => '255,124,7');
$rows[] = $col;


//footer
$col = array();
// columna 1
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => $direccion, 'width' => '100', 'height' => '9', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '1,83,167', 'textcolor' => '255,255,255', 'drawcolor' => '1,83,167', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $telefono, 'width' => '65', 'height' => '9', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '1,83,167', 'textcolor' => '255,255,255', 'drawcolor' => '1,83,167', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

$col = array();
// columna 1
$col[] = array('text' => ' ', 'width' => '15', 'height' => '12', 'fillcolor' => '255,255,255');
$col[] = array('text' => $mail, 'width' => '100', 'height' => '9', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '1,83,167', 'textcolor' => '255,255,255', 'drawcolor' => '1,83,167', 'linewidth' => '0', 'linearea' => 'LTBR');
// columna 2
$col[] = array('text' => $web, 'width' => '65', 'height' => '9', 'align' => 'C', 'font_name' => 'Arial', 'font_size' => '11', 'font_style' => '', 'fillcolor' => '1,83,167', 'textcolor' => '255,255,255', 'drawcolor' => '1,83,167', 'linewidth' => '0', 'linearea' => 'LTBR');
$rows[] = $col;

// Draw Table   
$pdf->WriteTable($rows);

$pdf->Output();

 ?>