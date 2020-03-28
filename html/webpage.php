<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Programming Simplified</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>    
    </ul>
  </div>  
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/bootstrap/images/image1.jpg" alt="Los Angeles" style="width: 100%; height:100vh"/>
    </div>
    <div class="carousel-item">
      <img src="/bootstrap/images/image2.jpg" alt="Chicago"style="width: 100%; height:100vh"/>
    </div>
    <div class="carousel-item">
      <img src="/bootstrap/images/image3.jpg" alt="New York" style="width: 100%; height:100vh"/>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="container">
<h1 class="text-center">About</h1>
    <div class="row"> 
        <div class="col-xl-4 col-md-4 col-sm">
        <img src="/bootstrap/images/image2.jpg" alt="Chicago" style="width: 250px; height:250px">
        </div>
        <div class="col-xl-8 col-md-9 col-sm">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat tempore magnam assumenda fugiat? Similique aspernatur veniam laboriosam ducimus excepturi distinctio. Eius fugiat sunt, molestias fuga a recusandae quos ratione provident.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, obcaecati tempore excepturi eaque repudiandae eius? Ea magnam exercitationem a sed porro. Saepe, quis autem cumque facere suscipit alias? Animi, voluptates!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequuntur dolore ipsum incidunt obcaecati, iure nostrum praesentium veniam, sapiente omnis repudiandae, dolorum ipsa. Perferendis illo aut eius cum explicabo itaque?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum vero sunt rem soluta repudiandae, corrupti a facilis iste repellendus neque architecto recusandae ducimus odio saepe nam rerum aut, natus aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsa quas repellendus nihil alias explicabo consequuntur provident porro, cupiditate labore! Id tempora fugiat porro dolorum ex repudiandae et quam sed?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ullam expedita enim amet voluptate placeat sint, facilis quia sunt corrupti ab odio unde accusamus corporis ex est illo at. Corrupti.</p> 
        <button class="btn btn-primary">Know More</button>
    </div>
    </div>
</div>

<div class="container">
    <h1 class="text-center mt-5">Services</h1>
    <div class="row">
    <div class="col-xl-4 col-md-4 col-sm">
    <img src="/bootstrap/images/image1.jpg" alt="Los Angeles" style="width:400px;height:400px"/> 
    </div>
    <div class="col-xl-4 col-md-4 col-sm ">
    <img src="/bootstrap/images/image2.jpg" alt="Los Angeles" style="width:400px;height:400px"> 
    </div>
    <div class="col-xl-4 col-md-4 col-sm">
    <img src="/bootstrap/images/image3.jpg" alt="Los Angeles"style="width:400px;height:400px" > 
    </div>
    <div class="col-xl-4 col-md-4 col-sm mt-5">
    <img src="/bootstrap/images/image1.jpg" alt="Los Angeles" style="width:400px;height:400px"/> 
    </div>
    <div class="col-xl-4 col-md-4 col-sm mt-5">
    <img src="/bootstrap/images/image2.jpg" alt="Los Angeles" style="width:400px;height:400px"> 
    </div>
    <div class="col-xl-4 col-md-4 col-sm mt-5">
    <img src="/bootstrap/images/image3.jpg" alt="Los Angeles"style="width:400px;height:400px" > 
    </div>
    <button class="btn btn-primary mt-5">Know More</button>
    </div>
</div>
<div class="container">
  <h2 class="text-center">Contact Form</h2>
  <form action="contact.php" class="was-validated" method="POST">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile number" name="mobile" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="comment">Write your comment</label> <br/>
    <textarea placeholder="Comments" name="comment" id="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
  </form>
</div>

 <footer class="container-fluid">
   <p class="text-center">&copy Programming Simplified 2020</p>
   <p class="text-center">Made With Love <i style="color:red">&hearts;</i></p>
 </footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>