<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Example of function creating
    function writeMsg ( ) {
         echo "Hello world!";
        }
    writeMsg ( );

    function factorial ($a) {
	$result = 1;
	for ($i = 1 ; $i <= $a; $i++)
		$result *= $i;
	echo "<br>Factorial of $a is : $result";
}
factorial (5);



    function sayHello() {
    $name = "Ali"; // Local variable
    echo $name;
    }

    sayHello();


    $name = "Ali"; // Global variable
    function sayHello() {
    global $name;
    echo $name;
}

    sayHello();

    ?>

<form action="index.php" method="POST"> 
    <label for="username">Enter Username:</label> <br>
    <input type="text" id="username" name="username" /> <br>

    <label for="password">Enter Password:</label> <br>
    <input type="password" id="password" name="password" /> <br>

    <button type="reset">Reset</button> 
    <button type="submit">Register</button> <br>


    <div class="checkbox-group">
        <input type="checkbox" id="terms" name="terms" value="agreed" />
        <label for="terms">checkbox</label> <br>
                <input type="checkbox" id="terms" name="terms" value="agreed" />
        <label for="terms">checkbox</label> <br>
                <input type="checkbox" id="terms" name="terms" value="agreed" />
        <label for="terms">checkbox</label> <br>
    </div>


    <label for="comments">Comments:</label>
<textarea id="comments" name="comments" placeholder="Type you message here..."></textarea>

</form>


    
</body>
</html>
