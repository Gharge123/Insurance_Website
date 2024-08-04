<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Godjn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      .service-icon i {
          font-size: 3em; /* Increased font size */
          color: #fff; /* White color for icons */
          padding: 20px; /* Increased padding */
          background-color: #007bff; /* Background color */
          border-radius: 50%; /* Circular shape */
          display: flex;
          align-items: center;
          justify-content: center;
          width: 70px; /* Ensures the icon container is a circle */
          height: 70px; /* Ensures the icon container is a circle */
      }

      .service-item {
          box-shadow: 0 4px 8px rgba(0,0,0,0.1);
          transition: transform 0.3s, box-shadow 0.3s;
      }

      .service-item:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      }

      .service-item .btn {
          transition: background-color 0.3s, color 0.3s;
      }

      .service-item .btn:hover {
          background-color: #007bff;
          color: #fff;
      }

      @media (max-width: 768px) {
          .service-icon {
              width: 60px; /* Adjusted width for smaller screens */
              height: 60px; /* Adjusted height for smaller screens */
              font-size: 2.5em; /* Adjusted font size for smaller screens */
          }
      }
  </style>
   <style>

    .godjn-section img {
        max-width: 50px;
        height: auto;
        margin-right: 10px;
    }

     @media (max-width: 768px) {
       .godjn-section img {
            max-width: 40px;
        }
    }
    @media (max-width: 576px) {
        .godjn-section img {
            max-width: 30px;
        }
    }
    .icon-container i {
    font-size: 3rem; /* Maximize icon size */
    color: #fb873f; /* Attractive color for icons */
    padding: 6px;
}
.icon-container {
    flex-shrink: 0;
    margin-right: 15px;
}
/* Responsive design */
@media (max-width: 768px) {
    .icon-container {
        margin-bottom: 10px;
    }
}
</style>
<style>
    /* .container123 {
        width: 100%;
        max-width: 600px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: auto;
    }

    .header123 h2 {
        margin-bottom: 20px;
        color: #4CAF50;
    } */

    .success-message h3 {
        background-color: #dff0d8;
        color: #3c763d;
        border: 1px solid #d6e9c6;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .content p {
        margin-bottom: 20px;
        color: #333;
    }

    .logout-button {
        display: inline-block;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .logout-button:hover {
        background-color: #45a049;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        display: inline-block;
        /* background-color: #4CAF50; */
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* .btn:hover {
        background-color: #45a049;
    } */

    .error {
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #a94442;
        color: #a94442;
        background: #f2dede;
        border-radius: 5px;
        text-align: left;
    }

    </style>
</head>

<body>
  <!-- <?php if (isset($_SESSION['success'])) : ?>
        <div class="success-message">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1'" class="logout-button">logout</a></p>
    <?php endif ?> -->
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>Godjn@example.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-facebook-f"></i
            ></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-twitter"></i
            ></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-linkedin-in"></i
            ></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-instagram"></i
            ></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img class="img-fluid me-3" src="img/godjn.png" alt="" />Godjn
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="Daily_Tasks.php" class="nav-item nav-link">Daily Tasks</a>
                <a href="service.php" class="nav-item nav-link">Companies</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="dailytask.php" class="dropdown-item">Daily Task</a>
                    <a href="leave.php" class="dropdown-item">Leave Request Form</a>
                    <a href="performance.php" class="dropdown-item">Performance Rating</a>
                    <a href="salary.php" class="dropdown-item">Salary Sleep</a>
                    <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
        </div>
        </div>
        <?php if (isset($_SESSION['username'])) : ?>
            <a href="index.php?logout='1'" class="btn btn-primary px-3 d-none d-lg-block">logout</a>
        <?php endif ?>

    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                      Godjn Creates Wealth For Everyone
                                    </h1>
                                    <p class="fs-5 text-body mb-5">
                                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                                    </p>
                                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                      The Best Godjn Begins Here
                    </h1>
                    <p class="fs-5 text-body mb-5">
                      Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                      duo justo magna dolore erat amet
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/about.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
                >
                  <h1 class="text-white mb-0">10</h1>
                  <h2 class="text-white">Years</h2>
                  <h5 class="text-white mb-0">Experience</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5">
                We're Here To Assist You
              </h1>
              <p class="fs-5 text-primary mb-4">
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet
                lorem sit clita duo justo erat amet
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div class="icon-container d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <i class="fas fa-calendar-alt"></i>
                    <h5 class="mb-0">Timeframe</h5>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="icon-container d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <i class="fas fa-comment-dots"></i>
                    <h5 class="mb-0">Client/Customer Feedback</h5>
                  </div>
                </div>
              </div>
              <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex align-items-center">
                  <img
                    class="flex-shrink-0 rounded-circle me-3"
                    src="img/profile.jpg"
                    alt=""
                  />
                  <h5 class="mb-0">Call Us: +012 345 6789</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">For Individuals And Organisations</h1>
              <p class="text-light mb-5">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                >More Details</a
              >
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Happy Clients</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Projects Succeed</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Awards Achieved</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-06-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">High Quality Work</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Timely Delivery</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5>Expert Team</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-07-primary.png"
                      alt=""
                    />
                    <h5>Excellent Customer Support</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/feature.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
             Professional Companies
          </h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                <i class="fas fa-shield-alt"></i>
                </div>
                <h4 class="mb-0">Bajaj Allianz General Insurance</h4>
              </div>
              <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item rounded h-100 p-5">
                                    <div class="d-flex align-items-center ms-n5 mb-4">
                                        <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                          <i class="fas fa-heart"></i>
                                        </div>
                                        <h4 class="mb-0">BA Life Insurance</h4>
                                    </div>
                                    <p class="mb-4">
                                        Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                                    </p>
                                    <a class="btn btn-light px-3" href="">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item rounded h-100 p-5">
                                    <div class="d-flex align-items-center ms-n5 mb-4">
                                        <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                          <i class="fas fa-briefcase"></i>
                                        </div>
                                        <h4 class="mb-0">ICICI Lombard</h4>
                                    </div>
                                    <p class="mb-4">
                                        Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                                    </p>
                                    <a class="btn btn-light px-3" href="">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item rounded h-100 p-5">
                                    <div class="d-flex align-items-center ms-n5 mb-4">
                                        <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                          <i class="fas fa-home"></i>
                                        </div>
                                        <h4 class="mb-0">Universal Sompo</h4>
                                    </div>
                                    <p class="mb-4">
                                        Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                                    </p>
                                    <a class="btn btn-light px-3" href="">Read More</a>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item rounded h-100 p-5">
                                    <div class="d-flex align-items-center ms-n5 mb-4">
                                        <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                            <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                                        </div>
                                        <h4 class="mb-0">Business Insurance</h4>
                                    </div>
                                    <p class="mb-4">
                                        Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                                    </p>
                                    <a class="btn btn-light px-3" href="">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item rounded h-100 p-5">
                                    <div class="d-flex align-items-center ms-n5 mb-4">
                                        <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                            <img class="img-fluid" src="img/icon/icon-06-light.png" alt="" />
                                        </div>
                                        <h4 class="mb-0">Property Insurance</h4>
                                    </div>
                                    <p class="mb-4">
                                        Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
                                    </p>
                                    <a class="btn btn-light px-3" href="">Read More</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Service End -->

                <!-- Appointment Start -->
                <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                                <h1 class="display-6 text-white mb-5">
                                   Have any Queries then Contact Us
                                </h1>
                                <p class="text-white mb-5">
                                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                    lorem sit clita duo justo magna.
                                </p>
                                <!-- <div class="bg-white rounded p-3">
                                    <div class="d-flex align-items-center bg-primary rounded p-3">
                                        <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                                        <h5 class="text-white mb-0">Call Us: +012 345 6789</h5>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-white rounded p-5">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="gname" placeholder="Gurdian Name" />
                                                    <label for="gname">Your Name</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email" />
                                                    <label for="gmail">Your Email</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="cname" placeholder="Child Name" />
                                                    <label for="cname">Your Mobile</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="cage" placeholder="Child Age" />
                                                    <label for="cage">Query Subject</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                                    <label for="message">Message</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary py-3 px-5" type="submit">
                      Submit
                    </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Appointment End -->

                <!-- Team Start -->
                <!-- <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mx-auto" style="max-width: 500px">
                            <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item rounded">
                                    <img class="img-fluid" src="img/team-1.jpg" alt="" />
                                    <div class="text-center p-4">
                                        <h5>Full Name</h5>
                                        <span>Designation</span>
                                    </div>
                                    <div class="team-text text-center bg-white p-4">
                                        <h5>Full Name</h5>
                                        <p>Designation</p>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i
                  ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item rounded">
                                    <img class="img-fluid" src="img/team-2.jpg" alt="" />
                                    <div class="text-center p-4">
                                        <h5>Full Name</h5>
                                        <span>Designation</span>
                                    </div>
                                    <div class="team-text text-center bg-white p-4">
                                        <h5>Full Name</h5>
                                        <p>Designation</p>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i
                  ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item rounded">
                                    <img class="img-fluid" src="img/team-3.jpg" alt="" />
                                    <div class="text-center p-4">
                                        <h5>Full Name</h5>
                                        <span>Designation</span>
                                    </div>
                                    <div class="team-text text-center bg-white p-4">
                                        <h5>Full Name</h5>
                                        <p>Designation</p>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i
                  ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item rounded">
                                    <img class="img-fluid" src="img/team-4.jpg" alt="" />
                                    <div class="text-center p-4">
                                        <h5>Full Name</h5>
                                        <span>Designation</span>
                                    </div>
                                    <div class="team-text text-center bg-white p-4">
                                        <h5>Full Name</h5>
                                        <p>Designation</p>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i
                  ></a>
                                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i
                  ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Team End -->

                <!-- Testimonial Start -->
                <!-- <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mx-auto" style="max-width: 500px">
                            <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="testimonial-left h-100">
                                    <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                                    <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                                    <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="owl-carousel testimonial-carousel">
                                    <div class="testimonial-item text-center">
                                        <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-1.jpg" alt="" />
                                        <p class="fs-5">
                                            Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                        </p>
                                        <h5>Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                    <div class="testimonial-item text-center">
                                        <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="" />
                                        <p class="fs-5">
                                            Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                        </p>
                                        <h5>Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                    <div class="testimonial-item text-center">
                                        <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="" />
                                        <p class="fs-5">
                                            Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                        </p>
                                        <h5>Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="testimonial-right h-100">
                                    <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                                    <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                                    <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Testimonial End -->

                <!-- Footer Start -->
                <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class=" godjn-section col-lg-3 col-md-6">
                                <h1 class="text-white mb-4">
                                    <img class="img-fluid me-3" src="img/godjn.png" alt="" />Godjn
                                </h1>
                                <p>
                                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                </p>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i
              ></a>
                                    <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i
              ></a>
                                    <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i
              ></a>
                                    <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i
              ></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h5 class="text-light mb-4">Address</h5>
                                <p>
                                    <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                                </p>
                                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope me-3"></i>Godjn@example.com</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h5 class="text-light mb-4">Quick Links</h5>
                                <a class="btn btn-link" href="Daily_Tasks.php">Daily Tasks</a>
                                <a class="btn btn-link" href="contact.php">Contact Us</a>
                                <a class="btn btn-link" href="service.php">Companies</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h5 class="text-light mb-4">Newsletter</h5>
                                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                                <div class="position-relative mx-auto" style="max-width: 400px">
                                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                                    <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                SignUp
              </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                                </div>
                                <div class="col-md-6 text-center text-md-end">
                                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                                    <br />Distributed By:
                                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i
    ></a>

                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="lib/wow/wow.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/counterup/counterup.min.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
</body>

</html>
