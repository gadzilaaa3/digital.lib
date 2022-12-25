<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../../assets/js/catalog/resources.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"
		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <title>Digital Library</title>
</head>
<body>
    <div class="container m-3">
        <div class="table">
			<h2 class="mb-3">Диски преподавателя</h2>
			<table class="table mt-3">
				<tr class="table-dark">
					<th>Name</th>
					<th>Token</th>
					<th>Path</th>
					<th>Link</th>
				</tr>
				<?php $disks = $_SESSION['catalog']->disks; ?>
				<?php foreach($disks as $disk)
				{ ?>
					<tr class="table-hover" id="<?php echo $disk->name?>">
						<td><?php echo $disk->name ?></td>
						<td><?php echo $disk->token ?></td>
						<td><?php echo $disk->path ?></td>
						<td>
							<button onclick="getResource('<?php echo $disk->path; ?>')">Перейти</button>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>

		<div id="content"></div>
    </div>
</body>
</html>
