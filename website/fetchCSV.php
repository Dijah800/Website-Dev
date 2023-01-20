<?php
    $output = "<table id='records'>";
    $row = 1;
    if (($handle = fopen("file.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            // echo "<p> $num fields in line $row: <br /></p>\n";
            $output .= '<tr onclick="getTrId('.$row.')">';
            for ($c=0; $c < $num; $c++) {
                // echo $data[$c] . "<br />\n";
                if($row == 1){
                    $output .= "<th>". $data[$c] ."</th>";
                }else{
                    $output .= "<td>". $data[$c] ."</td>";
                }
            } 
            $output .= "</tr>";
            $row++;
        }
        fclose($handle);
    }
    $output .= "</table>";
    $data = array(
        'list___details'		=>	$output,
    );	

echo json_encode($data);
?>
        

