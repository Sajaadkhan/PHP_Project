<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>BookStore:HOME</title>
    <link rel="icon" type="image/x-icon" href="assets/booksICON.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet" />

    <?php
        require("mysqli_connect.php");
        session_start();
        if(isset($_GET['action']) && $_GET['action']=='addToCart'){
            
            echo "<script> alert('added to cart');</script>";
            $bookid=$_GET['Book_ID'];
            $q = "select * FROM bookinventory where Book_ID=$bookid";
            $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);     
            $r=mysqli_fetch_array($res);
            $bookName=$r['Book_name'];
            $bookPrice=$r['Price'];
            $bookImg=$r['Image_url'];

            $itemArray=array($bookid=>array('Book_ID'=>$bookid,'Book_name'=>$bookName,'Book_url'=>$bookImg,'Book_price'=>$bookPrice));
         
            if(!isset($_SESSION['cart_item']) || empty($_SESSION['cart_item'])){
                $_SESSION["cart_item"] = $itemArray;
            }
            else{
                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
            }
        }       
    ?>
</head>
<body>
    <!-- navigation bar for the website-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><img src="assets/booksICON.png" width="30px" height="30px">&nbsp; BookStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bookstore">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>

                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-dark" href="cartCheckout.php">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span
                            class="badge bg-dark text-white ms-1 rounded-pill"><?php if(isset($_SESSION['cart_item'])){ echo count($_SESSION['cart_item']); } else{ echo "0";} ?></span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- header-->
    <header id="overlay" style="position: relative;">
        <img src="assets/cover3.jpg" style="height:90vh;width:100%;" alt="book store cover image">
        <div id="overText" style="position:absolute;top: 25%;left:50%;transform: translate(-50%, -25%);"
            class="container px-4 px-lg-5">
            <div class="text-center">
                <h1 class="display-1 fw-bolder">BookStore</h1>
                <p class="lead fw-normal mb-2">Shop Books with BookStore</p>
                <Span class="text-center"><a class="btn btn-outline-dark mt-2 fw-bold " href="#bookstore">Go to Book
                        Store</a></span> &nbsp;
            </div>
        </div>
    </header>
    <!-- Section-->
    <section id="bookstore">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
              
                $q = "select * FROM bookinventory";
                $res=mysqli_query($dbc,$q) OR mysqli_error($dbc);   
                while($r=mysqli_fetch_array($res)){
                if(!$r['Stock']<=0){
             echo "<div class='col mb-5'>
                <div class='card h-100'>
                 <a href='checkout.php?Book_ID=".$r['Book_ID']."'><img class='card-img-top' style='object-fit:cover;' src='".$r['Image_url']."' alt='...' /></a>
                    <div class='card-body p-4'>
                        <div class='text-center'>
                            <h5 class='fw-bolder'>".$r['Book_name']."</h5>
                            $".$r['Price']."
                        </div>
                    </div>
                    <div class='text-center card-footer p-4 pt-0 border-top-0 bg-transparent'>
                        <Span class='text-center'><a class='btn btn-outline-dark mt-auto' href='checkout.php?Book_ID=".$r['Book_ID']."'>Buy Now</a></span> &nbsp;
                        <Span class='text-center'><a class='btn btn-outline-dark mt-auto' href='index.php?action=addToCart&Book_ID=".$r['Book_ID']."'><i
                                    class='fa fa-shopping-cart'></i></a></Span>
                    </div>
                </div>
            </div>";
                }
            }
                ?>


            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; BookStore 2021</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>