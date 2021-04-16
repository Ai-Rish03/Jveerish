<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        if(isset ($_POST['val1'], $_POST['val2'])){
            $val1=$_POST['val1'];
            $val2=$_POST['val2'];

            if(is_numeric($val1 & $val2)){

                switch ($_POST['calc']){
                    case "add";
                    echo "Calculate Result: " ,$val1 + $val2;
                    break;
                    case "sub";
                    echo "Calculate Result: " ,$val1 - $val2;
                    break;
                    case "mul";
                    echo "Calculate Result: " ,$val1 * $val2;
                    break;
                    case "div";
                    echo "Calculate Result: " ,$val1 / $val2;
                    break;

                    default;
                        echo "Calculation result: $result";

            }
        }
        else{ 
            echo "Invalid entry - please retry"; }

        }
    ?>
</body>
</html>