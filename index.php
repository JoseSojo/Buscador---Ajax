<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Search to jQuery</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="card mt-5 col-12 col-md-5 m-auto p-0">
				<div class="card-body">
					<form class="d-flex" id="form-save" autocomplete="off">
						<input type="text" class="form-control rounded-0 border-success" id="input-save" placeholder="Add to name">
						<input type="submit" id="btn-save" value="Save Name" class="btn btn-success rounded-0">
					</form>
				</div>
				<div class="card-footer" id="msj-add-name">
				</div>
			</div>		
			

			<div class="card mt-5 col-12 col-md-5 m-auto p-0">
				<div class="card-body">
					<form>
						<input type="text" class="form-control rounded-0 border-success" id="input-search" placeholder="Search to name">	
					</form>
				</div>			
				<div class="card-footer" id="msj-result">
				</div>
			</div>
			
		</div>
	</div>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>