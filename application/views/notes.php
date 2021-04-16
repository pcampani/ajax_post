<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="<?php base_url()?>js/index.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>css/styles.css">
	<title>AJAX Notes App</title>
</head>
<body>
	<h1>Notes App</h1>
	<div class="notes"></div>
	<form action="notes/create" method="post">
		<label for="note">Add a Note</label>
		<textarea name="note"></textarea>
		<span class="error"><?=form_error("note")?></span>
		<input type="submit" value="Post It!">
	</form>
	
</body>
</html>
