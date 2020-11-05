<?php
  include '../php/CotizacionController.php';
  include '../lib/fpdf/fpdf.php';
  $Cotizacion=new cotizacion;
  $listarCotizacion=$Cotizacion->listarCotizacion();
  $pdf=new FPDF;
  $pdf->AddPage();
  $pdf->SetFont('arial','B',16);
  $pdf->Image('assest/img/Tele.png',10,10,20);
  $pdf->SetFillColor(90,90,90);
  $pdf->SetTextColor(255);
  $pdf->SetXY(35,17.5);
  $pdf->Cell(145,10,'TELECOMM S.A. de C.V.',1,1,'C',1);
  $pdf->SetY(38);
  $pdf->SetTextColor(0);
  $pdf->Cell(180,7,'Listado de Cotizacion',1,1,'C');
  $pdf->Ln(2);
  # encabezado
  $pdf->SetFont('arial','B',12);
  $pdf->Cell(60,5,'ID Orden','LT',0,'C');
  $pdf->Cell(60,5,'ID Servicio','LT',0,'C');
  $pdf->Cell(60,5,'ID Clientes','LTR',1,'C');
  $pdf->SetFont('arial','',10);
  if ($listarCotizacion['exito'])
  {
    foreach($listarCotizacion['cotizacion'] as $key=>$cotizacion)
    {
     $pdf->Cell(60,5,$cotizacion['id_orden'],'LTB',0,'C');
     $pdf->Cell(60,5,$cotizacion['id_servicio'],'LTB',0,'C');
     $pdf->Cell(60,5, $cotizacion['id_clientes'],'LTBR',1,'C');
        
      
    }
   
  }else{
    $pdf->Cell(180,7,'No existe',1,1, 'C');
  }
  
  
  //echo json_encode($listarUsuarios['exito']);
 $pdf->SetY(-30);
 $pdf->Cell(180,5,'Derechos Reservados '.date('Y'),1,1,'C');
//$pdf->OutPut('Cotizacion'.time().'.pdf','I');
$pdf->OutPut();
  ?>
  