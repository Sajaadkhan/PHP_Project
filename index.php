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
            <a class="navbar-brand" href="#!">BookStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
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
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- header-->
    <header id="overlay" style="position: relative;">
        <img src="assets/cover3.jpg" style="height:90vh;width:98vw;" alt="book store cover image">
        <div id="overText" style="position:absolute;top: 25%;left:50%;transform: translate(-50%, -25%);"
            class="container px-4 px-lg-5">
            <div class="text-center">
                <h1 class="display-1 fw-bolder">BookStore</h1>
                <p class="lead fw-normal mb-2">Shop Books with BookStore</p>
                <Span class="text-center"><a class="btn btn-dark mt-2" href="#">Go to Book Store</a></span> &nbsp;
            </div>
        </div>
    </header>
    <!-- Section-->
    <section>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="assets/php.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">PHP</h5>
                                $40.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <img class="card-img-top" src="assets/db.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                               <h5 class="fw-bolder">Database</h5>
                                $18.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <img class="card-img-top" src="assets/and.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Android</h5>
                                $25.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="assets/ga.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Google Analytics</h5>
                                $40.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <img class="card-img-top" src="assets/ps.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Photoshop</h5>
                                $25.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="assets/html5.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">HTML5</h5>
                                $12
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <img class="card-img-top" src="assets/py.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Python</h5>
                                $18.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="assets/net.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">ASP.NET</h5>
                                $22.00
                            </div>
                        </div>
                        <div class="card-footer text-center p-4 pt-0 border-top-0 bg-transparent">
                            <Span class="text-center"><a class="btn btn-dark mt-auto" href="#">Buy Now</a></span> &nbsp;
                            <Span class="text-center"><a class="btn btn-outline-dark mt-auto"><i
                                        class="fa fa-shopping-cart"></i></a></Span>
                        </div>
                    </div>
                </div>
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