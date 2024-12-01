<?php
$con = mysqli_connect("localhost", "root", "", "euroshow");
if (!$con) {
  die("Connection Error");
}
?>

<?php
$query = "select * from contact";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ceb1d23e01.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="my-style.css" />
  <script src="script.js"></script>
  <title>Detyra 1</title>
</head>

<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html">Restaroco</a>
      <ul class="navbar-nav me-auto align-items-center text-secondary">
        <li><a class="nav-link" href="index.html">Home</a></li>
        <li><a class="nav-link" href="features.html">Features</a></li>
        <li><a class="nav-link" href="about.html">About Us</a></li>
        <li><a class="nav-link" href="login.html">Login Form</a></li>
        <li><a class="nav-link" href="index.php">Service</a></li>
        <li><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- Here start a contact form validation -->
  <div class="container mt-5 pt-5">
    <h3 class="text-center display-3 mb-5">Contact</h3>
    <div class="row">
      <div class="col-lg-5 bg-color" style="border-top-left-radius: 40px;">
        <ul class="mt-5">
          <h2 class="pb-3">Contact Info</h2>
          <li class="py-1">
            <p><i class="fa-solid fa-location-dot"></i> Via di S. Vincenzo, 12/34A, 00123 Roma RM, Italy.</p>
          </li>
          <li class="py-1">
            <p><i class="fa-solid fa-phone-flip"></i> +39 123 456 7890</p>
          </li>
          <li class="py-1">
            <p><i class="fa-solid fa-envelope"></i> info@contact.com</p>
          </li>
        </ul>
        <ul>
          <h2 class="pb-3">Opening hours</h2>
          <li class="py-1">
            <p>Monday - Friday 09:00 - 22:00</p>
          </li>
          <li class="py-1">
            <p>Saturday - Sunday 10:00 - 23:00</p>
          </li>
        </ul>
        <h2 class="pb-3 px-4">Stay Connected</h2>
        <ul class="gap-2 d-flex">

          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin"></i>
        </ul>
      </div>
      <div class="col-lg-7 bg-light p-5" style="border-top-right-radius: 40px;">
        <h3 class="mb-5 px-2">We love to hear from you</h3>
        <form class="g-3">
          <div class="col-lg-12 d-flex">
            <div class="col-lg-6 px-2 mb-3">
              <label for="validationCustom01" class="form-label">First Name</label>
              <input type="text" class="form-control" id="validationCustom01" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-lg-6 px-2 mb-3">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="col-lg-12 px-2 mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="col-lg-12 px-2 mb-3">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-lg-12 px-2 mb-3">
            <label for="validationCustom04" class="form-label">Country</label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>Kosova</option>
              <option>Albania</option>
              <option>North Macedonia</option>
              <option>Montenegro</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-lg-12 px-2 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Write a Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
          </div>
          <div class="col-lg-12 px-2 mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-lg-12 px-2">
            <button class="btn btn-primary px-4 py-2" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Here Start Google Map -->
  <div class="container-fluid px-0 mt-5">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23440.380463434543!2d20.772633895636933!3d42.74504602077235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13536a3a57626035%3A0x4621cccd0f198bc8!2sSkenderaj!5e0!3m2!1sen!2s!4v1722002175464!5m2!1sen!2s"
      width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- Here is Table from DataBase -->
  <div class="container bg-white p-5 mt-5">
    <h3 class="text-center pb-3">Table</h3>
    <table class="table border p-5">
      <tr class="bg-dark text-white">
        <th>ID</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Description</th>
      </tr>
      <tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['description']; ?></td>
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