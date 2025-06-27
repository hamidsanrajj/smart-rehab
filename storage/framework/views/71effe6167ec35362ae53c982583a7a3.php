<!DOCTYPE html>
<html>
    <head>
        <title> ABC Lense </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>

        <section id="header">
            <div class="container-fluid-less">
                <div class="row" class="header">
                    <div class="col-md-9"><div class="logo"> <a href="<?php echo e(route('index')); ?>"> <img src="assets/img/logo-full.png"> </a> </div></div>
                    <div class="col-md-3">
                        <div class="nav">
                            <nav>
                                <a id="btnBars" href="javascript:void(0);" class="icon btn-theme" style="position: absolute; right: 0%;" onclick="myFunction()">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <ul id="nav">
                                    <a href="<?php echo e(route('register')); ?>"><li>Sign Up</li></a>
                                    <a href="<?php echo e(route('login')); ?>"><li>Login</li></a>
                                </ul>
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

        <section id="slider">
            <div class="container-fluid-less">
                <div class="row">
                    <div class="slider">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="assets/img/img1.jpg" class="d-block w-100" alt="please wait...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h1 class="bg-light text-dark p-4"> Are you a photographer? Want to get hired? </h1>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/img2.jpg" class="d-block w-100" alt="please wait...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="bg-light text-dark p-4"> Are you a photographer? Want to get hired? </h1>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/img3.jpg" class="d-block w-100" alt="please wait...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="bg-light text-dark p-4"> Are you a photographer? Want to get hired? </h1>
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="gallery">
            <div class="container-fluid-less">
                <div class="gallery display-2 text-center custom-header"> Gallery </div>
                <div class="wedding">
                    <div class="heading display-4 p-4 m-4 text-center"> <i> Wedding </i> </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/wedding_image1.jpeg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/wedding_image2.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/wedding_image3.jpg"> 
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/wedding_image4.jpg">
                        </div>
                    </div>
                </div>
                <div class="birthday">
                    <div class="heading display-4 p-4 m-4 text-center"> <i> Birthday </i> </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/birthday_image1.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/birthday_image2.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/birthday_image3.jpg"> 
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/birthday_image4.jpg">
                        </div>
                    </div>
                </div>
                <div class="trips">
                    <div class="heading display-4 p-4 m-4 text-center"> <i> Trip </i> </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/trip_image1.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/trip_image2.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/trip_image3.jpg"> 
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/trip_image4.jpg">
                        </div>
                    </div>
                </div>
                <!-- <div class="nature">
                    <div class="heading display-4 p-4 m-4 text-center"> Nature </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/nature_image1.jpeg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/nature_image2.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/nature_image3.jpg"> 
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/nature_image4.jpg">
                        </div>
                    </div>
                </div>
                <div class="wildlife">
                <div class="heading display-4 p-4 m-4 text-center"> Wildlife </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/wildlife_image1.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/wildlife_image2.jpg">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/wildlife_image3.jpg"> 
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/wildlife_image4.jpg">
                        </div>
                    </div>
                </div> -->
            </div>
        </section>


        <section id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form action="<?php echo e(url('/')); ?>/subscribe" method="post" class="form">
                            <?php echo csrf_field(); ?>
                            <h2 class="text-center p-4"><i>Subscribe</i></h2>
                            <input type="email" name="email" class="form-control" placeholder="example@mail.com">
                            <input class="btn btn-primary mt-1 text-center d-none" type="submit" name="submit">
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </section>


        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo"> 
                            <img src="assets/img/logo-full.png"> 
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 py-4">
                        <!-- social media icons -->
                        <h4>Join us</h4>
                        <div class="smi">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </body>
    <script type="text/javascript" src="assets/js/js.js"></script>
	<script type="text/javascript" src="assets/css/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="assets/css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>

    function myFunction() {
    var x = document.getElementById("nav");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    $(document).ready(function(){
      $("#btnBars").click(function(){
        $("#slider").animate({top: '350px'});
      });
     
    });
</script><?php /**PATH C:\xampp\htdocs\hmEnterprises\resources\views/index.blade.php ENDPATH**/ ?>