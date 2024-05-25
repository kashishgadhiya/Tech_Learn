<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width
    , initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tech Learn</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


</head>

<body>


    <?php
    // include('userdata.php');
    ?>
    <nav class="navbar navbar-expand-sm navbar-light bg-light pl-5 fixed-top navbar-height">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="28"></a>
        <span class="navbar-text navbar-header">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="course.php" class="nav-link">Courses</a>
                </li>
                <li class="nav-item custom-nav-item"><a href="" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>


    <div class="hero">
        <div class="head-hero">

            All the skills you need in one place.

            We’ll get you to your goals
            Go from beginner to advanced in the topic of your choice.
            <div class="hero-btn">



                <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">
                    Get Started
                </a>

            </div>
        </div>
        <div class="bg-img">
            <img src="images/bg2.jpg" alt="">
        </div>

    </div>
    <div class="line">
        <div class="course-line same"><span class="material-symbols-outlined">
                menu_book
            </span> 100+ Online Courses</div>
        <div class="instructor-lin0 same"><span class="material-symbols-outlined">
                diversity_3
            </span> Expert Instructors</div>
        <div class="access-line same"><span class="material-symbols-outlined">
                keyboard
            </span>Lifetime Access</div>
        <div class="money-line same"><span class="material-symbols-outlined">
                currency_rupee
            </span>Money Back Guarantee*</div>
    </div>

    <!-- cards -->
    <div class="cards">
        <h2 class="card-h1">All Courses</h2>
        <div class="card-item">
            <!-- card-1 -->
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="images/angular.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Angular - The Complete Guide (2024 Edition)</h5>
                    <p class="card-text">Master Angular (formerly "Angular 2") and build awesome, reactive web apps with the successor of Angular.js</p>
                    <div class="card-pricediv">

                        <p class="card-span-p">price &#8377;<span class="card-span">1000</span> <span class="card-span-bold">&#8377;599 </span></p>
                        <a href="#" class="btn btn-primary card-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <!-- card-2 -->
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="images/devops.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">The Ultimate DevOps Bootcamp </h5>
                    <p class="card-text">Begin DevOps Career As an Absolute Beginner | AWS, Linux, Scripts, Jenkins, Ansible, GitOps, Docker,Kubernetes.</p>
                    <div class="card-pricediv">

                        <p class="card-span-p">price &#8377;<span class="card-span">800</span> <span class="card-span-bold">&#8377;649 </span></p>
                        <a href="#" class="btn btn-primary card-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <!-- card-3 -->
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="images/php.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">PHP From Scratch 2024 | Beginner To Advanced</h5>
                    <p class="card-text">Learn PHP fundamentals then build a job listing website from the ground up, using a Laravel-like infrastructure</p>
                    <div class="card-pricediv">

                        <p class="card-span-p">price &#8377;<span class="card-span">2000</span> <span class="card-span-bold">&#8377;999 </span></p>
                        <a href="#" class="btn btn-primary card-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <!-- card-4 -->
            <div class="card card-hide" style="width: 22rem;">
                <img class="card-img-top" src="images/js.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">The Complete JavaScript Course 2024: From Zero to Expert!</h5>
                    <p class="card-text">The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!
                    </p>
                    <div class="card-pricediv">

                        <p class="card-span-p">price &#8377;<span class="card-span">2000</span> <span class="card-span-bold">&#8377;599 </span></p>
                        <a href="#" class="btn btn-primary card-btn">Enroll</a>
                    </div>

                </div>
            </div>
            <!-- card-5 -->
            <div class="card card-hide" style="width: 22rem;">
                <img class="card-img-top" src="images/react.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">React - The Complete Guide 2024 (incl. React Router & Redux)</h5>
                    <p class="card-text">Dive in and learn React.js from scratch! Learn React, Hooks, Redux, React Router, Next.js, Best Practices and way more!</p>
                    <div class="card-pricediv">

                        <p class="card-span-p">price &#8377;<span class="card-span">3000</span> <span class="card-span-bold">&#8377;999 </span></p>
                        <a href="#" class="btn btn-primary card-btn">Enroll</a>
                    </div>

                </div>
            </div>
            <!-- card-6 -->
            <div class="card card-hide" style="width: 22rem;">
                <img class="card-img-top" src="images/java.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Learn JAVA Programming - Beginner to Master</h5>
                    <p class="card-text">Deep Dive in Core Java programming -Standard Edition. A Practical approach to learn Java. Become a Java Expert</p>
                    <div class="card-pricediv">

                        <p class="card-span-p">price &#8377;<span class="card-span">1000</span> <span class="card-span-bold">&#8377;849 </span></p>
                        <a href="#" class="btn btn-primary card-btn">Enroll</a>
                    </div>

                </div>
            </div>

        </div>
        <div class="card-btn-div">

            <a href="course.php" type="button" class="btn btn-danger card-course-btn">View All Course</a>
        </div>

    </div>

    <!-- FORM -->
    <?php
    include('./contact.php');
    ?>



    <!-- footer -->

    <div class="footer-div-copy">
        Copyright &#169; 2024</a>
        </span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>