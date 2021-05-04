<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>How to Create a QRCode using Google QRCode API</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">QRCode using Google QRCode API</h1>
	<div style="margin-bottom:5px;">
					<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
				</div>
	<form method="post" id="user_form">
	<div class="table-responsive">
	<table class="table table-striped table-bordered" id ="user_data">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Phone Number</th>
		</tr>
	<div>
		<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert"></input>
	</div>
	</form>

	<div id="user_dialog" title="Add Data">
		<div class="form-group">
			<label>Enter First Name</label>
			<input text="text" name="first_name" id="first_name" class="form-control" />
			<span id="error_first_name" class="text-danger"></span>
		</div>
		<div class="form-group">
			<label>Enter Last Name</label>
			<input text="text" name="last_name" id="last_name" class="form-control" />
			<span id="error_last_name" class="text-danger"></span>
		</div>
	
	</div>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-3">
			<form method="POST">
				<div class="form-group">
					<label for="">Text to Convert to QRCode</label>
					<input type="text" class="form-control" name="text_code">
					<input type="text" class="form-control" name="text_code1">
					<input type="text" class="form-control" name="age">
					
				</div>
				
				<button type="submit" class="btn btn-primary" name="generate">Generate QRCode</button>
			</form>
		</div>
		<div class="col-sm-3">
			<?php
				if(isset($_POST['generate'])){
					$code = $_POST['text_code'];
					$code1 = " ";
					$code2 = $_POST['text_code1'];
					$int = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
					echo "
						<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code$code1$code2$int&choe=UTF-8'>
					";
				}
			?>
		</div>
	</div>
</div>
</body>
</html>