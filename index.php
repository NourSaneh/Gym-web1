<?php
$conn = new mysqli("sql212.infinityfree.com", "if0_36597116", "XCffIecfyceVN", "if0_36597116_trainer");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM trainer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $trainer = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $trainer = [];
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="project.css">


</head>

<body>
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="#">Fitness</a>
            </div>
            <ul class="nav-links">
                <li><a href="#blogs">Blogs</a></li>
                <li><a href="#schedule">Activities</a></li>
                <li><a href="community.html">Community</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section class="home">
        <div class="background-text">
            <h2>Get Fit</h2>
            <br></br>
            <p>Join FitHub today and unleash the fitness beast within you! Track, set goals, and conquer your health
                journey like a champ.</p>
            <br></br>
            <button class="join" onclick="Join()" id="startnow">Start Now</button>
        </div>
    </section>


    <!-- About Section -->
    <div class="container1">
        <div class="content1">
            <div class="image1">
                <img src="images/gym.jpeg" alt="Gym Image">
            </div>
            <div class="text">
                <h1>About FitHub</h1>
                <p>Welcome to FitHub, where fitness dreams become <br>reality! We're here to empower you on your
                    health<br> journey with cutting-edge tools and unwavering support.</p>
                <p>Our mission is simple: to transform ordinary individuals<br>into fitness superheroes. Join us and
                    let's conquer the <br>world, one workout at a time!</p>
                <p>At FitHub, we believe in sweat, smiles, and success. Get <br>ready to sweat it out, laugh it off, and
                    achieve greatness <br>with us!</p>
            </div>
        </div>
    </div>

    <!-- About Us Secion End -->


    <!-- Latest Buzz Section -->
    <div class="container2" style="background-color: white;">
        <div class="content2">
            <h2>Latest Buzz</h2>
            <div class="row">
                <?php $count = 1;
                foreach ($trainer as $train) : ?>
                    <div class="column">
                        <img src="images/<?= htmlspecialchars($train['img']) ?>" alt="" class="responsive">
                        <h3> <?= htmlspecialchars($train['name']) ?> </h3>
                        <p class="date"> <?= htmlspecialchars($train['date']) ?> </p>
                        <p class="column-info"> <?= htmlspecialchars($train['details']) ?> </p>
                        <button class="button" id="button<?= $count ?>" onclick="button()">View</button>
                    </div>
                <?php $count++;
                endforeach ?>
            </div>

        </div>

        <div class="container-fluid programe position-relative px-5 mt-5" style="background-color: black;">
            <div class="row g-5 gb-5">
                <div class="col-lg-4 col-md-6" style="margin-top: 50px;">
                    <div class="bg-light rounded text-center p-5" style="padding-top: 100px;">
                        <i class="flaticon-six-pack display-1 text-primary"></i>
                        <h3 class="text-uppercase my-4">Body Building</h3>
                        <p>
                            Bodybuilding is not just about lifting weights; it's a lifestyle dedicated to enhancing
                            muscle
                            mass, strength, and overall physical aesthetics. By combining rigorous training regimes with
                            precise nutrition and adequate rest, individuals can transform their physiques and achieve
                            peak
                            performance. Whether you're a seasoned athlete or a beginner, bodybuilding offers a path to
                            greater health and confidence.</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-top: 50px;">
                    <div class="bg-light rounded text-center p-5">
                        <i class="flaticon-barbell display-1 text-primary"></i>
                        <h3 class="text-uppercase my-4">Weight Lifting</h3>
                        <p>Weight lifting is a powerful fitness activity focused on building muscle strength and
                            endurance
                            through resistance training. By consistently challenging the body with various exercises and
                            weights, individuals can improve their physical health, boost metabolism. Whether for sport,
                            health, or personal growth, weight lifting provides numerous benefits for people at all
                            fitness
                            levels.</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-top: 50px;">
                    <div class="bg-light rounded text-center p-5">
                        <i class="flaticon-bodybuilding display-1 text-primary"></i>
                        <h3 class="text-uppercase my-4">Muscle Building</h3>
                        <p>Muscle building is a focused fitness journey aimed at increasing muscle mass and strength
                            through
                            targeted exercises and proper nutrition. By engaging in resistance training and ensuring a
                            balanced diet rich in protein, individuals can effectively enhance their muscle size and
                            definition. This process not only improves physical appearance but also boosts overall
                            health
                            and metabolic rate.</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light my-4">Why You Should Choose Us!</h1>
                </div>
            </div>
        </div>



    </div>
    <div id="blogs">
        <!-- SCHEDULE -->
        <section class="schedule section" id="schedule">
            <div class="container">
                <div class="t-row">

                    <div class="col-lg-12 col-12 text-center">
                        <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                        <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                    </div>

                    <div class="col-lg-12 py-5 col-md-12 col-12">
                        <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">
                            <thead class="thead-light">
                                <th><i class="fa fa-calendar"></i></th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><small>7:00 am</small></td>
                                    <td>
                                        <strong>Cardio</strong>
                                        <span>7:00 am - 9:00 am</span>
                                    </td>
                                    <td>
                                        <strong>Power Fitness</strong>
                                        <span>7:00 am - 9:00 am</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Yoga Section</strong>
                                        <span>7:00 am - 9:00 am</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><small>9:00 am</small></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Boxing</strong>
                                        <span>8:00 am - 9:00 am</span>
                                    </td>
                                    <td>
                                        <strong>Areobic</strong>
                                        <span>8:00 am - 9:00 am</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Cardio</strong>
                                        <span>8:00 am - 9:00 am</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><small>11:00 am</small></td>
                                    <td></td>
                                    <td>
                                        <strong>Boxing</strong>
                                        <span>11:00 am - 2:00 pm</span>
                                    </td>
                                    <td>
                                        <strong>Areobic</strong>
                                        <span>11:30 am - 3:30 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Body work</strong>
                                        <span>11:50 am - 5:20 pm</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><small>2:00 pm</small></td>
                                    <td>
                                        <strong>Boxing</strong>
                                        <span>2:00 pm - 4:00 pm</span>
                                    </td>
                                    <td>
                                        <strong>Power lifting</strong>
                                        <span>3:00 pm - 6:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Cardio</strong>
                                        <span>6:00 pm - 9:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Crossfit</strong>
                                        <span>5:00 pm - 7:00 pm</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq  Section -->

        <div class="faq-container">
            <h1>FitHub FAQ</h1>
            <div class="accordion">
                <button class="accordion-button">
                    <span>What's FitHub all about?</span>
                    <i class="arrow"></i>
                </button>
                <div class="accordion-content">
                    <p>FitHub is your ultimate fitness companion, offering tracking, goal setting, and motivation
                        tools
                        for
                        all levels of fitness enthusiasts.</p>
                </div>
            </div>
            <div class="accordion">
                <button class="accordion-button">
                    <span>How can I get started?</span>
                    <i class="arrow"></i>
                </button>
                <div class="accordion-content">
                    <p>Simply dive into our Activities/Workouts section to log your fitness journey, or explore
                        Nutrition
                        for meal planning.</p>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    <span>Why join the FitHub community?</span>
                    <i class="arrow"></i>
                </button>
                <div class="accordion-content">
                    <p>Connect with like-minded fitness fanatics, share tips, and stay inspired on your health
                        quest.
                    </p>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    <span>How can i track my progress?</span>
                    <i class="arrow"></i>
                </button>
                <div class="accordion-content">
                    <p>Head to Goals to set targets and monitor your achievements, or check out Resources for
                        workout
                        plans
                        and recipes.</p>
                </div>
            </div>

            <div class="accordion">
                <button class="accordion-button">
                    <span>Who's behind FitHub?</span>
                    <i class="arrow"></i>
                </button>
                <div class="accordion-content">
                    <p>Learn more about our passionate team, mission, and how to reach out in the About Us section.
                    </p>
                </div>
            </div>

        </div>

        <!-- Contact  Section -->

        <div id="contact" class="contact-body" href=>
            <div class="contact-row">
                <h1>contact us</h1>
            </div>
            <div class="contact-row">
                <h4 style="text-align:center">We'd love to hear from you!</h4>
            </div>
            <div class="row input-container">
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Name</label>
                    </div>
                </div>
                <div>
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Email</label>
                    </div>
                </div>
                <div>
                    <div class="styled-input wide">
                        <textarea required></textarea>
                        <label>Message</label>
                    </div>
                </div>
                <div class="btn-container" style="padding-bottom: 30px;">
                    <div class="btn-lrg submit-btn">Join The Team</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  Section -->
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#blogs">Blogs</a></li>
                <li class="list-inline-item"><a href="#schedule">Activities</a></li>
                <li class="list-inline-item"><a href="#community.html">Community</a></li>
                <li class="list-inline-item"><a href="#contact">Contact</a></li>
            </ul>
            <p class="copyright">Fitness © 2024</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="project.js"></script>

</body>

</html>
