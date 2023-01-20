<?php 
    $title = $_POST["title"]; 
    $author = $_POST["author"]; 
    $journal = $_POST["journal"]; 
    $year = $_POST["year"]; 
    $doi = $_POST["doi"]; 
    $school = $_POST["school"];

    echo $title . $author . $journal . $year . $doi . $school;

    $list = array (array($title, $author ,$journal, $year, $doi, $school));

    $file = fopen("file.csv","a");

    foreach ($list as $line) {
        fputcsv($file, $line);
    }

    fclose($file);
    header("location: list.php");
?>
