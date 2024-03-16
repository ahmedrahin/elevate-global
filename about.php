<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABOUT || Elevate Global Group Pty</title>
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
                            <a href="about.php" class="active">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
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
                <a href="index.php" >Home</a>
              </li>
              <li>
                <a href="about.php" style="color: #e32845;">about</a>
              </li>
              <li>
                <a href="services.php">services</a>
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
    <section class="pages-banner">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <h4 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">Elevate Global Group</h4>
                    <h1>ABOUT US</h1>
                    <p>Keep this page for adding the company Directors and Employees <br> show casing the experience. </p>
                    <button class="btn-started" type="button" data-bs-toggle="modal" data-bs-target="#started">
                        GET STARTED
                    </button>
                </div>

            </div>
        </div>
    </section>
    <!-- pages-banner end -->

    <!-- mission-vission section start -->
    <section class="mission-vission">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-7" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                    <h1>Elevate is an IT Solution provider based in Bangladesh</h1>
                    <p>At Elevate Group, we are committed to helping businesses thrive in the digital era. With our comprehensive IT services, you can unlock your organization's full potential, drive efficiency, and stay ahead of the competition. Contact us today to learn more about how we can assist you in achieving your IT goals and powering your success.</p>
                </div>

            </div>
            <div class="row g-lg-5 g-md-5">

                <div class="col-lg-5 col-md-5 offset-lg-1 offset-md-1">
                    <div class="mission-vission-info" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                        <img src="images/targeting.png" alt="">
                        <h3>Our Mission Statement</h3>
                        <p>At Elevate Global Group, our mission is to empower businesses with cutting-edge IT solutions and streamline their operations through strategic outsourcing. We are committed to delivering innovative technology services that drive growth, enhance efficiency, and ensure the security of our clients' digital infrastructure. With a focus on excellence, integrity, and continuous improvement, we aim to be a trusted partner in the digital transformation journey of every organization we serve.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="mission-vission-info vission" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                        <img src="images/mission.png" alt="">
                        <h3>Our Vision Statement</h3>
                        <p>Our vision is to be a global leader in IT and Outsourcing services, recognized for our unwavering commitment to quality, reliability, and innovation. We aspire to revolutionize the way businesses leverage technology by providing tailored solutions that enable them to thrive in an ever-evolving digital landscape. By fostering a culture of collaboration, expertise, and sustainable practices, we aim to be at the forefront of driving technological advancements that benefit our clients, employees, and the communities we serve.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- mission-vission section end -->

    <!-- proccess section start -->
    <section class="proccess">
        <div class="container">
            <div class="row">

                <h1>The Process</h1>

                <div class="col-lg-3 col-md-3 col-6">
                    <div class="step" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <h2>Step 1</h2>
                        <p>Need analysis & finalize Model for Engagement</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="step" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="130" data-aos-once="true">
                        <i class="fa-solid fa-file"></i>
                        <h2>Step 2</h2>
                        <p>Agreement Signing & finalizing the roles that will be exported to the Philippines</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                        <i class="fa-solid fa-briefcase"></i>
                        <h2>Step 3</h2>
                        <p>Recruitment and go live</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="step" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="170" data-aos-once="true">
                        <i class="fa-regular fa-handshake"></i>
                        <h2>Step 4</h2>
                        <p>On going support from us</p>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!-- proccess section start -->

    <!-- about-us section start -->
    <section class="about-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <h4 data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">ABOUT US</h4>
                    <h1>Elevate Global Group <br> Pty Ltd</h1>
                    <p>In today's digital age, staying competitive and efficient relies on harnessing the power of Information Technology. At Elevate Global Group Pty we understand that navigating the IT landscape can be a complex and challenging task for businesses. That's where we come in. We offer a wide range of IT services designed to empower your organization and drive your success.</p>
                    <p>Your success is our success, and that is a responsibility we take seriously. With a client-centric approach, we work diligently to provide solutions that not only meet your expectations but exceed them. We prioritize the security and reliability of your systems, ensuring that your data remains confidential and accessible whenever you need it. Our scalable, cost-effective solutions are designed to adapt and grow with your business as it evolves.</p>
                    <a href="services.php" class="bg-btn">KNOW MORE ABOUT OUR SERVICES<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-list" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                        <h3>Our IT Services</h3>
                        <p>We understand that navigating the IT landscape can be a complex and challenging task for businesses. That's where we come in. We offer a wide range of IT services designed to empower your organization and drive your success.</p>
                        <ul>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Managed IT Services
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Cybersecurity Solutions
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Cloud Services
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Software Development
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Network Solutions
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Data Recovery and Backup
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Consulting and Strategy
                            </li>
                            <li>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Outsourcing Services
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-us section end -->
    
    <!-- team section start -->
    <section class="team">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <h4>ELEVATE GLOBAL GROUP Team</h4>
                    <h1>Our Team</h1>
                    <p>At Elevate Global Group, we take pride in our exceptional team of dedicated professionals who are at the heart of our success. Our diverse and highly skilled team members bring a wealth of expertise and experience to the table. Together, we work relentlessly to deliver the best IT and outsourcing services to our clients. Our team of experts will manage your entire IT infrastructure, from network maintenance to security updates. With 24/7 monitoring, we ensure your systems are up and running smoothly, giving you peace of mind.</p>
                    <p>Our team's expertise, dedication, and client-focused approach make Elevate Global Group the go-to partner for IT and outsourcing services. We are committed to helping businesses succeed in the digital era and look forward to assisting you in achieving your IT goals. Contact us today to explore how our team can empower your organization.</p>
                </div>

                <div class="col-lg-3 col-md-3" >
                    <img src="images/bg5.png" alt="" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="images/bg4.png" alt="" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                </div>

            </div>
        </div>
    </section>
    <!-- team section end -->

    <!-- choose-us section start -->
    <section class="choose-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" data-aos-once="true">
                    <h1>Choosing the Right Outsourcing <br> Partner</h1>
                    <p>In today's fast-paced and ever-changing business landscape, organizations are constantly seeking ways to optimize their operations, reduce costs, and enhance their competitive edge. One strategy that has gained immense popularity and proven to be a game-changer for businesses of all sizes is outsourcing.</p>
                    <p>In this digital age, Elevate Global Group is your steadfast partner, your technology expert, and your gateway to unlocking the full potential of your organization. Our comprehensive IT services will empower you, drive efficiency, and help you stay ahead of the competition. Contact us today to discover how we can work together to achieve your IT goals and ensure your ongoing success in the ever-changing business landscape.</p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="service-list">
                        <h3>Why Choose Us?</h3>
                        <p>Is your business ready to explore the possibilities of outsourcing? Contact us today to learn how our outsourcing services can take your organization to new heights.</p>
                        <ul>
                            <li>
                                <h5>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Expertise
                                </h5>
                                <span>Our team of IT professionals is highly skilled and experienced, ensuring that you receive top-notch service.</span>
                            </li>
                            <li>
                                <h5>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Client-Centric Approach
                                </h5>
                                <span>We take the time to understand your unique requirements and tailor our services to meet your specific needs</span>
                            </li>
                            <li>
                                <h5>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Security and Reliability
                                </h5>
                                <span>We prioritize the security and reliability of your systems, ensuring the confidentiality and availability of your data.</span>
                            </li>
                            <li>
                                <h5>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Scalability
                                </h5>
                                <span>Our services are designed to grow with your business. As you expand, we'll adapt your IT solutions to support your evolving needs.</span>
                            </li>
                            <li>
                                <h5>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    Cost-Effective Solutions
                                </h5>
                                <span>We offer competitive pricing and cost-effective solutions that deliver a high return on investment.</span>
                            </li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- choose-us section end -->
    
    <!-- faq section start -->
    <section class="faq about">
        <div class="container">
            <div class="row">

                <h1 style="text-align: center;">Frequently Asked <br> Question</h1>
                <p style="text-align: center;">Where we provide answers to some of the most commonly asked questions about Elevate Global Group and our services. If you have a question that's not covered here, <br> please don't hesitate to reach out to us, and we'll be happy to assist you.</p>

                <div class="col-lg-6 col-md-6">
                    <div class="accordion">
                        <div class="accordion-item">
                            <span class="accordion-button collapsed" data-bs-target="#item1" data-bs-toggle="collapse" id="ab1" aria-expanded="false">
                                <i class="fa-solid fa-angle-right open-accordion"></i>
                                What services does Elevate Global Group offer?
                            </span>
                            <div class="accordion-collapse collapse" id="item1">
                                <div class="accordion-body">
                                    <label for="">
                                        At Elevate Global Group, we offer a comprehensive range of IT and outsourcing services. Our services include Managed IT Services, Cybersecurity Solutions, Cloud Services, Software Development, Network Solutions, Data Recovery and Backup, Consulting and Strategy, and Outsourcing Services. These services are designed to empower your organization and help you succeed in the digital era.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <span class="accordion-button accordion-button3 collapsed" data-bs-target="#item3" data-bs-toggle="collapse" id="ab3" aria-expanded="false">
                                <i class="fa-solid fa-angle-right open-accordion3"></i>
                                How can I get started with Elevate Global Group's services?
                            </span>
                            <div class="accordion-collapse collapse" id="item3">
                                <div class="accordion-body">
                                    <label for="">
                                        Getting started is simple. Contact us through our website or directly via email or phone, and our team will work with you to understand your specific needs. We'll then create a customized plan to help you achieve your IT goals.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <span class="accordion-button accordion-button3 collapsed" data-bs-target="#item6" data-bs-toggle="collapse" id="ab6" aria-expanded="false">
                                <i class="fa-solid fa-angle-right open-accordion6"></i>
                                How do I reach out to Elevate Global Group for more information or assistance?
                            </span>
                            <div class="accordion-collapse collapse" id="item6">
                                <div class="accordion-body">
                                    <label for="">
                                        You can reach us through our "Contact Us" section on our website. We have offices in Dhaka, Sydney, and Melbourne, and we're always ready to assist you. Additionally, you can access our client portal for support and resources.
