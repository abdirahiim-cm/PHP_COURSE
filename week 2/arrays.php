<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php


    // Prints natural numbers from 1 to 15.

    echo "<h3>Example of multiple using while loop </h3>";
     $i =1;
     while($i <= 15){
        echo"$i,";
        $i++;}


     $count = 1;
    while ($count<=12)
        {
            echo "$count times 12 is ".$count * 12 . "<br>";
            ++$count;
        }
        echo "<br>";


        
    echo "<h3>Example of Do While loop using factorial number</h3>";
    $result = 1;
    $n = 5;
    do {
        $result *=$n;
        echo "the valua of n is: $n <br>";
        $n--;
    } while ($n >0);
    echo "the factorial of 5 is:$result <br>" ;



    echo "<h3>Example of nested loop to print multiplication table</h3>";
    for ($i= 1; $i<=3;$i++) //row loop
        for ($j=1;$j<=5;$j++) //column loop
        echo("$i*$j=".($i * $j) . "<br>");



        //Example of numeric index array 
        //creating array using array function
        $collection = array();
        
        //initialize
        $collection[0]=2;
        $collection[1]="Abdirihin";
        $collection[2]=99.9;
        

        //display the array using var_dum function 
        foreach ($collection as $list){
            echo "$list <br>";// return only value
        }
        echo "$collection[0] <br>";//return only value
        var_dump($collection);//return all array (size,type,value)

        //create array and initialization in one time 
        $number = array (2,"Abdirihin",909.1);
        echo "<br>";
        var_dump($number);


        //Example of associative array to store information about a person 
        $info = array(
            "id"=>"101",
            "name"=>"Abdirihin abdiqadir ",
            "age"=>21,
            "address"=>"hodan District",
            "status"=>"single",
            "weight"=>170

        );
        //Displaying the information store in the associative array 
        echo "<prev>";
        echo "Information about the person: <br>";
        print_r($info);
        var_dump($info);
        echo "<prev>";




    ?>

</body>
</html>
