<?php
header('Content-Type: text/plain');
$matrix1 = array(array(1, 2), array(2, 1));
$matrix2 = array(array(1, 1), array(3, 2));
echo "\n\n\n";
echo "The order of the matrix A is:" . count($matrix1) . "x" .
    count($matrix1[0]);
echo "\n";
echo "The order of the matrix B is:" . count($matrix2) . "x" .
    count($matrix2[0]);
echo "\n";
$rowCount = count($matrix1);
$colCount = count($matrix1[0]);
echo "The input matrix A is:\n";
for ($r = 0; $r < $rowCount; $r++) {
    for ($c = 0; $c < $colCount; $c++) {
        echo $matrix1[$r][$c] . " \t";
    }
    echo "\n";
}
echo "The input matrix B is:\n";
for ($r = 0; $r < $rowCount; $r++) {
    for ($c = 0; $c < $colCount; $c++) {
        echo $matrix2[$r][$c] . " \t";
    }
    echo "\n";
}
//The transpose of the matrix
echo "\nThe output Transpose of matrix A is:\n";
for ($r = 0; $r < $colCount; $r++) {
    for ($c = 0; $c < $rowCount; $c++) {
        echo $matrix1[$c][$r] . " \t";
    }
    echo "\n";
}
$rowCount2 = count($matrix2);
$colCount2 = count($matrix2[0]);
echo "\nThe sum of matrix is:\n";
for ($r = 0; $r < $rowCount; $r++) {
    for ($c = 0; $c < $colCount; $c++) {

        $val = $matrix1[$r][$c] + $matrix2[$r][$c];
        echo $val . "\t";
    }
    echo "\n";
}
echo "\nThe Multiplication of matrix is:\n";
if ($colCount == $rowCount2) {
    for ($r = 0; $r < $rowCount; $r++) {

        for ($c = 0; $c < $colCount; $c++) {
            $val = 0;
            for ($k = 0; $k < $rowCount; $k++) {
                $val = $val + ($matrix1[$r][$k] * $matrix2[$k][$c]);
            }
            echo $val . "\t";
        }
        echo "\n";
    }
} else {

    echo "The matrix multiplication is not possible.";
}
