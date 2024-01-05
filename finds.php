<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

  <title>Health Form</title>

  <style>
    body {
      background-image: url('WhatsApp Image 2024-01-04 at 12.30.01_15a298df.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: transparent; /* Set complete transparency for form background */
      border: 2px solid black; /* Add a black border */
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(255,255, 255, 0.5);
      max-width: 400px;
      width: 100%;
    }

    .mb-3 {
      margin-bottom: 15px;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 20px;
    }

    .btn-primary {
      background-color: transparent; /* Set buttons initially transparent */
      border-color: #000; /* Set border color */
      color: #000; /* Set text color */
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s; /* Smooth color transition */
    }

    .btn-primary:hover {
      background-color: #000; /* Change background on hover */
      color: red; /* Change text color on hover */
    }

    .link-button {
      color: #000; /* Set text color for links */
      transition: color 0.3s;
    }

    .link-button:hover {
      color: #dc3545; /* Change text color on hover */
    }

    .btn-sos {
      background-color: transparent; /* Set button initially transparent */
      border-color: #dc3545; /* Set border color for SOS */
      color: #dc3545; /* Set text color for SOS */
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s; /* Smooth color transition */
    }

    .btn-sos:hover {
      background-color: #dc3545; /* Change background on hover */
      color: #fff; /* Change text color on hover */
    }

    .button-container a {
      display: block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h1 class="mb-4">Find Your service</h1>
    <form>
      <div class="button-container">
        <a class="btn btn-primary link-button" href="doctors.php">plumber</a>
        <a class="btn btn-primary link-button" href="#">carpenter</a>
        <a class="btn btn-primary link-button" href="#">electrician</a>
        <a class="btn btn-sos" href="inter.php">SOS</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function toggleAddress() {
      var addressSection = document.getElementById("addressSection");
      addressSection.style.display = addressSection.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
</html>

