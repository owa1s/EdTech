<!-- courses_offered.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses Offered</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; }
        h1 { color: #333; }
        .course {
            background: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .course img {
            width: 120px;
            height: auto;
            border-radius: 8px;
        }
        .course-description {
            max-width: 600px;
        }
        a { text-decoration: none; color: blue; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Courses Offered</h1>

    <div class="course">
        <img src="images/web_dev.jpg" alt="Web Development">
        <div class="course-description">
            <h2>Web Development</h2>
            <p>Learn how to build modern, responsive websites using HTML, CSS, and JavaScript. Ideal for beginners starting their journey in tech.</p>
        </div>
    </div>

    <div class="course">
        <img src="images/php.jpg" alt="PHP Programming">
        <div class="course-description">
            <h2>PHP Programming</h2>
            <p>Dive into server-side programming using PHP. You'll learn how to connect to databases, handle form data, and build dynamic websites.</p>
        </div>
    </div>

    <div class="course">
        <img src="images/database.jpg" alt="Database Basics">
        <div class="course-description">
            <h2>Database Basics</h2>
            <p>Understand how databases work using MySQL. This course covers data models, SQL queries, and best practices in storing information securely.</p>
        </div>
    </div>

    <div class="course">
        <img src="images/data_structures.jpg" alt="Data Structures">
        <div class="course-description">
            <h2>Data Structures</h2>
            <p>Explore fundamental data structures like arrays, linked lists, stacks, and queues. This course strengthens your problem-solving and coding skills.</p>
        </div>
    </div>

    <p><a href="contact_us.php">Contact Us</a> to register your interest.</p>
</body>
</html>
