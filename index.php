<!DOCTYPE html>
<html>
<head>
    <title>Read CSV Data With PHP</title>
</head>
<body>
    <center>
        <h2>Read CSV Data With PHP</h2>

        <?php
            echo '<table border="1">';
            $startRow = 1;
            if (($csvFile = fopen("Test.csv", "r")) !== false) {
                while (($readData = fgetcsv($csvFile, 1000, ",")) !== false) {
                    $columnCount = count($readData);
                    echo '<tr>';

                    $startRow++;
                    for ($cellData = 0; $cellData < $columnCount; $cellData++) {
                        echo '<td>'.$readData[$cellData].'</td>';
                    }

                    echo '</tr>';
                }
                fclose($csvFile);
            }
            echo '</table>';
        ?>

    </center>
</body>
</html>
