<?php
	function countdate(){
	// Start date
	$date = '2019-11-01';
	// End date
	$end_date = '2019-11-05';

	while (strtotime($date) <= strtotime($end_date)) {
                echo "$date\n";
                $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
	}
	
	}
?>