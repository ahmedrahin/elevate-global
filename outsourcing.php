<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outsourcing Services || Elevate Global Group Pty</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awsome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!-- font awsome 4.7.0 cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- aos animate -->
   <link rel="stylesheet" href="css/aos.css">

    <!-- Css Link -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- perloader -->
    <div class="preloader-area">
        <div class="spinner">
        <div class="inner">
        <div class="disc"></div>
        <div class="disc"></div>
        <div class="disc"></div>
        </div>
        </div>
    </div>
    
    <!-- header start  -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2">
                    <a href="index.php">
                        <img src="images/logo.png" alt="" class="logo">
                    </a>
                </div>
                <div class="col-lg-7 col-md-7">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php" class="active">Services</a>
                        </li>
                        <li>
                            <a href="outsource.php">Outsourcing</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3">
                    <button class="btn1">
                        <a href="tel:01631545747;"> <i class="fa fa-phone" aria-hidden="true"></i> Phone</a>
                    </button>
                    <button class="btn2">
                        <a href="mailto:info@elevateinfo.com.au.;"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!--for resposive menubar -->
    <div class="menu-bar">
        <div class="container-fluid">
          <div class="row align-items-center">
           <div class="col-5">
             <a href="index.html">
               <img src="images/logo.png" alt="logo" class="logo">
            </a>
           </div>
           <div class="col-6">
             <div class="menu-icon">
               <span></span>
               <span></span>
               <span></span>
             </div>
           </div>
          </div>
          </div>
          <div class="menu-item">
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="about.php">about</a>
              </li>
              <li>
                <a href="services.php" style="color: #e32845;">services</a>
              </li>
              <li>
                <a href="outsource.php">Outsourcing</a>
              </li>
              <li style="border: none;">
                <a href="contact.php">contact us</a>
              </li>
            </ul>
          </div>
    </div>

    <!-- pages-banner start -->
    <section class="pages-banner service outsource">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <h4 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">OUR SERVICES</h4>
                    <h1>Outsourcing Services</h1>
                    <p>
                        Optimize your operations by outsourcing non-core functions such as helpdesk support, IT project management, <br> and customer support, allowing you to focus on your core competencies.</p>
                    <button class="btn-started" type="button" data-bs-toggle="modal" data-bs-target="#started">                    
                        INQUIRE ABOUT Outsourcing
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>
    <!-- pages-banner end -->

    <!-- page-content section start -->
    <section class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-7">
                    <h4 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">WHAT WE OFFER</h4>
                    <h1>Optimizing Operations Through Strategic Outsourcing</h1>
                    <p>Elevate Global Group offers a strategic solution: outsourcing non-core functions such as helpdesk support, IT project management, and customer support. This approach allows you to concentrate on what you do best, while we handle the rest.</p>
                    <h5>Unlocking the Benefits of Outsourcing:</h5>
                    <ul class="service-details-list">
                        <li>
                            <div>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4>Cost Savings</h4>
                                <p>Outsourcing allows businesses to access high-quality services at a fraction of the cost. </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4>Expertise</h4>
                                <p>Outsourcing allows companies to tap into specialized knowledge and skills that may not be readily available within their organization. </p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h4>Flexibility and Scalability</h4>
                                <p>Outsourcing providers can often scale their services up or down according to the business's needs, ensuring agility and adaptability in a dynamic market.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-5">
                    <img src="images/cosult.png" alt="" class="service-img" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                </div>

            </div>

            <div class="row sec-row">
                <div class="col-lg-5 col-md-5">
                    <img src="images/consult.png" alt="" class="service-img" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                </div>
                <div class="col-lg-7 col-md-7">
                    <p>Explore the details of our Outsourcing Services to understand how strategic outsourcing can optimize your business operations, cut costs, and bolster your competitive edge.</p>
                    <ul>
                        <li>
                            <img src="images/technical-support.png" alt="">
                            Information Technology (IT) Services
                        </li>
                        <li>
                            <img src="images/customer-service.png" alt="">
                            Customer Support
                        </li>
                        <li>
                            <img src="images/select.png" alt="">
                            Human Resources
                        </li>
                        <li>
                            <img src="images/bullhorn.png" alt="">
                            Digital Marketing
                        </li>
                        <li>
                            <img src="images/checklist.png" alt="">
                            Data Entry and Processing
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- page-content section end -->

    <!-- end section start -->
    <section class="end">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <img src="images/about-outsourcingbg1.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <h6>We understand that outsourcing is not just meeting of processes and technologies but meeting of cultures and corporate philosophies. At Asiatel Outsourcing, we are sensitive to your business needs and lay special emphasis on pilot projects so that we are well synchronized to your requirements at the stage of scale up</h6>
                    <a href="contact.php" class="bg-btn">CONTACT US FOR CONSULTATION<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </section>
    <!-- end section end -->

    <!-- footer section start -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="quote">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <h2>Contact us for a free quote</h2>
                            <p>Ready to jumpstart your business? Contact our team for <br> consultation and we’ll send you a free quote.</p>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <a href="contact.php">contact us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <h3>CONTACT US</h3>
                    <span>Email: <a href="mailto:@elevateinfo.com.au.">@elevateinfo.com.au.</a></span>
                    <span>Phone: <a href="tel: 01631545747;">01631545747</a></span>
                    <ul class="follow">
                        <h3>FOLLOW US</h3>
                        <li>
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3">
                    <h3>OUR LOCATION</h3>
                    <ul class="footer-link">
                        <li>Dhaka office</li>
                        <li>Sydney Office</li>
                        <li>Melbourne  office</li>
                        <br>
                        <h3>Client Portal (if applicable):</h3>
                        <p>Energy Power Saver and Endeavor Solar</p>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2">
                    <h3>USEFUL LINKS</h3>
                    <ul class="footer-link">
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Our Services</a>
                        </li>
                        <li>
                            <a href="outsource.php">Why Outsourcing</a>
                        </li>
                        <li>
                            <a href="learn.html">Learn More</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h3>INFORMATION</h3>
                    <ul class="footer-link">
                        <li>
                            <a href="privacy.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="terms.html">Terms of Service</a>
                        </li>
                        <span>If you have any questions, concerns, or requests related to our Privacy Policy or Terms of Service, please contact us at info <a href="mailt:@elevateinfo.com.au.">@elevateinfo.com.au.</a></span>
                    </ul>
                </div>

                <div class="copyright">
                    <p style="text-align: center;">©All Rights Reserved 2023 </p>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer section end -->


    <!-- Top Bar -->
    <div id="topbar">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="started" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <img src="images/body-img1.jpg" alt="">
                        </div>
                        <div class="col-lg-7 col-md-7 form-box">
                            <h1>How Can We Help You?</h1>
                            <p>Are you looking for an IT support and service provider who understands your Sydney operations? Our Elevate technical engineers have worked with businesses like yours to provide help and advice, and manage your IT solutions</p>
                            <form action="" method="POST" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="name">Your Name <span>*</span> </label>
                                            <input type="text" name="name" placeholder="Your Name" class="form-control" id="name" required>
                                            <div class="invalid-feedback">
                                                Name field is required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="email">Your Email <span>*</span> </label>
                                            <input type="email" name="email" placeholder="Your Email" id="email" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Email field is required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="number">Phone Number <span>*</span> </label>
                                            <input type="number" name="phone" id="number" placeholder="Phone Number" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Phone Number field is required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" placeholder="Company Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Your Message</label>
                                        <textarea name="message" placeholder="How Can We Help You?" class="form-control"></textarea>
                                        <input type="submit" name="btn_submit" value="SUBMIT">
                                    </div>
                                </div>
                                <?php
                                    if( !empty($_SESSION['status-cmt']) ){
                                        ?> <script src="js/sweetalert.js"></script><?php
                                        if(!empty( $_SESSION['status-cmt'])){
                                            ?>
                                                <script>
                                                swal({
                                                    title: "<?php echo $_SESSION['status-cmt']; ?>",
                                                    icon: "<?php echo $_SESSION['status-item']; ?>",
                                                });
                                                </script>
                                            <?php
                                                unset($_SESSION['status-cmt']); 
                                        }
                                    }
                                ?>

                                <?php include "admin/db.php"; ?>
                                
                                <!-- Send Databse -->
                                <?php 
                                    if( isset($_POST["btn_submit"]) ){

                                        if( !empty($_SESSION['status-cmt']) && !empty($_SESSION['status-item']) ){
                                            ?>
                                                <span>
                                                    <?php echo $_SESSION['status-cmt']; ?>
                                                </span>
                                            <?php
                                        }else {
                                            $name         = mysqli_real_escape_string($db, $_POST['name']);
                                            $email        = mysqli_real_escape_string($db, $_POST['email']);
                                            $phone        = mysqli_real_escape_string($db, $_POST['phone']);
                                            $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
                                            $message      = mysqli_real_escape_string($db, $_POST['message']);
                                            $month        = date('M');
                                            $day          = date('d');
                                            $year         = date('Y');
            
                                            $sql  = "INSERT INTO all_user (name, email, phone, message, company_name, role, year, month, day) VALUES ('$name', '$email', '$phone', '$message', '$company_name', 2, '$year', '$month', '$day') ";
            
                                            $add     = mysqli_query($db, $sql);
                                            if($add){
                                                $_SESSION['status-cmt'] = "Submitted Successfully!";
                                                $_SESSION['status-item'] = "success";
                                                header("Location: outsourcing.php");
                                            } else {
                                                die();
                                            }  
                                        }
                                        
                                    }
                                ?> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

<!-- Bootstrap Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- jqeury cdn link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- owl carousel js cdn link -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- aos animate -->
<script src="js/aos.js"></script>
<!-- Custom Js -->
<script src="js/script.js"></script>
<script>
    // Preloader
    $(window).on('load', function() {
        $('.preloader-area').fadeOut();
    });
</script>
</body>
</html>    
<?php ob_end_flush(); ?>