<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas PHP 2</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" style="color: white;">Website CRUD</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="product.php" style="color: white;">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="customer.php" style="color: white;">Customer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="order.php" style="color: white;">Order</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container col-md-6 mt-4">
		<h1>Product Data</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Product Data
			</div>
			<div class="card-body">
				<a href="tambahproduk.php" class="btn btn-md btn-success" style="margin-bottom: 10px">+ Tambah Data</a>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include('koneksi.php'); // Menghubungkan ke database
						$data = mysqli_query($conn, "SELECT * FROM product") or die(mysqli_error($conn));

						$no = 1; // Untuk pengurutan nomor

						while ($row = mysqli_fetch_assoc($data)) {
						?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $row['name']; ?></td>
								<td>Rp <?= $row['price']; ?></td>
								<td>
									<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
									<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
								</td>
							</tr>
						<?php $no++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="text-center p-3" style="background-color: #0d6e2b; color: white;">
		Copyright &copy; Yesicha Audria
	</div>

</body>

</html>