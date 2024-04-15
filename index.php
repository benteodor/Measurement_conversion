<h3>

<?php


    if (isset($_POST['convert'])) {
    $amount=$_POST['amount'];
    $option=$_POST['Distance'];

    if ($option=='Meter to Centimeter') {
    $result=$amount*100;
    echo $amount." Meter = ".$result." Centimeter";
    }

    if ($option=='Centimeter to Meter') {
    $result=$amount/100;
    echo $amount." Centimeter = ".$result." Meter";
     }
    
     if ($option=='Kilometre to Meter') {
    $result=$amount*1000;
    echo $amount." Kilometre = ".$result." Meter";
    }
    
    if ($option=='Meter to Kilometre') {
    $result=$amount/1000;
    echo $amount." Meter = ".$result." Kilometre";
    }

    if ($option=='Centimeter to Milimetre') {
    $result=$amount*10;
    echo $amount." Centimeter = ".$result." Milimetre";
    }

    if ($option=='Milimetre to Centimeter') {
    $result=$amount/10;
    echo $amount." Milimetre = ".$result." Centimeter";
    }
            
    }else {
    echo "Choose a Conversion Option";
    }
?>

</h3>