<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * from customer ORDER BY id DESC");
                ?>
                <center>
                    <h1>Data Customer:</h1>
                </center>
                <a class="btn btn-success" style="margin-bottom:5px" href="tambah.php?tambah=Nama Customer"> + Tambah Customer </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Created_at
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td> <?php echo $no ?></td>
                                <td> <?php echo $data["first_name"] ?> </td>
                                <td> <?php echo $data["last_name"] ?> </td>
                                <td> <?php echo $data["email"] ?> </td>
                                <td> <?php echo $data["phone"] ?></td>
                                <td> <?php echo $data["created_at"] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="proses_hapus.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: #0d6e2b; color: white;">
        Copyright &copy; Yesicha Audria
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>