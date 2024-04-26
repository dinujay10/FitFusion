<?php
require('C:\xa\htdocs\FitFusion\public\assets\fpdf\fpdf.php');

$pdf = new FPDF('P','mm','A4'); //use new class
$pdf->AddPage();

$pdf->SetFont('Arial','B',20);
$pdf->Cell(35,10,'',0,0);
$pdf->Cell(59,5,'Revenue Report',0,0);
$pdf->Cell(59,10,'',0,1);
//			chart properties
//position
$chartX=10;
$chartY=30;

//dimension
$chartWidth=200;
$chartHeight=100;

//padding
$chartTopPadding=10;
$chartLeftPadding=20;
$chartBottomPadding=20;
$chartRightPadding=5;

//chart box
$chartBoxX=$chartX+$chartLeftPadding;
$chartBoxY=$chartY+$chartTopPadding;
$chartBoxWidth=$chartWidth-$chartLeftPadding-$chartRightPadding;
$chartBoxHeight=$chartHeight-$chartBottomPadding-$chartTopPadding;

//bar width
$barWidth=20;

//chart data
$data1=Array(
	'January'=>[
		'color'=>[158,66,66],
		'value'=>$data[1]],
	'February'=>[
		'color'=>[217,208,66],
		'value'=>$data[2]],
	'March'=>[
		'color'=>[182,216,66],
		'value'=>$data[3]],
	'April'=>[
		'color'=>[66,217,125],
		'value'=>$data[4]],
	'May'=>[
		'color'=>[66,196,217],
		'value'=>$data[5]],
    'June'=>[
        'color'=>[169,88,180],
        'value'=>$data[6]],
    'July'=>[
        'color'=>[105,106,195],
        'value'=>$data[7]],
    'August'=>[
        'color'=>[55,66,113],
        'value'=>$data[8]],
    'Sept'=>[
        'color'=>[166,241,156],
        'value'=>$data[9]],
    'Oct'=>[
        'color'=>[156,241,210],
        'value'=>$data[10]],
    'Nov'=>[
        'color'=>[156,196,241],
        'value'=>$data[11]],
    'Dec'=>[
        'color'=>[105,106,195],
        'value'=>$data[12]]
	);

//$dataMax
$dataMax=0;
foreach($data1 as $item){
	if($item['value']>$dataMax)$dataMax=$item['value'];
}

//data step
$dataStep=50;

//set font, line width and color
$pdf->SetFont('Arial','',9);
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0);

//chart boundary
$pdf->Rect($chartX,$chartY,$chartWidth,$chartHeight);

//vertical axis line
$pdf->Line(
	$chartBoxX ,
	$chartBoxY , 
	$chartBoxX , 
	($chartBoxY+$chartBoxHeight)
	);
//horizontal axis line
$pdf->Line(
	$chartBoxX-2 , 
	($chartBoxY+$chartBoxHeight) , 
	$chartBoxX+($chartBoxWidth) , 
	($chartBoxY+$chartBoxHeight)
	);

///vertical axis
//calculate chart's y axis scale unit
$yAxisUnits=$chartBoxHeight/$dataMax;

//draw the vertical (y) axis labels
for($i=0 ; $i<=$dataMax ; $i+=$dataStep){
	//y position
	$yAxisPos=$chartBoxY+($yAxisUnits*$i);
	//draw y axis line
	$pdf->Line(
		$chartBoxX-2 ,
		$yAxisPos ,
		$chartBoxX ,
		$yAxisPos
	);
	//set cell position for y axis labels
	$pdf->SetXY($chartBoxX-$chartLeftPadding , $yAxisPos-2);
	//$pdf->Cell($chartLeftPadding-4 , 5 , $dataMax-$i , 1);---------------
	$pdf->Cell($chartLeftPadding-4 , 5 , $dataMax-$i, 0 , 0 , 'R');
}

///horizontal axis
//set cells position
$pdf->SetXY($chartBoxX , $chartBoxY+$chartBoxHeight);

//cell's width
$xLabelWidth=$chartBoxWidth / count($data1);

//$pdf->Cell($xLabelWidth , 5 , $itemName , 1 , 0 , 'C');-------------
//loop horizontal axis and draw the bar
$barXPos=0;
foreach($data1 as $itemName=>$item){
	//print the label
	//$pdf->Cell($xLabelWidth , 5 , $itemName , 1 , 0 , 'C');--------------
	$pdf->Cell($xLabelWidth , 5 , $itemName , 0 , 0 , 'C');
	
	///drawing the bar
	//bar color
	$pdf->SetFillColor($item['color'][0],$item['color'][1],$item['color'][2]);
	//bar height
	$barHeight=$yAxisUnits*$item['value'];
	//bar x position
	$barX=($xLabelWidth/2)+($xLabelWidth*$barXPos);
	$barX=$barX-($barWidth/2);
	$barX=$barX+$chartBoxX;
	//bar y position
	$barY=$chartBoxHeight-$barHeight;
	$barY=$barY+$chartBoxY;
	//draw the bar
	$pdf->Rect($barX,$barY,$barWidth,$barHeight,'DF');
	//increase x position (next series)
	$barXPos++;
}

//axis labels
$pdf->SetFont('Arial','B',12);
$pdf->SetXY($chartX,$chartY);
$pdf->Cell(100,10,"Revenue",0);
$pdf->SetXY(($chartWidth/2)-50+$chartX,$chartY+$chartHeight-($chartBottomPadding/2));
$pdf->Cell(100,5,"Month",0,0,'C');
//DRAW TABLE

$pdf->SetFont('Arial','B',20);
$pdf->setXY(0,130);
$pdf->Cell(35,10,'',0,0);
$pdf->Cell(59,5,'',0,0);
$pdf->Cell(59,10,'',0,1);

 $pdf->SetFont('Arial','B',10);
//heading
$pdf->Cell(25,6,'Month',1,0,'C');
$pdf->Cell(40,6,'Revenue',1,1,'C');


$pdf->setFont('Arial','',10);
$months = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
);


foreach($months as $key=>$value){
    $pdf->Cell(25,6,$value,1,0);
    $pdf->Cell(40,6,$data[$key],1,1,'C');
}

$pdf->Output();