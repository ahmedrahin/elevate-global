<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERVICES || Elevate Global Group Pty</title>
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
   <!-- owl carousel css cdn link -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
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
    <section class="pages-banner service">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <h4 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">WHAT WE OFFER</h4>
                    <h1>Our Services</h1>
                    <p>Our mission is to empower businesses with cutting-edge IT solutions and <br> streamline their operations through strategic outsourcing</p>
                    <button class="btn-started" type="button" data-bs-toggle="modal" data-bs-target="#started">
                        GET STARTED
                    </button>
                </div>

            </div>
        </div>
    </section>
    <!-- pages-banner end -->

    <!-- our-services section start -->
    <section class="our-services">
        <div class="container">
            <div class="row">

                <div class="title">
                    <h1 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">Our Comprehensive IT Services <br> For Your Business</h1>
                    <p>In today's digital age, staying competitive and efficient relies on harnessing the power of Information Technology. we understand that navigating the IT landscape can be a complex and challenging task for businesses. That's where we come in. We offer a wide range of IT services designed to empower your organization and drive your success.</p>
                </div>

                <div class="col-lg-12">
                    <div class="department">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa fa-desktop department-icon" aria-hidden="true"></i>
                                    <h3>Managed IT Services</h3>
                                    <p>Our team of experts will manage your entire IT infrastructure, from network maintenance to security updates. With 24/7 monitoring, we ensure your systems are up and running smoothly, giving you peace of mind.</p>
                                    <a href="managed.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa fa-shield department-icon" aria-hidden="true"></i>
                                    <h3>Cybersecurity Solutions</h3>
                                    <p>Protect your business from evolving cyber threats. We offer a comprehensive suite of cybersecurity services, including threat detection, security assessments, and employee training to safeguard your data and maintain your reputation.</p>
                                    <a href="cybersecurity.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-cloud-arrow-up department-icon"></i>
                                    <h3>Cloud Services</h3>
                                    <p>Migrate your data and applications to the cloud for increased flexibility, scalability, and cost savings. Our cloud solutions enable you to work from anywhere while ensuring data security.</p>
                                    <a href="cloud.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-code department-icon"></i>
                                    <h3>Software Development</h3>
                                    <p>Tailor-made software solutions for your unique business needs. Our experienced developers create custom applications that streamline your operations, improve efficiency, and enhance customer experiences.</p>
                                    <a href="software.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-network-wired department-icon"></i>
                                    <h3>Network Solutions</h3>
                                    <p>A robust and reliable network is the backbone of your business. We provide network design, installation, and management services to ensure seamless communication and data sharing.</p>
                                    <a href="network.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-database department-icon"></i>
                                    <h3>Data Recovery and Backup</h3>
                                    <p>Don't let data loss disrupt your operations. We offer data backup and recovery solutions to protect your critical information and quickly restore it in case of an incident.</p>
                                    <a href="data.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-handshake department-icon"></i>
                                    <h3>Consulting and Strategy</h3>
                                    <p>Our IT experts work with you to develop IT strategies that align with your business goals. We help you make informed decisions on technology investments and upgrades.</p>
                                    <a href="consulting.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-screwdriver-wrench department-icon"></i>
                                    <h3>Outsourcing Services</h3>
                                    <p>Optimize your operations by outsourcing non-core functions such as helpdesk support, IT project management, and customer support, allowing you to focus on your core competencies.</p>
                                    <a href="outsourcing.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="department-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                                    <i class="fa-solid fa-headset department-icon"></i>
                                    <h3>Customer Support</h3>
                                    <p>Call centers, email support, and live chat services. This allows you to focus on your core competencies while we handle customer support and engagement, ensuring efficiency and cost-effectiveness.</p>
                                    <a href="customer.php" target="_blank">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- our-services section end -->

    <!-- team section start -->
    <section class="team">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                    <h4>ELEVATE GLOBAL GROUP service</h4>
                    <h1>Unlocking Business Potential <br> through our services</h1>
                    <p>At Elevate Global Group, we offer a wide range of IT and outsourcing services, including Managed IT Services, Cybersecurity Solutions, Cloud Services, Software Development, Network Solutions, Data Recovery and Backup, Consulting and Strategy, and Outsourcing Services. These services are designed to empower your organization, enhance efficiency, and drive success in the digital age.</p>
                    <p>In conclusion, outsourcing is a powerful tool that can significantly benefit businesses by reducing costs, improving efficiency, and enhancing their focus on core functions. When executed strategically, outsourcing can unlock a world of opportunities and help companies thrive in a competitive global market.</p>
                </div>

                <div class="col-lg-3 col-md-3" >
                    <img src="images/bg3.png" alt="" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="images/bg8.png.jpg" alt="" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                </div>

            </div>
        </div>
    </section>
    <!-- team section end -->

    <!-- testimonil section start -->
    <section class="testimonil">
        <div class="container">
            <div class="row">

            <div class="title">
                <h4 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">client review</h4>
                <h1>our client feedback</h1>
                <p>At Elevate Global Group Pty Ltd, we take pride in the success stories of our clients. Here's <br> what some of them have to say about their experiences working with us</p>
            </div>

            <div class="col-lg-10 col-md-10 col-12 offset-lg-1 offset-md-1">
                <div class="owl-carousel owl-theme">
                    <div class="review-item item">
                        <div class="row align-items-end g-4">
                            <div class="col-lg-5 col-12">
                                <div class="clinet-info">
                                    <img src="images/2.png" alt="">
                                    <label>
                                        from  &nbsp- &nbsp<span>Australia</span>
                                    </label>
                                    <h5>David Jhone</h5>
                                    <p>HR Manager of  MIT Solution</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="clien-say">
                                    <h5>Web Development</h5>
                                    <span>Mar 4 - 2022</span>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <hr>
                                    <p>"I can't express how grateful I am for Elevate Global Group's services. Their IT solutions transformed our business. They are not just a service provider; they are a partner in our growth journey."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-item item">
                        <div class="row align-items-end g-4">
                            <div class="col-lg-5 col-12">
                                <div class="clinet-info">
                                    <img src="images/3.png" alt="">
                                    <label>
                                        from  &nbsp- &nbsp<span>Bangladesh</span>
                                    </label>
                                    <h5>Michael Brown</h5>
                                    <p>IT Manager at BC Corporation</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="clien-say">
                                    <h5>Cybersecurity Solutions</h5>
                                    <span>Apr 14 - 2023</span>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <hr>
                                    <p>"Elevate Global Group's team has been instrumental in securing our digital infrastructure. Their cybersecurity services are top-notch, and their dedication to our data's safety is commendable."</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="review-item item">
                        <div class="row align-items-end g-4">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="clinet-info">
                                    <img src="images/1.png" alt="">
                                    <label>
                                        from  &nbsp- &nbsp<span>usa</span>
                                    </label>
                                    <h5>Sarah Smith</h5>
                                    <p>Employee at XYZ Company</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="clien-say">
                                    <h5>Cloud services</h5>
                                    <span>Jan 10 - 2023</span>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <hr>
                                    <p>"Elevate Global Group's cloud services have been a pleasant surprise. They've helped us streamline our operations and cut costs significantly."</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- testimonil section end -->

    <!-- end section start -->
    <section class="end">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <img src="images/about-outsourcingbg1.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <h6>We understand that outsourcing is not just meeting of processes and technologies but meeting of cultures and corporate philosophies. At Asiatel Outsourcing, we are sensitive to your business needs and lay special emphasis on pilot projects so that we are well synchronized to your requirements at the stage of scale up</h6>
                    <a href="outsource.php" class="bg-btn">KNOW MORE ABOUT OUTSOURCING<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                                                header("Location: service.php");
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