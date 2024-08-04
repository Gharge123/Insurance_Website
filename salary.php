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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
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
        .form-container {
            background-color: #ffffff; /* White background for the form */
            border-radius: 0.75rem; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
            padding: 2rem; /* Padding inside the form */
            margin: 1rem auto; /* Margin for spacing */
            max-width: 900px; /* Max width for larger screens */
        }

        .form-container h1 {
            color: #fb873f; /* Header color */
        }

        .table-header {
            background-color: #f3f4f6; /* Header background color */
        }

        .table-data td {
            border-top: 1px solid #e5e7eb; /* Top border for rows */
        }

        .table-data th {
            border-bottom: 2px solid #e5e7eb; /* Bottom border for headers */
        }

        .print-btn {
            background-color: #007bff; /* Button background color */
            color: #ffffff; /* Button text color */
        }

        .print-btn:hover {
            background-color: #0056b3; /* Button hover color */
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 1rem;
                margin: 0.5rem;
            }

            .print-btn {
                padding: 0.5rem;
                font-size: 14px;
            }
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
                <a href="service.php" class="nav-item nav-link">Companies</a>
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
            <h1 class="display-4 animated slideInDown mb-4">Salary Sleep</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Salary Sleep
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Salary Sleep  -->
    <div class="form-container bg-gray-100 flex justify-center items-center min-h-screen">
        <h1 class="text-3xl font-bold text-center mb-8">Employee Payslip</h1>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="year">Year and Month:</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="year-month" type="text" placeholder="Select Year and Month">
            </div>
            <!-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="month">Month:</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="month" type="date" placeholder="Select Date">
            </div> -->
            <div class="mb-4 text-center">
                <button type="button" onclick="window.print()" class="print-btn p-3 text-lg font-bold rounded">Download Salary Slip</button>
            </div>
            <table class="w-full border-collapse border border-gray-200 mt-4">
                <thead class="table-header">
                    <tr>
                        <th class="py-2 px-4 text-left text-xl">GODJN SOLUTIONS PVT LTD</th>
                    </tr>
                </thead>
                <tbody class="table-data">
                    <tr>
                        <td class="py-2 px-4">B16, Gandharva, Shree Nagar, Thane (400604), Maharashtra, India</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4" colspan="2">Payslip for the Month of November, 2023</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="px-4 py-2 font-bold">Employee Pay Summary</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Employee Name:</td>
                        <td class="py-2 px-4">Vishal</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Designation</td>
                        <td class="py-2 px-4" colspan="4">Doctor Video FPU</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Date of Joining</td>
                        <td class="py-2 px-4" colspan="3">₹ 35000</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Pay Period</td>
                        <td class="py-2 px-4">November,2023</td>
                        <td class="py-2 px-4">Paid Days:</td>
                        <td class="py-2 px-4">27</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Pay Date:</td>
                        <td class="py-2 px-4">21-Nov-2023</td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">PF A/C Number:</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="px-4 py-2">UAN Number:</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 bg-gray-200">EARNINGS</td>
                        <td class="px-4 py-2 bg-gray-200">AMOUNT</td>
                        <td class="px-4 py-2 bg-gray-200"></td>
                        <td class="px-4 py-2 bg-gray-200">DEDUCTION</td>
                        <td class="px-4 py-2 bg-gray-200">AMOUNT</td>
                        <td class="px-4 py-2 bg-gray-200">YTD</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Earning 1</td>
                        <td class="py-2 px-4">₹ 31068.49</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">Deduction1</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">Deduction 2</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">Deduction 3</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Gross Earnings</td>
                        <td class="py-2 px-4">₹ 31068.49</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">Total Deductions</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 bg-gray-200">REIMBURSEMENTS</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Total Reimbursements</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Audio Calls</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Video Calls</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Special Fraud Efforts</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Total Incentives</td>
                        <td class="py-2 px-4">₹ 0.00</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="px-4 py-2 font-bold">NET PAY</td>
                        <td class="py-2 px-4 font-bold">AMOUNT</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Gross Earnings</td>
                        <td class="py-2 px-4">₹</td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Total Deductions</td>
                        <td class="py-2 px-4">₹</td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Total Reimbursements</td>
                        <td class="py-2 px-4">₹</td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Total Net Payable</td>
                        <td class="py-2 px-4">₹ 31068.49</td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr>
                       <td class="px-4 py-2">Total Net Payable ₹0.00 (Amount In Words)</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Total Net Payable = Gross Earnings - Total Deductions + Total Reimbursements</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </form>
    </div>
    <!-- Testimonial End -->

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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#year-month", {
            plugins: [new monthSelectPlugin({
                shorthand: true, // Shorthand month names
                dateFormat: "Y-m", // Format of selected date
                altInput: true, // Display a readable date
                altFormat: "F Y" // Format of displayed date
            })],
            allowInput: true // Allow manual input
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>
