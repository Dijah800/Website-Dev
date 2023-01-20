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
        List of All records
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="container">
            <a href="logout.php" class="cta__btn">Logout</a>
            <div class="recordsContainer">
                <div id="recordsTable"></div>
            </div>
            

    </div>

        <footer>
            <hr>
            &copy; 2022
        </footer>
        <script>
            $(document).ready(function(){
                load_list_data();
                function load_list_data()
                {
                    $.ajax({
                        url:"fetchCSV.php",
                        method:"POST",
                        dataType:"json",
                        success: function(data)
                        {
                            $('#recordsTable').html(data.list___details);
                            // alert(data.list___details)
                        }
                    });
                }
            });
        </script>
        <script>
            function getTrId(row){
                // alert(row);
                window.location.href = `display.php?id=${row}`;
            }
        </script>
</body>
</html>