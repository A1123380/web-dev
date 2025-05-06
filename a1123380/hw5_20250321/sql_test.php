<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-sacle=1.0">
    </head>
    <body>
        <?php
            $link = @mysqli_connect(
                'localhost',
                'root',
                '',
                'school');
            echo "open sql success";

            $sql = "SELECT * FROM info";
            mysqli_set_charset($link, 'utf8'); // utf8
            
            if ( $result = mysqli_query($link, $sql)){
                echo "<table border='1'>";
                while ( $row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row["no"]."</td>".
                         "<td>".$row["name"]."</td>".
                         "<td>".$row["address"]."</td>".
                         "<td>".$row["birthday"]."</td>".
                         "</br>";
                    echo "</tr>";
                }
                echo "<table/>";
            }
            ?>
    </body>
</html>