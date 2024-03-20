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
		
			<div class="col-3"></div>
			
			<div class="col-6">
			
				<h2 class="mt-5 mb-5">DATABASE DATA INSERTION TOOL</h2>
				
				<form action="processor.php" method="POST">
					
					<textarea class="form-control" required="" name="input" placeholder="Enter SQL TABLE QUERIES" style="resize:none;height:300px;"></textarea>
					
					<button class="btn btn-primary mt-4 w-100"><i class="fa fa-send"></i> Generate</button>
					
				</form>
				
			</div>
			
			<div class="col-3"></div>
			
		</div>
		
	</div>
	
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>