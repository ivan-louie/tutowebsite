<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <a href="Index.php"><img class="logo" src="images/Illustrator/TUTOLOGO.svg" alt="TUTO - LEARN"></a>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Courses</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="#">Discussions</a></li>
            </ul>
        </nav>
        <a class="cta" href="login.php"><button>Logout</button></a>
    </header>

    <div class="bgContainer">
        <div class="row">
            <div class="column side"></div>
            <div class="column middle">
                <h1 class="welcome">Welcome to TUTO</h1><br>
                <p class="welcomePar">your go-to resource for achieving rapid skill mastery while learning alone and
                    reducing stress along the
                    way. In today's fast-paced world, the ability to learn quickly and efficiently is more valuable than
                    ever. Whether you're pursuing a new hobby, advancing your career, or simply expanding your
                    knowledge,
                    this website is designed to guide you on your journey to becoming a fast and stress-free learner.
                </p>
            </div>
            <div class="column side"></div>
        </div>
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    chevron_left
                </button>
                <div class="image-list">
                    <a href="js_course.php">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-1" class="image-item">
                    </a>
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-2" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-3" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-4" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-5" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-6" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-7" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-8" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-9" class="image-item">
                    <img src="images/Illustrator/TUTOLOGO.png" alt="img-10" class="image-item">
                </div>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    chevron_right
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="introContainer">
        <div class="introCards">

        </div>
    </div>

    <section class="cards">
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png" alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Course
                </p>
                <div class="card__info">
                    <p class="text--medium">30 Min</p>
                    <p class="card__price text--medium">Free</p>
                </div>
            </div>
        </div>
    </section>
    <div class="bannerCont">
        <img class="banner" src="images/Illustrator/TUTObannerB.png" alt="">
    </div>
    <footer></footer>
    <script src="script.js" defer></script>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>
</body>

</html>