<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_operations.com</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <center>
        <div class="container">
            <h4><b>
                    <?php
                    $countries = array("India", "South Africa", "Portugal", "India", "Chili", "Australia");
                    print_r($countries);
                    ?>
                </b></h4>
        </div>
        <div class="heading">
            <h4><i>Here we will see the following array operations and there working</i></h4>
        </div>
    </center>
    <br>
    <form action="" method="post">
        <input type="radio" name="operation" id="display" value="display"> Display the array <br>
        <input type="radio" name="operation" id="sort" value="sort"> Sort the array <br>
        <input type="radio" name="operation" id="duplicate" value="duplicate"> Display the array without duplicates <br>
        <input type="radio" name="operation" id="pop" value="pop"> Remove the last element and display <br>
        <input type="radio" name="operation" id="reverse" value="reverse"> Display the array in reverse order <br>
        <input type="radio" name="operation" id="insert" value="insert"> Element Insert <input type="text" name="element" id="element"> at position <input type="text" name="position" id="position"> <br>
        <input type="radio" name="operation" id="find" value="find"> Array Search: <br>
        <input type="text" name="search" id="search"> <br>
<br><br>
        <center>
            <input type="submit" value="RESULT" class="btn">
        </center>
    </form>
    <br>
    <center>
        <div class="heading">
            <h4><i>Here we will display the results of the following array operation</i></h4>
        </div>
        <?php
        $countries = array("India", "South Africa", "Portugal", "India", "Chili", "Australia");
            # Writing the php script to perform the array operations 
            if($_POST){
                $operation = $_POST['operation'];
                switch($operation){
                    case "display":
                        foreach($countries as $value)
                        echo "<br>".$value;
                        break;
                    case "sort":
                        sort($countries);
                        foreach($countries as $value)
                        echo "<br>".$value;
                        break;
                    case "duplicate":
                        $uniq = array_unique($countries);
                        foreach($uniq as $value)
                        echo "<br>".$value;
                        break;
                    case "pop":
                        array_pop($countries);
                        foreach($countries as $value)
                        echo "<br>".$value;
                        break;
                    case "reverse":
                        $reverse = array_reverse($countries);
                        foreach($reverse as $value)
                        echo "<br>".$value;
                        break;
                    case "insert":
                        array_splice($countries,$_POST['position'],0,$_POST['element']);
                        foreach($countries as $value)
                        echo "<br>".$value;
                        break;
                    case "find":
                        if(in_array($_POST['search'],$countries)){
                            echo "Found element ". $_POST['search'] ." at position ". array_search($_POST['search'],$countries);
                        }
                        else{
                            echo "Element not found (Occured 404 not found error) !";
                        }
                        foreach($countries as $value)
                        echo "<br>".$value;
                        break;
                }
            }

        ?>
    </center>
</body>

</html>