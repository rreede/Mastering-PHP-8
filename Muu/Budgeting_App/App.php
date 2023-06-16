
<?php

function getTransactionFiles():array {
    $files = [];


    foreach(scandir(FILES_PATH) as $file) {
        var_dump($file);
    }
}



/* # One way of doing it

$file_to_read = fopen('transaction_files/sample_1.csv', 'r');

if($file_to_read !== FALSE){
    
    echo "<table>\n";
    while(($data = fgetcsv($file_to_read, 100, ',')) !== FALSE){
        echo "<tr>";
        for($i = 0; $i < count($data); $i++) {
            echo "<td>".$data[$i]."</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    fclose($file_to_read);
}

*/

?>