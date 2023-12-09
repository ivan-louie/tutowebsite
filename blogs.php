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
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Discussions</a></li>
            </ul>
        </nav>
        <a class="cta" href="register.php"><button>Logout</button></a>
    </header>

    <div class="bgContainer2">
        <div class="row">
            <div class="column.middle" id="blog">
                <div class="textBox">
                    <h1 class="welcome">Welcome to Blogs Page</h1><br>
                    <p class="welcomePar">in this page you can read Blogs from the devs and leave a comment on them, learn as you read their blog posts and enjoy the works of others on your own time.<br><br>
                        "The Art of Solo Learning: How to Thrive While Going Solo"

                        Explore the advantages and challenges of learning alone, along with practical tips for staying motivated and on track.<br><br>
                        "Speed Learning 101: Techniques to Accelerate Your Learning Curve"

                        Dive into the science of fast learning and provide readers with actionable strategies and exercises to expedite their learning process.<br><br>
                        "The Stress-Learning Connection: How to Reduce Stress for Better Learning"

                        Discuss the impact of stress on learning and offer proven stress management techniques that can enhance the learning experience.<br><br>
                        "Mindful Learning: Cultivating a Stress-Free Approach to Mastery"

                        Explore the concept of mindfulness in learning and share mindfulness exercises that can help learners reduce stress and improve focus.<br><br>
                        "Setting SMART Goals for Effective Solo Learning"

                        Guide readers on how to set Specific, Measurable, Achievable, Relevant, and Time-bound (SMART) goals to enhance their solo learning journey.<br><br>
                        "The Role of Technology in Fast and Effective Learning"

                        Examine various digital tools, apps, and online platforms that can aid in rapid skill acquisition and reduce the stress of traditional learning methods.<br><br>
                        "Mastering the Art of Self-Discipline in Solo Learning"

                        Offer practical advice and techniques for building self-discipline, a crucial skill for those learning on their own.<br><br>
                        "Overcoming Procrastination: Your Guide to Stress-Free Productivity"

                        Share strategies for beating procrastination, a common source of stress for learners, to increase productivity and learning outcomes.<br><br>
                        "Learning Burnout: Signs, Prevention, and Recovery"

                        Educate readers on the signs of learning burnout and provide tips for prevention and recovery to maintain a healthy balance in their learning endeavors.<br><br>
                        "Success Stories: Inspiring Solo Learners Who Achieved Mastery"

                        Showcase real-life stories of individuals who pursued solo learning journeys, overcame challenges, and achieved remarkable success in their chosen fields.
                    </p>
                </div>
            </div>
        </div>

    <div id="blogsIntroCont">
        <div class="introCards">

        </div>
    </div>

    <section class="cards2">
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                    Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__image-container">
                <img src="images/Illustrator/TUTOLOGO.png"
                    alt="" />
            </div>
            <div class="card__content">
                <p class="card__title text--medium">
                Here's the Title of an Awesome Blog
                </p>
                <div class="card__info">
                    <p class="text--medium">Title of blog</p>
                    <p class="card__price text--medium">By: user1</p>
                </div>
            </div>
        </div>
    </section>

    <img class="banner" src="images/Illustrator/TUTObannerB.png" alt="">
    <footer></footer>
    <script src="script.js" defer></script>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>
</body>

</html> 