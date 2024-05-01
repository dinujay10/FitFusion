<?php
require('C:\xa\htdocs\FitFusion\public\assets\fpdf\fpdf.php');

$pdf = new FPDF('P','mm','A4'); // Use new class
$pdf->AddPage();

$pdf->SetFont('Arial','B',20);
$pdf->Cell(35,10,'',0,0);
$pdf->Cell(59,5,'Revenue Report',0,0);
$pdf->Cell(59,10,'',0,1);

// Chart properties
$chartX=10;
$chartY=30;
$chartWidth=200;
$chartHeight=100;
$chartTopPadding=10;
$chartLeftPadding=20;
$chartBottomPadding=20;
$chartRightPadding=5;

// Calculate chart box dimensions
$chartBoxX=$chartX+$chartLeftPadding;
$chartBoxY=$chartY+$chartTopPadding;
$chartBoxWidth=$chartWidth-$chartLeftPadding-$chartRightPadding;
$chartBoxHeight=$chartHeight-$chartBottomPadding-$chartTopPadding;

// Bar width
$barWidth=20;

// Chart data
$data1=Array(
    'January'=>[
        'color'=>[172,221,222], // Dark red
        'value'=>$data[1]
    ],
    'February'=>[
        'color'=>[202,241,222], // Yellow
        'value'=>$data[2]
    ],
    'March'=>[
        'color'=>[225,248,220], // Light green
        'value'=>$data[3]
    ],
    'April'=>[
        'color'=>[254,248,221], // Green
        'value'=>$data[4]
    ],
    'May'=>[
        'color'=>[66,196,217], // Blue
        'value'=>$data[5]
    ],
    'June'=>[
        'color'=>[169,88,180], // Purple
        'value'=>$data[6]
    ],
    'July'=>[
        'color'=>[105,106,195], // Dark blue
        'value'=>$data[7]
    ],
    'August'=>[
        'color'=>[55,66,113], // Dark grayish blue
        'value'=>$data[8]
    ],
    'September'=>[
        'color'=>[166,241,156], // Light green
        'value'=>$data[9]
    ],
    'October'=>[
        'color'=>[156,241,210], // Light blue
        'value'=>$data[10]
    ],
    'November'=>[
        'color'=>[156,196,241], // Sky blue
        'value'=>$data[11]
    ],
    'December'=>[
        'color'=>[105,106,195], // Dark blue
        'value'=>$data[12]
    ]
);

// Find maximum value for scaling
$dataMax=0;
foreach($data1 as $item){
    if($item['value']>$dataMax) $dataMax=$item['value'];
}

// Data step
$dataStep=50;

// Set font, line width, and color
$pdf->SetFont('Arial','',9);
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0);

// Draw chart boundary
$pdf->Rect($chartX, $chartY, $chartWidth, $chartHeight);

// Vertical axis line
$pdf->Line($chartBoxX, $chartBoxY, $chartBoxX, ($chartBoxY + $chartBoxHeight));

// Horizontal axis line
$pdf->Line($chartBoxX - 2, ($chartBoxY + $chartBoxHeight), $chartBoxX + $chartBoxWidth, ($chartBoxY + $chartBoxHeight));

// Vertical axis labels
for($i=0; $i<=$dataMax; $i+=$dataStep){
    $yAxisPos=$chartBoxY+($chartBoxHeight*($dataMax-$i)/$dataMax);
    $pdf->Line($chartBoxX-2, $yAxisPos, $chartBoxX, $yAxisPos);
    $pdf->SetXY($chartBoxX - $chartLeftPadding, $yAxisPos - 2);
    $pdf->Cell($chartLeftPadding - 4, 5, $dataMax - $i, 0, 0, 'R');
}

// Horizontal axis labels and bars
$pdf->SetXY($chartBoxX, $chartBoxY + $chartBoxHeight);
$xLabelWidth = $chartBoxWidth / count($data1);
$barXPos = 0;
foreach($data1 as $itemName => $item){
    // Draw bar
    $pdf->SetFillColor($item['color'][0], $item['color'][1], $item['color'][2]);
    $barHeight = $chartBoxHeight * $item['value'] / $dataMax;
    $barX = ($xLabelWidth * $barXPos) + $chartBoxX;
    $barY = $chartBoxY + $chartBoxHeight - $barHeight;
    $pdf->Rect($barX, $barY, $barWidth, $barHeight, 'DF');

    // Draw x-axis label
    $pdf->SetXY($barX + ($barWidth / 2) - 5, $chartBoxY + $chartBoxHeight + 2);
    $pdf->Cell(10, 5, $itemName, 0, 0, 'C');

    $barXPos++;
}

// Axis labels
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY($chartX, $chartY);
$pdf->Cell(100, 10, "Revenue", 0);
$pdf->SetXY($chartX + ($chartWidth / 2) - 50, $chartY + $chartHeight - ($chartBottomPadding / 2));
$pdf->Cell(100, 5, "Month", 0, 0, 'C');

// Table
$pdf->SetFont('Arial','B',20);
$pdf->setXY(0, 160);
$pdf->Cell(35, 10, '', 0, 0);
$pdf->Cell(59, 5, '', 0, 0);
$pdf->Cell(59, 10, '', 0, 1);

// Header styling
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(176, 196, 222);// Dark blue
$pdf->SetTextColor(0,0,255);
$pdf->Cell(60, 12, 'Month', 1, 0, 'C', true);
$pdf->Cell(40, 12, 'Revenue', 1, 1, 'C', true);

// Table rows
$pdf->SetFont('Arial', '', 10);
$fill = false; // Flag to alternate row colors
$pdf->SetFillColor(240, 248, 255);
foreach($data1 as $itemName => $item){
    // $pdf->SetFillColor(156,196,241); // Light blue
    $pdf->SetTextColor(0);

    // Alternate row colors
    // if($fill) {
    //     $pdf->SetFillColor(55,66,113); // Dark blue
    // }
	$pdf->SetFillColor($fill ? 240 : 255, $fill ? 248 : 255, $fill ? 255 : 255);

    $pdf->Cell(60, 9, $itemName, 1, 0, 'C', true);
    $pdf->Cell(40, 9, $item['value'], 1, 1, 'C', true);

    // Toggle fill color for next row
    $fill = !$fill;
}

$pdf->Output();
?>
