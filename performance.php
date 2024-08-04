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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    </style>
    <style>
        .rating-form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 500px;
            animation: fadeInUp 1s ease-in-out;
            transition: transform 0.3s, box-shadow 0.3s;
            margin: auto;

        }

        .rating-form-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .rating-form h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #fb873f;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .stars {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .stars input[type="radio"] {
            display: none;
        }

        .stars label {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s;
        }

        .stars input[type="radio"]:checked ~ label {
            color: #fb873f;
        }

        .stars label:hover,
        .stars label:hover ~ label {
            color: #fb873f;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .rating-form-container {
                padding: 15px;
            }
        }
    </style>
    <style>

    .rating-form-container {
          background-color: #fff;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          width: 100%;
          max-width: 600px;
      }
      .rating-form h2 {
          text-align: center;
          margin-bottom: 20px;
          color: #333;
      }
      .form-group {
          margin-bottom: 15px;
      }
      .form-group label {
          display: block;
          margin-bottom: 5px;
          color: #555;
      }
      .form-group input[type="text"] {
          width: 100%;
          padding: 10px;
          border: 1px solid #ddd;
          border-radius: 5px;
          box-sizing: border-box;
      }
      .stars {
          display: flex;
          gap: 5px;
      }
      .stars input[type="radio"] {
          display: none;
      }
      .stars label {
          font-size: 24px;
          color: #ddd;
          cursor: pointer;
      }
      .stars input[type="radio"]:checked ~ label {
          color: #f5c518;
      }
      .submit-btn {
          width: 100%;
          padding: 10px;
          border: none;
          border-radius: 5px;
          background-color: #007BFF;
          color: white;
          font-size: 16px;
          cursor: pointer;
      }
      .submit-btn:hover {
          background-color: #0056b3;
      }
      .rating-form .form-group .performance-rating {
          display: flex;
          align-items: center;
      }
      .rating-form .form-group .performance-rating input {
          margin-left: 10px;
          padding: 10px;
          width: 50px;
          text-align: center;
      }
    </style>
</head>

<body>
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
                    <small>godjn@example.com</small>
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
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img class="img-fluid me-3" src="img/godjn.png" alt="" />Godjn
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="Daily_Tasks.php" class="nav-item nav-link">Daily Tasks</a>
                <a href="service.php" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a
            >
            <div class="dropdown-menu bg-light border-0 m-0">
                <a href="dailytask.php" class="dropdown-item">Daily Task</a>
                <a href="leave.php" class="dropdown-item">Leave Request Form</a>
                <a href="performance.php" class="dropdown-item">Performance Rating</a>
                <a href="salary.php" class="dropdown-item">Salary Sleep</a>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Performance Rating</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Performance Rating
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
            </div>
        </div>
    </div> -->
    <!-- Team End -->
    <div class="rating-form-container">
        <form id="contact-form" class="rating-form" action="submit_rating.php" method="POST">
            <h2>Employee Rating Form</h2>
            <div class="form-group">
                <label for="employee-name">Employee Name:</label>
                <input type="text" id="employee-name" name="employee_name" required>
            </div>
            <div class="form-group">
                <label for="employee-cases">Employee Cases Completed:</label>
                <input type="text" id="employee-cases" name="employee_cases" required>
            </div>
            <div class="form-group">
                <label>No. of Frauds:</label>
                <div class="stars">
                    <input type="radio" id="fraud-5" name="fraud_rating" value="5"><label for="fraud-5">&#9733;</label>
                    <input type="radio" id="fraud-4" name="fraud_rating" value="4"><label for="fraud-4">&#9733;</label>
                    <input type="radio" id="fraud-3" name="fraud_rating" value="3"><label for="fraud-3">&#9733;</label>
                    <input type="radio" id="fraud-2" name="fraud_rating" value="2"><label for="fraud-2">&#9733;</label>
                    <input type="radio" id="fraud-1" name="fraud_rating" value="1"><label for="fraud-1">&#9733;</label>
                </div>
            </div>
            <div class="form-group">
                <label>Connectivity:</label>
                <div class="stars">
                    <input type="radio" id="connectivity-5" name="connectivity_rating" value="5"><label for="connectivity-5">&#9733;</label>
                    <input type="radio" id="connectivity-4" name="connectivity_rating" value="4"><label for="connectivity-4">&#9733;</label>
                    <input type="radio" id="connectivity-3" name="connectivity_rating" value="3"><label for="connectivity-3">&#9733;</label>
                    <input type="radio" id="connectivity-2" name="connectivity_rating" value="2"><label for="connectivity-2">&#9733;</label>
                    <input type="radio" id="connectivity-1" name="connectivity_rating" value="1"><label for="connectivity-1">&#9733;</label>
                </div>
            </div>
            <div class="form-group">
                <label>Communication Skills:</label>
                <div class="stars">
                    <input type="radio" id="communication-5" name="communication_rating" value="5"><label for="communication-5">&#9733;</label>
                    <input type="radio" id="communication-4" name="communication_rating" value="4"><label for="communication-4">&#9733;</label>
                    <input type="radio" id="communication-3" name="communication_rating" value="3"><label for="communication-3">&#9733;</label>
                    <input type="radio" id="communication-2" name="communication_rating" value="2"><label for="communication-2">&#9733;</label>
                    <input type="radio" id="communication-1" name="communication_rating" value="1"><label for="communication-1">&#9733;</label>
                </div>
            </div>
            <div class="form-group">
                <label>Completion On TAT:</label>
                <div class="stars">
                    <input type="radio" id="tat-5" name="tat_rating" value="5"><label for="tat-5">&#9733;</label>
                    <input type="radio" id="tat-4" name="tat_rating" value="4"><label for="tat-4">&#9733;</label>
                    <input type="radio" id="tat-3" name="tat_rating" value="3"><label for="tat-3">&#9733;</label>
                    <input type="radio" id="tat-2" name="tat_rating" value="2"><label for="tat-2">&#9733;</label>
                    <input type="radio" id="tat-1" name="tat_rating" value="1"><label for="tat-1">&#9733;</label>
                </div>
            </div>
            <div class="form-group performance-rating">
                <label for="performance">Performance Rating:</label>
                <input type="text" id="performance" name="performance" readonly>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="godjn-section col-lg-3 col-md-6">
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
                    <p><i class="fa fa-envelope me-3"></i>godjn@example.com</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
			document.getElementById('contact-form').addEventListener('submit', function(event) {
					event.preventDefault(); // Prevent the default form submission
					// Create a new FormData object and append the form data
					const formData = new FormData(this);

					fetch('submit_rating.php', {
							method: 'POST',
							body: formData
					})
					.then(response => response.text())
					.then(data => {
							alert('Your details have been submitted successfully');
							this.reset(); // Reset the form fields
					})
					.catch(error => {
							alert('There was an error submitting your details. Please try again.');
							console.error('Error:', error);
					});
			});
		 </script>
     <script>
        document.getElementById('employee-cases').addEventListener('input', function () {
            const casesCompleted = parseInt(this.value) || 0;
            const dailyCases = 20;
            const monthlyCases = dailyCases * 30; // Assuming 30 days in a month

            let performanceRating = 1; // Default to 1 star

            if (casesCompleted >= monthlyCases) {
                performanceRating = 5;
            } else if (casesCompleted >= (monthlyCases / 2)) {
                performanceRating = 3;
            }

            document.getElementById('performance').value = performanceRating;
        });
    </script>
</body>

</html>
