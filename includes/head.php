<!DOCTYPE html>

<html lang="en" dir="ltr">
	
	<!-- Head --> 
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= isset($pageTitle) ? $pageTitle . " | " . $websiteName : $websiteName; ?></title>
		<link rel="icon" type="image/png" href="admin/content/images/finbile-favicon.png">
		<link rel="stylesheet" href="admin/css/styles.css">

		<!--link rel="stylesheet" href="css/bootstrap.min.css"-->
		<!--link rel="stylesheet" href="css/bootstrap-theme.min.css"-->
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="admin/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#migrationModal").modal('show');
			});
		</script>

	</head>

	<!-- Body --> 
	<body>

