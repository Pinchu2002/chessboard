<!DOCTYPE html>
<html lang="en">
<body bgcolor = "black">
    
    <center>
    <font color = "red"><h1>Chess Board Made By Pinchu</h1></font>
        <table border = "5px">
        <?php

            $rows = $_POST['rows'];
            $cols = $_POST['cols'];

            for($i = 0; $i < $cols; $i++){
                echo "<tr>";
                for($j = 0; $j < $rows; $j++){
                    $total = $i + $j;
                    if($total % 2 == 0){
                        echo 
                        "<td height = 60px width = 60px bgcolor = red></td>";
                    }
                    else{
                        echo
                        "<td height = 60px width = 60px bgcolor = white></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
        </table>
    </center>
</body>
</html>
