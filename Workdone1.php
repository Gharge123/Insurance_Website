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
    </style>
    <style>
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .text-align{
            margin-top: -3%;
            margin-bottom: -9%;

            padding: 10%;
            margin-left: 30%;
        }
        .form-new{
            margin-right: 8%;
            margin-left: 8%;
        }
        .register-heading{
            margin-left: 21%;
            margin-bottom: 10%;
            color: #e9ecef;
        }
        .register-heading h1{
            margin-left: 21%;
            margin-bottom: 10%;
            color: #e9ecef;
        }
        .register{
            background: -webkit-linear-gradient(left, #055a4f, #00c6ff);
            margin-top: 3%;
            padding: 3%;
            border-radius: 2.5rem;
        }
        .btnSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #03612e;
            border: none;
            cursor: pointer;
            margin-right: 6%;
            color: rgb(246, 246, 252);
            margin-top: 4%;
        }
        .btnSubmit1
        {
            width: 100%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #03612e;
            border: none;
            cursor: pointer;
            margin-right: 6%;
            color: rgb(246, 246, 252);
            margin-top: 4%;
        }
        .container123{
            max-width: 600px;
            margin: auto;
        }
</style>
<style>
     .container123 {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: linear-gradient(to right, #ffffff, #e0e0e0);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .register {
            padding: 20px;
        }

        .register-heading {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .btnSubmit {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btnSubmit:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .form-group {
                margin-right: 0;
            }
        }
</style>
<style>
     .container123 {
            background: linear-gradient(135deg, #f3f4f6 0%, #ffffff 100%);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
        }

        .register-heading {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-group input:focus {
            border-color: #5c67f2;
            box-shadow: 0 0 5px rgba(92, 103, 242, 0.5);
            outline: none;
        }

        .btnSubmit {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #5c67f2;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btnSubmit:hover {
            background-color: #4a54e1;
        }
        .container123 h3{
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
                <a href="service.php" class="nav-item nav-link active">Companies</a
          >
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Companies</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Companies</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Workdone Data -->
     <div class="container123">
        <div class="register">
            <h3 class="register-heading">Enter Task Details</h3>
            <form id="contact-form" method="post" action="daily_task.php" autocomplete="off" name="google-sheet" style="display: flex; flex-wrap: wrap;">
                <div class="form-group" style="flex: 1; min-width: 200px; margin-right: 10px;">
                    <input type="datetime-local" name="date" class="form-control" placeholder="Date *" required>
                </div>
                <div class="form-group" style="flex: 1; min-width: 200px; margin-right: 10px;">
                    <input type="text" name="Companynm" class="form-control" placeholder="Company Name *" required>
                </div>
                <div class="form-group" style="flex: 1; min-width: 200px; margin-right: 10px;">
                    <input type="text" name="Claimno" class="form-control" placeholder="Your Claim No *" required>
                </div>
                <div class="form-group" style="flex: 1; min-width: 200px; margin-right: 10px;">
                    <input type="text" name="WorkDone" class="form-control" placeholder="Work Done *" required>
                </div>
                <div class="form-group" style="flex: 1; min-width: 200px;">
                    <input type="submit" name="submit" class="btnSubmit" value="Submit">
                </div>
            </form>
        </div>
        <table class="data-table" id="show">
             <thead>
                 <tr>
                     <th>Date</th>
                     <th>Claim No</th>
                     <th>Work Done</th>
                 </tr>
             </thead>
             <tbody id="table-body">
                 <!-- Table data will be dynamically populated here -->
                 <?php
                     // Fetch tasks from the database and display them
                     $servername = "localhost";
                     $username = "root"; // Replace with your database username
                     $password = ""; // Replace with your database password
                     $dbname = "icici"; // Replace with your database name

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);

                     // Check connection
                     if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                     }

                     $sql = "SELECT date, claim_no, work_done FROM tasks";
                     $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                         while ($row = $result->fetch_assoc()) {
                             echo "<tr><td>{$row['date']}</td><td>{$row['claim_no']}</td><td>{$row['work_done']}</td></tr>";
                         }
                     } else {
                         echo "<tr><td colspan='3'>No tasks found</td></tr>";
                     }

                     $conn->close();
                 ?>
             </tbody>
         </table>

         <style>
             .data-table {
                 width: 100%;
                 border-collapse: collapse;
                 margin: 20px 0;
                 font-size: 18px;
                 text-align: left;
                 background-color: #fff;
                 box-shadow: 0 2px 10px rgba(0,0,0,0.1);
             }
             .data-table th, .data-table td {
                 padding: 12px 15px;
             }
             .data-table th {
                 background-color: #4CAF50;
                 color: white;
             }
             .data-table tbody tr:nth-child(even) {
                 background-color: #f2f2f2;
             }
             .data-table tbody tr:hover {
                 background-color: #ddd;
             }
             .data-table tbody tr {
                 border-bottom: 1px solid #ddd;
             }
             .data-table tbody tr:last-child {
                 border-bottom: 2px solid #4CAF50;
             }
             .data-table tbody td {
                 color: #333;
             }
         </style>
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
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            // Create a new FormData object and append the form data
            const formData = new FormData(this);

            fetch('daily_task.php', {
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
</body>

</html>
