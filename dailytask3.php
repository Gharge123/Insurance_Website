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
        .container123 {
            max-width: 600px;
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 5px auto;
            padding: auto;
        }
        .container123 h2 {
            text-align: center;
            color: #333;
        }
        .task-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .task {
            background-color: #f0f0f0;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }
        .task:hover {
            background-color: #e8e8e8;
        }
        .task-title {
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
        }
        .task-title a {
            text-decoration: none;
            color: inherit;
        }
        .task-description {
            margin: 5px 0 0 0;
            color: #666;
        }
        .task-actions {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .task-action {
            margin-left: 10px;
            cursor: pointer;
            color: #007bff;
            transition: color 0.3s;
        }
        .task-action:hover {
            color: #0056b3;
        }
        .add-task-form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .add-task-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 70%;
            margin-right: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .add-task-button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .add-task-button:hover {
            background-color: #0056b3;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
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
            <h1 class="display-4 animated slideInDown mb-4">Daily Task</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daily Task</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Task Add In The Docuement -->
    <div class="container123">
        <h2>Daily Tasks</h2>
        <ul class="task-list" id="taskList">
            <li class="task">
                <div class="task-actions">
                    <div>
                        <span class="task-title"><a href="Workdone1111.php"><b>Task 1</b></a></span>
                        <p class="task-description">CCTNS Video Calls</p>
                    </div>
                    <div>
                        <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                    </div>
                </div>
            </li>
            <li class="task">
                <div class="task-actions">
                    <div>
                        <span class="task-title task-completed"><a href="Workdone1111.php"><b>Task 2</b></a></span>
                        <p class="task-description">OD Case</p>
                    </div>
                    <div>
                        <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                    </div>
                </div>
            </li>
            <li class="task">
                <div class="task-actions">
                    <div>
                        <span class="task-title"><a href="Workdone1111.php">Task 3</a></span>
                        <p class="task-description">Theft</p>
                    </div>
                    <div>
                        <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                    </div>
                </div>
            </li>
            <li class="task">
                <div class="task-actions">
                    <div>
                        <span class="task-title"><a href="Workdone1111.php">Task 4</a></span>
                        <p class="task-description">Balic</p>
                    </div>
                    <div>
                        <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                    </div>
                </div>
            </li>
            <li class="task">
                <div class="task-actions">
                    <div>
                        <span class="task-title"><a href="Workdone1111.php">Task 5</a></span>
                        <p class="task-description">Health</p>
                    </div>
                    <div>
                        <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                    </div>
                </div>
            </li>
            <li class="task">
                <div class="task-actions">
                    <div>
                        <span class="task-title"><a href="Workdone1111.php">Task 6</a></span>
                        <p class="task-description">FIR</p>
                    </div>
                    <div>
                        <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                    </div>
                </div>
            </li>
        </ul>
        <form class="add-task-form" onsubmit="addTask(event)">
            <input type="text" class="add-task-input" placeholder="Add a new task...">
            <button type="submit" class="add-task-button">Add Task</button>
        </form>
    </div>

    <!-- Features Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-06-primary.png" alt="" />
                                    <h5 class="mb-0">Easy Process</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-03-primary.png" alt="" />
                                    <h5 class="mb-0">Fast Delivery</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-04-primary.png" alt="" />
                                    <h5 class="mb-0">Policy Controlling</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="img/icon/icon-07-primary.png" alt="" />
                                    <h5 class="mb-0">Money Saving</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" alt="" style="object-fit: cover" />
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class=" godjn-section text-white mb-4">
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
    <script>
        function addTask(event) {
            event.preventDefault();
            const input = document.querySelector('.add-task-input');
            const taskText = input.value.trim();

            if (taskText !== '') {
                const taskList = document.getElementById('taskList');
                const newTask = document.createElement('li');
                newTask.className = 'task';
                newTask.innerHTML = `
                    <div class="task-actions">
                        <div>
                            <span class="task-title"><a href="Workdone1111.php">${taskText}</a></span>
                            <p class="task-description">New task description</p>
                        </div>
                        <div>
                            <span class="task-action" onclick="editTask(this)">Edit</span> | <span class="task-action" onclick="deleteTask(this)">Delete</span>
                        </div>
                    </div>
                `;
                taskList.appendChild(newTask);
                input.value = '';
            }
        }

        function deleteTask(element) {
            const task = element.closest('.task');
            task.remove();
        }

        function editTask(element) {
            // Implement your edit functionality here
            alert('Edit functionality not implemented.');
        }
    </script>


</body>

</html>
