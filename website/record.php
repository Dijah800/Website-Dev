<?php session_start();
 if(!isset($_SESSION['loggedin'])) header("Location: session.php");
 if($_SESSION['loggedin']===FALSE) header("Location: session.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>
        Add new record
    </title>
</head>
<body>

    <div class="container">
            <div class="record-form">
                <h1> Add New Record </h1>
                <form action="submit.php" method="post" class="" id="">
                    <input type="text" id="title" name="title" required placeholder="Title">
                    <input type="text" id="author" name="author" required placeholder="Author">
                    <input type="text" id="Journal" name="journal" required placeholder="Journal">
                    <input type="text" id="Year" name="year" required placeholder="year"> 
                    <input type="text" id="DOI" name="doi" required placeholder="digital object identifier ">
                    <input type="text" id="School" name="school" required placeholder="School Name">
                    <input type="submit">
                </form>
             </div>
                  
</div>

        <footer>
            <hr>
            &copy; 2022
        </footer>
</body>
</html>