<br>
If you have more questions or need further information, please don't hesitate to reach out to us. We're here to support your business and help you succeed in the digital era.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="accordion">
                        <div class="accordion-item">
                            <span class="accordion-button accordion-button2 collapsed" data-bs-target="#item2" data-bs-toggle="collapse" id="ab2" aria-expanded="false">
                                <i class="fa-solid fa-angle-right open-accordion2"></i>
                               How is Your Data Security System?
                            </span>
                            <div class="accordion-collapse collapse" id="item2">
                                <div class="accordion-body">
                                    <label for="">
                                        We employ stringent security measures to protect your data from unauthorized access, disclosure, or alteration. Our commitment to data security includes the use of encryption, regular security audits, and access controls.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <span class="accordion-button collapsed" data-bs-target="#item4" data-bs-toggle="collapse" id="ab4" aria-expanded="false">
                                <i class="fa-solid fa-angle-right open-accordion4"></i>
                                Is Elevate Global Group committed to data security and confidentiality?
                            </span>
                            <div class="accordion-collapse collapse" id="item4">
                                <div class="accordion-body">
                                    <label for="">
                                        Absolutely. We prioritize the security and reliability of your systems. Protecting your data is our top priority, and we take every measure to ensure it remains confidential and available whenever you need it.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <span class="accordion-button accordion-button2 collapsed" data-bs-target="#item5" data-bs-toggle="collapse" id="ab5" aria-expanded="false">
                                <i class="fa-solid fa-angle-right open-accordion5"></i>
                                Does Elevate Global Group offer outsourcing services, and how can they benefit my business?
                            </span>
                            <div class="accordion-collapse collapse" id="item5">
                                <div class="accordion-body">
                                    <label for="">
                                        Yes, we offer outsourcing services, allowing you to optimize your operations by outsourcing non-core functions. This helps you focus on your core competencies while we take care of tasks such as helpdesk support, IT project management, and customer support, ensuring efficiency and cost-effectiveness.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->

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
                                                header("Location: about.php");
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
      <!-- aos animate -->
    <script src="js/aos.js"></script>
    <!-- Custom Js -->
    <script src="js/script.js"></script>
    <script>
         $(document).ready(function(){
            $('#ab1').click(function(){
                $('.open-accordion').toggleClass('open');
            });
            $('#ab2').click(function(){
                $('.open-accordion2').toggleClass('open');
            }); 
            $('#ab3').click(function(){
                $('.open-accordion3').toggleClass('open');
            });
            $('#ab4').click(function(){
                $('.open-accordion4').toggleClass('open');
            });
            $('#ab5').click(function(){
                $('.open-accordion5').toggleClass('open');
            });
            $('#ab6').click(function(){
                $('.open-accordion6').toggleClass('open');
            });
            
        })

        // humburder-menu
        $('.humburger').click(function(){
            $('.sidebar-menu').toggleClass('menuActive');
            $('.sidebar-menu').removeClass('menuClose')
        })
        $('.sidebar-clos').click(function(){
            $('.sidebar-menu').toggleClass('menuClose');
            $('.sidebar-menu').removeClass('menuActive');
        })

        // responsive menubar
        $('.menu-icon').click (function(){
            $('.menu-icon').toggleClass('open');
        })
        $('.menu-icon').click (function(){
            $('.menu-item').slideToggle('500');
        })
    </script>
    <script>
        // Preloader
        $(window).on('load', function() {
            $('.preloader-area').fadeOut();
        });
    </script>
  </body>
</html>
<?php ob_end_flush(); ?>
