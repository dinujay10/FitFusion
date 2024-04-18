
    <?php
    require('C:\xa\htdocs\FitFusion\public\assets\fpdf\fpdf.php');
    $pdf=new FPDF('p','mm',"A4");
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',20);

    $pdf->Cell(50,10,'',0,0);
    $pdf->Cell(59,5,'Newly Registered Members',0,0);
    $pdf->Cell(59,10,'',0,1);

     $pdf->SetFont('Arial','B',10);
    //heading
    $pdf->Cell(10,6,'ID',1,0,'C');
    $pdf->Cell(60,6,'Member Email',1,0,'C');
    $pdf->Cell(23,6,'Gym Name',1,0,'C');
    $pdf->Cell(30,6,'Package ID',1,0,'C');
    $pdf->Cell(40,6,'Registered Date',1,1,'C');
    

    $pdf->setFont('Arial','',10);
    foreach($data as $x){
        $pdf->Cell(10,6,$x->id,1,0);
        $pdf->Cell(60,6,$x->memberemail,1,0,'R');
        $pdf->Cell(23,6,$x->gymname,1,0,'R');
        $pdf->Cell(30,6,$x->packageid,1,0,'R');
        $pdf->Cell(40,6,$x->registereddate,1,1,'R');
    }

    $pdf->Output();
    ?>
