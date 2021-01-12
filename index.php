<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewUser</title>
    <h2>USER REGISTRATION FORM</h2>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">NewUser Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Main</a>
          <a class="nav-link" href="home.php">Home</a>
        </div>
      </div>
    </div>
  </nav>  
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="200px" src="images\1.jfif" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="200px" src="images\2.jfif" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="200px" src="images\3.jfif" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table">
                    <tr>
                        <td>FIRST NAME</td>
                        <td><input type="text" class="form-control"></td>
                        <td>LAST NAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>AGE</td>
                        <td><input type="text" class="form-control"></td>
                        <td>D.O.B</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>MOBILENUMBER</td>
                        <td><input type="text" class="form-control"></td>
                        <td>EMAIL ID</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PLACE</td>
                        <td><input type="text" class="form-control"></td>
                        <td>USERNAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-primary">REGISTER</button></button></td>
                        <td></td>
                    </tr>
                </table>   
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>