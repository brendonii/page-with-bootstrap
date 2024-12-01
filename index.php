<?php
$con = mysqli_connect("localhost", "root", "", "euroshow");
if (!$con) {
    die("Connection Error");
}
?>

<?php
$query = "select * from service";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Service</title>
</head>

<body class="bg-dark">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Restaroco</a>
            <ul class="navbar-nav align-items-center text-secondary">
                <li><a class="nav-link" href="index.html">Home</a></li>
                <li><a class="nav-link" href="features.html">Features</a></li>
                <li><a class="nav-link" href="about.html">About Us</a></li>
                <li><a class="nav-link" href="login.html">Login Form</a></li>
                <li><a class="nav-link" href="service.html">Service</a></li>
                <li><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container bg-white p-5 mt-5">
        <h3 class="text-center pb-3">Table</h3>
        <table class="table border p-5">
            <tr class="bg-dark text-white">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created</th>
                <th>Category</th>
            </tr>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['date_created']; ?></td>
                    <td><?php echo $row['category_id']; ?></td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
    <!-- Here is Footer -->
    <div class="container-fluid">
        <div class="container">
            <div class="row py-4 justify-content-between">
                <div class="col-md-5">
                    <ul class="d-flex gap-3">
                        <a class="nav-link p-0 " href="index.html">Home</a>
                        <a class="nav-link p-0" href="features.html">Features</a>
                        <a class="nav-link p-0" href="about.html">About Us</a>
                        <a class="nav-link p-0" href="login.html">Login Form</a>
                        <a class="nav-link p-0" href="service.html">Service</a>
                        <a class="nav-link p-0" href="contact.php">Contact</a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="d-flex">
                        <li class="nav-link"><i class="fa-brands fa-facebook"></i></li>
                        <li class="nav-link"><i class="fa-brands fa-instagram"></i></li>
                        <li class="nav-link"><i class="fa-brands fa-tiktok"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>