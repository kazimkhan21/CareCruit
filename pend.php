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
  background-size: 100% auto; /* Zoomed out by 90% horizontally, maintaining aspect ratio */
  background-position: center; /* Aligning the background image to the center */
  background-repeat: no-repeat; /* Ensuring the background image doesn't repeat */
  margin: 0;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}


    .form-container {
      background-color: rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
      background-color: transparent;
      border-color: #007bff;
      color: #007bff;
      border-radius: 20px;
    }

    .btn-primary:hover {
      background-color: #007bff;
      color: #fff;
    }

    .link-button {
      color: #007bff;
      transition: color 0.3s;
    }

    .link-button:hover {
      color: #dc3545;
    }

    .btn-sos {
      background-color: transparent;
      border-color: #dc3545;
      color: #dc3545;
      border-radius: 20px;
    }

    .btn-sos:hover {
      background-color: #dc3545;
      color: #fff;
    }

    .button-container a {
      display: block;
      margin-bottom: 10px;
    }

    
    .dropdown {
      margin-top: 10px;
    }

    .dropdown-menu a.dropdown-item {
      color: #007bff;
      transition: background-color 0.3s, color 0.3s;
    }

    .dropdown-menu a.dropdown-item:hover {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h1 class="mb-4">Payments</h1>
    <div class="button-container">
      <div class="btn-group">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="pendingDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            pending
          </button>
          <ul class="dropdown-menu" aria-labelledby="pendingDropdown">
            <li><a class="dropdown-item" href="#">report</a></li>
            <li><a class="dropdown-item" href="#">call</a></li>
            <li><a class="dropdown-item" href="#">exit</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="receivedDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            received
          </button>
          <ul class="dropdown-menu" aria-labelledby="receivedDropdown">
            <li><a class="dropdown-item" href="#" onclick="showTickAnimation()">continue</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    function showTickAnimation() {
      // Code to show tick animation
      // For example, you can use an animation library or custom CSS animation here
      
      // Play sound indicating payment is done
      var audio = new Audio('path_to_sound_file.wav');
      audio.play();
      
      // Show bubbles on the web page (You'll need to implement this)
      // For example, use CSS animations or JavaScript to create bubble effects
    }
  </script>
</body>
</html>
