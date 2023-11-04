<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    EDIT CUSTOMER
    <?php
    include 'koneksi.php';

    $customer = mysqli_query($conn, "SELECT * from customer where id='$_GET[id]'");

    while ($c = mysqli_fetch_array($customer)) {
        $id = $c["id"];
        $first_name = $c["first_name"];
        $last_name = $c["last_name"];
        $email = $c["email"];
        $phone = $c["phone"];
    }
    ?>
    <form action="proses_edit.php?id=<?php echo $id ?>" method="post">
        <table class="table">
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="text" name="id" disabled value="<?php echo $id ?>"></td>
            </tr>

            <tr>
                <td>First Name</td>
                <td>:</td>
                <td><input type="text" name="first_name" value="<?php echo $first_name ?>"> </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>:</td>
                <td><input type="text" name="last_name" value="<?php echo $last_name ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="number" name="phone" value="<?php echo $phone ?>"></td>
            </tr>
        
        </table>
        <input type="submit" name="Submit" value="Simpan">
    </form>
</body>

</html>