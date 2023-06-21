<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit & delete</title>
</head>

<body>
    <table>
        <?php
        $arr = require "config/data.php";
        foreach ($arr as $key => $value) {
            echo "<tr>
                    <td style=\"border:1px solid black;\">$key</td>
                    <td style=\"border:1px solid black;\">$value</td>
                    <td style=\"border:1px solid black;\"><a href = '/edit.php?key=$key'>edit</a></td>
                    <td style=\"border:1px solid black;\"><a href = '/delete.php?key=$key'>delete</a></td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>