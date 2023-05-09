
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cube Store</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/5cfc771818.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body>
<!-- Image and text -->
@if (Auth::check()) 
    <ul>
        <li><a href="/home">Home</a></li>
    </ul>

@else
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="https://cuberoute.co.za/wp-content/uploads/2022/10/Cube-logo-CMYK-scaled-e1666001814183.jpg" width="60px" height="40px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul style="right : 200px"class="navbar-nav">
      <li style="float : right" class="nav-item active">
        <a class="nav-link" href="/login">Login </a>
      </li>
      <li style="float : right" class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
     
    </ul>
  </div>
</nav>

@endif



@foreach($products as $product)

    <div style="float : left ;width : 20%; margin-top : 50px; margin-left : 50px"class="col-sm">
    <div class="card" style="width: 18rem;">
  <img src="/img/1.jpg" width="50" height="250"class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$product['Product_name' ]}}</h3>
    <h5 >{{$product['category_id' ]}}</h5>
    <h5>{{$product['varient' ]}}</h5>
    <a href="#" class="btn btn-primary"><i style="" class="fas fa-cart-shopping">Add To Cart</i></a>
  </div>
</div>
    </div>

@endforeach
  
   



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>