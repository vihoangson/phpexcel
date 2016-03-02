<?php 
include("Classes/PHPExcel.php");
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load("edf/equipement.xlsx");
$objWorksheet = $objPHPExcel->getActiveSheet();
$highestRow = $objWorksheet->getHighestRow(); 
$highestColumn = $objWorksheet->getHighestColumn(); 
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); 

for ($row = 1; $row <= 1; ++$row) {
	for ($col = 0; $col <= $highestColumnIndex; ++$col) {
		echo $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
	}

}
echo "<hr>";
for ($row = 2; $row <= $highestRow; ++$row) {

	for ($col = 0; $col <= $highestColumnIndex; ++$col) {
		echo $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
	}
}

?>
