<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Bruhe</title>
</head>
<body>   
    <table class="box">
        <?php
            for ($count = 1; $count <= 10; $count++) {
                echo "<tr>";
                for ($count2 = 1; $count2 <= $count; $count2++) {
                    echo "<td></td>";    
                }
                for ($count3 = 0; $count3 <= (10 - $count); $count3++){
                    echo "<th></th>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>                                                                                                                                                                                          