  
<?php 
  function long_rand(){
    global $seed;
    // echo "Hello from Long_Rand";

    for($count = 0; $count <= 200; $count++){
        $seed = $seed ^ ($seed << 21);
        $seed = $seed ^ ($seed >> 35);
        $seed = $seed ^ ($seed << 4);

        echo $seed, "<br>";
        $seed = random_int(123440, 167840) + ($count * 370);  
    }

}?>

<?php
    $seed = 123545; 
    long_rand();
?>