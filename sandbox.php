<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SandBox</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
<style src="stgile.css"></style>
</head>
<body>

<div class="jumbotron text-center"><h1>SandBox</h1></div>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

		<?php echo "<pre>";print_r($data);echo "</pre>";exit; ?>
	
    </div>
  </div>
</div>

<script src="javascript.js"></script>
</body>
</html>