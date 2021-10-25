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
                    <a class="btn btn-outline-dark" href="#">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <section class="row">
        <div class="col-md-6 px-5 my-5">
            <div class="card border-top">
                <div class="row">
                    <div class="col cart px-4">
                        <div class="title">
                            <div class="row">
                                <div class="col p-2">
                                    <h4><b>Item Details</b></h4>
                                </div>
                              
                            </div>
                        </div>
            <?php
                require("mysqli_connect.php");
                if(isset($_GET['Book_ID']))
                {
                    $total_price=0;
                    $book_id=$_GET['Book_ID'];
                $q = "select * FROM bookinventory where Book_ID=$book_id";
                $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);

           
                   while($r=mysqli_fetch_array($res)){
                            $total_price+=$r['Price'];          
                    echo " <div class='row p-2 border-top border-bottom'>
                    <div class='row main align-items-center'>
                        <div class='col-2'><img class='img-fluid' src='".$r['Image_url']."'></div>
                        <div class='col'>
                            <div class='row'>".$r['Book_name']."</div>
                        </div>

                        <div class='col text-center'>$".$r['Price']."</div>
                    </div>
                </div>";
                
                      }
                      echo "<div class='container fw-bolder p-2'> Total Price : $$total_price</div>";
                      

             
              }


            ?>


                        <!-- <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                                <div class="col">
                                    <div class="row">Cotton T-shirt</div>
                                </div>

                                <div class="col text-center">$ 44.00 </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="container px-5 my-5 col-md-6">
        <h4><b>Payment Details</b></h4>
            <form id="contactForm" action="form.php" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="firstName">First Name</label>
                    <input class="form-control" id="firstName" type="text" placeholder="First Name"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="firstName:required">First Name is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="lastName">Last Name</label>
                    <input class="form-control" id="lastName" type="text" placeholder="Last Name"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="lastName:required">Last Name is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control" id="address" type="text" placeholder="Address"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="address:required">Address is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input class="form-control" id="phoneNumber" type="text" placeholder="Phone Number"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="phoneNumber:required">Phone Number is required.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Card </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="visa" type="radio" name="card" data-sb-validations="" />
                        <label class="form-check-label" for="visa">Visa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="debit" type="radio" name="card" data-sb-validations="" />
                        <label class="form-check-label" for="debit">Debit</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="mastercard" type="radio" name="card"
                            data-sb-validations="" />
                        <label class="form-check-label" for="mastercard">Mastercard</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cardNumber">Card Number</label>
                    <input class="form-control" id="cardNumber" type="text" placeholder="Card Number"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="cardNumber:required">Card Number is required.</div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <!-- <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark btn-lg" id="submitButton" type="submit">Submit</button>
                </div>
            </form>
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