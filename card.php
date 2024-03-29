<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
        crossorigin="anonymous">

    <title>Signup</title>
    <style>

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url('HealthBG.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        img {
            width: 150px;
            height: auto;
            margin: 10px;
        }

        .link-button {
            width: 150px;
            height: 40px;
            border-radius: 20px;
            transition: background-color 0.3s;
            background-color: transparent;
            color: #000;
            border: 2px solid #000; 
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0; 
        }

        .link-button:hover {
            background-color: #000;
            color: #fff;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px; 
        }

        .dropdown-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .card-image-top {
            border: 2px solid black;
        }

        .card-title {
            margin-left: 80px;
        }

        .card-text {
            margin-left: 20px;
        }

        .btn  {
            margin-left: 70px;
        }
    </style>
</head>


<body>

    <div class="dropdown-container">
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">by distance</a></li>
                <li><a class="dropdown-item" href="#">by experience</a></li>
                <li><a class="dropdown-item" href="#">by price</a></li>
            </ul>
        </div>
    </div>

    <div class="grid-container">
       
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="Male Doctor.jpg" class="card-image-top" style="margin-left: 60px;"  />
            <div class="card-body">
                <h5 class="card-title">Doctor 1</h5>
                <p class="card-text">Specialisation : Cardiologist</p>
                <a href="bio2.php" class="btn btn-primary">Know More</a>
              </div>
        </div>
    </div>
        
    <div class="container">
        <div class="card">
            <img src="Female Doctor.jpg" class="card-image-top" style="margin-left: 60px;" />
            <div class="card-body">
                <h5 class="card-title">Doctor 2</h5>
                <p class="card-text">Specialisation : Cardiologist</p>
                <a href="bio2.php" class="btn btn-primary">Know More</a>
              </div>
        </div>
    </div>
    
        

    <div class="container">
        <div class="card">
            <img src="Male Doctor.jpg" class="card-image-top" style="margin-left: 60px;" />
            <div class="card-body">
                <h5 class="card-title">Doctor 3</h5>
                <p class="card-text">Specialisation : Cardiologist</p>
                <a href="bio2.php" class="btn btn-primary">Know More</a>
              </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <img src="Female Doctor.jpg" class="card-image-top" style="margin-left: 60px;" />
            <div class="card-body">
                <h5 class="card-title">Doctor 4</h5>
                <p class="card-text">Specialisation : Cardiologist</p>
                <a href="bio2.php" class="btn btn-primary">Know More</a>
              </div>
        </div>
    </div>


    <div class="container">
        <div class="card">
            <img src="Male Doctor.jpg" class="card-image-top" style="margin-left: 60px;" />
            <div class="card-body">
                <h5 class="card-title">Doctor 5</h5>
                <p class="card-text">Specialisation : Cardiologist</p>
                <a href="bio2.php" class="btn btn-primary">Know More</a>
              </div>
        </div>
    </div>
        

    <div class="container">
        <div class="card">
            <img src="Male Doctor.jpg" class="card-image-top" style="margin-left: 60px;" />
            <div class="card-body">
                <h5 class="card-title">Doctor 6</h5>
                <p class="card-text">Specialisation : Cardiologist</p>
                <a href="bio2.php" class="btn btn-primary">Know More</a>
              </div>
        </div>
    </div>
  
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>
