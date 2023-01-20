<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <a href="/record.php" class="cta__btn">Go back</a>
        <?php
            $id = $_GET['id'];
            $row = 1;
            if (($handle = fopen("file.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    for ($c=0; $c < $num; $c++) {
                        if($row == $id){
                            if ($c == 0) {
                                echo "<div class='display-content'><h3>Title : </h3><p>" . $data[$c] . "</p></div><hr>";
                            }elseif ($c == 1) {
                                echo "<div class='display-content'><h3>Author : </h3><p>" . $data[$c] . "</p></div><hr>";
                            }elseif ($c == 2) {
                                echo "<div class='display-content'><h3>Journal : </h3><p>" . $data[$c] . "</p></div><hr>";
                            }elseif ($c == 3) {
                                echo "<div class='display-content'><h3>Year : </h3><p>" . $data[$c] . "</p></div><hr>";
                            }elseif ($c == 4) {
                                echo "<div class='display-content'><h3>DOI : </h3><p>" . $data[$c] . "</p></div><hr>";
                            }elseif ($c == 5) {
                                echo "<div class='display-content'><h3>School : </h3><p>" . $data[$c] . "</p></div><hr>";
                            }
                        }
                    } 
                    $row++;
                }
                fclose($handle);
            }
        ?>
    </div>
    
</body>
</html>


