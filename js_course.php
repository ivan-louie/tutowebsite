<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Course - TUTO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
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

    <div class="course-container">
        <div class="row">
            <div class="column side"></div>
            <div class="column middle">
                <h1 class="course-title">JavaScript Fundamentals</h1><br>

                <!-- Course Description -->
                <p class="course-description">
                    Learn the basics of JavaScript and enhance your web development skills. This course covers fundamental
                    concepts and practical examples to get you started with JavaScript programming.
                </p>

                <!-- Course Modules -->
                <div class="course-modules">
                    <h2 class="module-title">Course Modules</h2>
                    <ul>
                        <li><strong>Module 1:</strong> Introduction to JavaScript</li>
                        <li><strong>Module 2:</strong> Variables and Data Types</li>
                        <li><strong>Module 3:</strong> Control Flow and Loops</li>
                        <li><strong>Module 4:</strong> Functions and Scope</li>
                        <li><strong>Module 5:</strong> Working with Arrays</li>
                        <li><strong>Module 6:</strong> DOM Manipulation</li>
                    </ul>
                </div>

                <div class="puzzle">
                    <div id="board">
                    </div>
                    <h1>Turns: <span id="turns">0</span></h1>
                </div>
            </div>
            <div class="column side"></div>
        </div>
    </div>

    <!-- Add your footer here -->

    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>
</body>

</html>
