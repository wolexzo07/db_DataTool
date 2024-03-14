<?php
$str = "
	wtoken VARCHAR(255) NOT NULL,
	utoken VARCHAR(255) NOT NULL,
	account_id VARCHAR(255) NOT NULL,
	customer_id VARCHAR(255) NOT NULL,
	trans_id VARCHAR(255) NOT NULL,
	drcr VARCHAR(10) NOT NULL,
	amount DOUBLE NOT NULL,
	current_balance DOUBLE NOT NULL,
	previous_balance DOUBLE NOT NULL,
	ref VARCHAR(255) NOT NULL,
	status VARCHAR(255) NOT NULL,
	source VARCHAR(100) NOT NULL,
	payment_type VARCHAR(100) NOT NULL,
	payment_method VARCHAR(100) NOT NULL,
	organization_id VARCHAR(255) NOT NULL,
	comment VARCHAR(255) NOT NULL
";

$split = explode(",",$str);
$counter = count($split);

//print_r($split);

for($i = 0 ; $i < $counter; $i++){
	
	$re_split = explode(" " , $split[$i]);
	$rspacer = trim($re_split[0]);
	$rspace[] = trim($re_split[0]);
	$rspace_values[] = "'$".$rspacer."'";
}

//echo implode("," , $rspace)."<br/><br/>";
//echo implode("," , $rspace_values)."<br/><br/>";

$getcount = count($rspace); 

//echo $getcount."<br/>";

for($i = 0 ; $i < $getcount; $i++){
	
	$insertion[] =  "'"."'";
	
}

//echo implode("," , $insertion)."<br/>";

?>
	<table border="1px" width="100%" cellspacing="0px" cellpadding="12px">
		
		<tr style="text-transform:uppercase;" align="left"><th>Total column excluding id</th></tr>
		<tr align="left"><td><?php echo $getcount;?></td></tr>
		
		<tr style="text-transform:uppercase;" align="left"><th>Table Column Names</th></tr>
		<tr align="left"><td><?php echo implode("," , $rspace);?></td></tr>
		
		<tr style="text-transform:uppercase;" align="left"><th>Table Column Value</th></tr>
		<tr align="left"><td><?php echo implode("," , $rspace_values);?></td></tr>
		
		<tr style="text-transform:uppercase;" align="left"><th>Table Column Values Carrier</th></tr>
		<tr align="left"><td><?php echo implode("," , $insertion);?></td></tr>
	
	</table>
<?php

?>