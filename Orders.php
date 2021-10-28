<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet" />
    <?php session_start(); ?>
</head>

<body>
    <!-- navigation bar for the website-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">BookStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#bookstore">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#!">About</a></li> -->
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                    </li> -->
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-dark" href="checkout.php?page=cart">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo count($_SESSION['cart_item']);?></span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <section class="row">
        <div class="col-12 px-5 my-5">
            <div class="card border-top">
                <div class="row">
                    <div class="col cart px-4">
                        <div class="title">
                            <div class="row">
                                <div class="col p-2">
                                    <h4><b>Item Details</b></h4>
                                </div>
                                                             
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <h6><b>S.NO</b></h6>
                                </div>
                                <div class="col text-center">
                                    <h6><b>Name</b></h6>
                                </div>
                               
                                <div class="col text-center">
                                    <h6><b>Book Ordered</b></h6>
                                </div>
                                <div class="col text-center ">
                                    <h6><b>Price</b></h6>
                                </div>
                                <div class="col text-center">
                                    <h6><b>Order Time</b></h6>
                                </div>
                               
                                                             
                            </div>

                        </div>
            <?php
                require("mysqli_connect.php");
                $q = "select * FROM bookorders JOIN bookinventory using(Book_ID)
                order by order_id";
            
                $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);

           
            while($r=mysqli_fetch_array($res)){
                echo " <div class='row p-2 border-top border-bottom'>
                    <div class='row main align-items-center '>
                    <div class='col p-2 '>
                    <div class='text-center'>".$r['order_id']."</div>
                        </div>
                        <div class='col p-2'> 
                        <div class='text-center'>".$r['custFirstName']." ".$r['custLastName']. "</div>
                        </div>
                       
                        <div class='col p-2'>
                        <div class='text-center'>".$r['Book_name']."</div>
                        </div>
                        <div class='col p-2'>
                        <div class='text-center'> $".$r['Price']."</div>
                        </div>    
                        <div class='col p-2'>
                        <div class='text-center'>".$r['Ordered_On']."</div>
                        </div>                  
                    </div>
                </div>";
            }
               

            ?>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="container px-5 my-5 col-md-6">
        </div>
    </section>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; BookStore 2021</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>