# Loop Control Structures

Loop control structures are used for repeating certain tasks in your program, such as iterating over a database query result set.
- Essentials of Loops
- The name of a loop variable (or loop counter)
- The initial value of the loop variable
- The loop-continuation condition that tests for the final value of the loop variable
- The progress (increment /decrement) by which the loop variable is modified each time through the loop.


# Types of Loop
- **While** 
	Loops through a block of code as long as the specified condition is true.
- **Do…while**
	Loops through a block of code once, and then repeats the  loop as long as the specified condition is true.
- **For**
	Loops through a block of code a specified number of times.
- **Foreach**
	Loops through a block of code for each element in an array.


# break and continue Statements

- **break** statement is used to terminate the execution of a loop in the middle of iteration.
- **Continue** statement is used to stop the execution of specific loop iteration and begin executing the next one.


# Types of Arrays

- In PHP, there are three types of arrays:

- Numerically Indexed array − An array with a numeric index. Values are stored and accessed in linear fashion.

- Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.

- Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices.


# Associative Arrays

- In associative Arrays, you can reference the items in an array by name rather than by number. 
- Associative arrays are different than normal (numeric-indexed) arrays in some important ways:
- The order is undefined. 
- You must specify a key (index).
-  Associative arrays are best for name/value pairs.
- Some of PHP’s most important values are associative arrays. The $_REQUEST, $_GET, $_POST, $_FILES, etc., are an associative array.
