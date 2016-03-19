<?php 

	// Filename: riseandsetprogram.php
	// Author: Thomas Garrett
	// Purpose: Create and display a program to show the sunrise and sunset date
	
	echo "EST Sunrise and Date - " . "<br>";

	print date("D M d Y"). ', sunrise time: ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 33, -80, 90, -5) . "<br>" . "<br>";
	
	echo "EST Sunset and Date - " . "<br>";	
	
	print date("D M d Y"). ', sunset time: ' .date_sunset(time(), SUNFUNCS_RET_STRING, 33, -80, 90, -5);
	
?>
