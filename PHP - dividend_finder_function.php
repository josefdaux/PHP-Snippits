<?php

function rolling_interest($stockprice, $stockdiv) {
$counter = 0;
$total = 300;
 if ($counter < 25) {
	$sharenumber = $total % $stockprice;
	$profit = $sharenumber * $stockdiv * 52;
	$total = +$profit;
	$counter = +1;
}
else {
	echo $total;
}
}

/* 1 Take a variable that holds money. 
2 Divide the number by the cost of a stock.
 3 multiply that number the dividend number.
 4 Multiply that number by 52(weeks). 
 5 Add that number to the orginal number.
 6 Repeat the process with the new number until we have cycled through 25(years).
 7 echo result. 
 8 USE IF ELSE STATEMENT TO INCREMENT THE COUNTER AND TEST IF TARGET OF 25 IS MET BEFORE RETURNING THE VALUE. */

?>


<?PHP
function rolling_interest_revised($stockprice, $stockdiv) {
$year_counter = 0;
$total = 300;
 if ($year_counter < 25) {
 		$profit = ($total % $stockprice) * $stockdiv * 52 + $total;
		$total = +$profit;
		$year_counter = +1;
}
else {
	echo $total;
}
}
?>