<?php

if(!isset($_POST["input"])){
	?>
	<script>
		alert("Missing parameter!");
	</script>
	<?php
	exit();
}

function eliminateEnum($text) {
    $pattern = '/ENUM\([^)]*\)/';
    $cleanedText = preg_replace($pattern, '', $text);
    return $cleanedText;
}


$str = eliminateEnum($_POST["input"]);

$split = explode(",",$str);
$counter = count($split);

//print_r($split);

for($i = 0 ; $i < $counter; $i++){
	
	$re_split = explode(" " , $split[$i]);
	$rspacer = trim($re_split[0]);
	$rspace[] = " ".trim($re_split[0])." ";
	$rspace_values[] = " "."'$".$rspacer."'"." ";
	$value_updates[] = $rspacer." = "." "."'$".$rspacer."'"." ";
}

//echo implode("," , $rspace)."<br/><br/>";
//echo implode("," , $rspace_values)."<br/><br/>";

$getcount = count($rspace); 

//echo $getcount."<br/>";

for($i = 0 ; $i < $getcount; $i++){
	
	$insertion[] =  "' "." '";
	
}

//echo implode("," , $insertion)."<br/>";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Bootstrap Tutorial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/index.css" rel="stylesheet"/>
  </head>
  <body>
    
	<div class="container-fluid">
	
		<div class="row mb-3">
		
			<div class="col-12 mt-3">
				<h4 class="mb-4 fw-bold">GENERATED DATABASE TABLE</h4>
				<table class="table" border="1px" cellspacing="0px" cellpadding="12px">
					
					<tr style="text-transform:uppercase;" align="left">
					<th class="text-center"><span class="badge bg-warning">Total column excluding id</span> = <span class="badge bg-primary"><?php echo $getcount;?></span></th></tr>
					<!--<tr align="left"><td></td></tr>--->
					
					<tr style="text-transform:uppercase;" align="left">
					<th>Table Column Names</th></tr>
					<tr align="left"><td><?php echo implode("," , $rspace);?></td></tr>
					
					<tr style="text-transform:uppercase;" align="left">
					<th>Table Column Value (INSERT)</th></tr>
					<tr align="left"><td><?php echo implode("," , $rspace_values);?></td></tr>

					<tr style="text-transform:uppercase;" align="left">
					<th>Table Column Value (UPDATE)</th></tr>
					<tr align="left"><td><?php echo implode("," , $value_updates);?></td></tr>
					
					<tr style="text-transform:uppercase;" align="left">
					<th>Table Column Values Carrier</th></tr>
					<tr align="left"><td><?php echo implode("," , $insertion);?></td></tr>


					<tr style="text-transform:uppercase;" align="left">
					<th>SQL QUERY INPUT</th></tr>
					<tr align="left"><td><?php echo $_POST["input"];?></td></tr>
				
				</table>
				
				<div align="center"><button class="btn btn-primary mt-2" onclick="window.location='./'">GO HOME</button></center>
			
			</div>
		
		</div>
	</div>
	
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
<?php

?>