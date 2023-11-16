<!DOCTYPE html>
<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
    <body>
        <p>This is a <?php echo "awesome";?> paragraph!</p>
<?php echo "This is ALSO a paragraph!";?>
<p>
    <?php
$fullname= "Dani Krossing";
echo $fullname;
?>
</p>
<p>
    <?php
    $name = "Gilddy Clinton";
    $test = $name;
    ?>
    <p>Hi! My name is <?php echo $test  ?>, and I am learning PHP</p>
    <?php
    echo "My family do not when ever I visit ";
    ?>
    <?php
    $fruit01 = "apple";
    $fruit02 = "orange";
    ?>
    <p>
    <?php
    $fruits = [
        "apple", // 0
         "Banna", //1
         "Chery"  //2
        ]; 

    array_splice($fruits, 0, 1);

    echo $fruits[1];
    ?>
    </p>
    <p>
        <?php
       /* $tasks = [
            "Laundry" => "Daniel",
            "trash" => "Frida",
           "vacuum"  => "Base",
           "dishes" => "Bella"
        ];*/
        $tasks["dusting"] = "Stieve";
       
        $fruits = [ "apple", "Banna", "Chery"]; 
            $test = ["mango", "Strawberry"];
            
        array_splice($fruits, 2, 0, $test);
        print_r($fruits);
       
      
        ?>
    </p>
</body>
</html>