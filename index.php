<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - A.D</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">TechRéseau</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume.html">About Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#reg">Registration</a></li>
                            <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#log">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Best Tools &middot; Networking &middot; Hacking</div></div>
                                <div class="fs-3 fw-light text-muted">Connect with us on Discord!</div>
                                <h1 class="display-8 fw-bolder mb-5"><span class="text-gradient d-inline">Explore our shop for top-notch networking and hacking tools—perfect for fun, learning, and discovery!</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <img class="profile-img" src="assets/hooded-prog-pic.jpg" alt="..." style="max-width:100%; max-height:100%; border-radius:13%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">At TechRéseau, we offer top-notch networking and hacking tools for fun and learning. Explore, experiment, and unleash your digital creativity!</p>
                                <p class="text-muted">Join our Discord to connect with the global TechRéseau community. Get support for your account, website support, as well as the latest tech and knowledge.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

            <!-- Modal Registration-->
    <div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CREATE ACCOUNT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="process.php" method="POST">

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"> <i class="bi bi-person-circle fs-4 text-primary"></i></span>
                    <input type="text" class="form-control" name="fn"
                    placeholder="Enter your First Name..." required >
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"> <i class="bi bi-person-circle fs-4 text-primary"></i></span>
                    <input type="text" class="form-control" name="ln"
                    placeholder="Enter your Last Name..." required >
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"> <i class="bi bi-envelope fs-4 text-primary"></i></span>
                    <input type="email" class="form-control" name="email"
                    placeholder="Enter your Email..." required >
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"> <i class="bi bi-shield-lock fs-4 text-primary"></i></span>
                    <input id= "myInput" type="password" class="form-control" name="pass"
                    placeholder="Enter your Password..." required >
                </div>
                <span class="fs-5">
                    <input type="checkbox" class="form-check-input"
                    onclick="myFunction()">Show Password
                </span>
            <script>
                
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }

                </script>
                        

                </div>

                <div class="modal-footer">
                <input type="submit" name="reg" value="SUBMIT" class="btn btn-success">
                </div>
            </form>

            </div>
            </div>
    </div>

        <!-- Modal Login-->
<div class="modal fade" id="log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action=""  method="POST">

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"> <i class="bi bi-envelope fs-4 text-primary"></i></span>
                    <input type="email" class="form-control" name="email"
                    placeholder="Enter your Email..." required >
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="addon-wrapping"> <i class="bi bi-shield-lock fs-4 text-primary"></i></span>
                    <input id="Inputlog" type="password" class="form-control" name="pass"
                    placeholder="Enter your Password..." required >
                </div>

                <span class="fs-5">
                    <input type="checkbox" class="form-check-input"
                    onclick="myFunctionlog()">Show Password
                </span>
                
                <script>
                    
                        function myFunctionlog() {
                        var x = document.getElementById("Inputlog");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }

                </script>

                <div class="modal-footer">
                    <input type="submit" value="LOGIN" name="log" class="btn btn-success">
                </div>

            </form>
      </div>
    </div>
</div>
                    </div>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
