<?php
    $a = '';
    $b = '';
    $result = '';

?>

<?php

echo  <<<_END
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        /* input[type="radio"]{
          display: inline-block;
        } */

        label{
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
        }
    </style>
   </head>
   <body>
    <div>
        <form action="" method="post">
            <input type="text" name="a" placeholder="value 1">
            <input type="text" name="b" placeholder="value 2">
            <div>
                <label>Add<input type="radio" name="operator" value="add"></label>   
                <label>Subtract<input type="radio" name="operator" value="subtract"></label>  
                <label>Multiply<input type="radio" name="operator" value="multiply"></label>  
                <label>Divide<input type="radio" name="operator" value="divide"></label>
            </div>     
            <input type="submit" value="Calculate">
        </form>

        <p> $result </p>
    </div>
    
   </body>
   </html>
   _END;

//    echo $result;
?>
<!-- 
<?php
   var_dump($_POST);
?> -->

<?php 
 
    if(count($_POST) != 0){
        if($_POST['a']) $a = $_POST['a'];
      
        if($_POST['b']) $b = $_POST['b'];
        
        if(array_key_exists('operator', $_POST) && $_POST['operator'] == 'add'){
            if(is_numeric($a) && is_numeric($b)){
                $out = $a + $b;
                $result = "Result: $out";
                echo $result;
            }
        }
        elseif(array_key_exists('operator', $_POST) && $_POST['operator'] == 'subtract'){
            if(is_numeric($a) && is_numeric($b)){
                $out = $a - $b;
                $result = "Result: $out";
                echo $result;
            }
        }
        
        elseif(array_key_exists('operator', $_POST) && $_POST['operator'] == 'multiply'){
            if(is_numeric($a) && is_numeric($b)){
                $out = $a * $b;
                $result = "Result: $out";
                echo $result;
            }
        }

        elseif(array_key_exists('operator', $_POST) && $_POST['operator'] == 'divide'){
            if(is_numeric($a) && is_numeric($b)){
                if($b != 0){
                    $out = $a / $b;
                    $result = "Result: $out";
                    echo $result;
                }
                if($b == 0){
                    echo "Undefined. Math Error.";
                }
            }
        }
    }
     
?>