<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <head>
        <h1>DESIGNED BY GROUP 16</h1>
        <h2>Chessboard</h2>
    </head>
    <table>

    <?php
    for($rows = 1; $rows <= 8; $rows++) {
        echo "<tr>";
            for($columns = 1; $columns <= 8; $columns++) {
                if(($rows + $columns) %2 ==0){
                    echo "<td class = 'black'></td>";
                } else{
                    echo "<td></td>";
                }
            }
        echo "</tr>";
    }
    ?>


    </table>
</body>
</html>