<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sach bai viet</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<h1>Danh sach bai viet</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tieu de bai viet</th>
					<th>Noi dung bai viet</th>
					<th>Tac gia</th>
					<th><a class="btn btn-success" href="">Them moi</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($posts as $key => $post): ?>
					<tr>
						<td><?= $key+1?></td>
						<td><?= $post->title ?></td>
						<td><?= $post->description ?></td>
						<td><?= $post->author ?></td>
						<td>
							<a class="btn btn-info" href=""><span class="glyphicon glyphicon-pencil"></span></a>
							<a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>



	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>