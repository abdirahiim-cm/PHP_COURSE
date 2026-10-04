
# Multi-dimensional Arrays


- Multidimensional array is the ability to include an entire array as a part of another one, and to be able to keep doing so.
- A two-dimensional array is an array of array (a three-dimensional array is an array of array of array). 
- Multidimensional arrays are used when your data is arranged in some sort of tabular form.
- Multidimensional arrays are set up in the same way as normal arrays. Note that the dimension of an array indicates the number of indices you need to select an element.

# Using Array Functions 


- The array functions allow you to access and manipulate arrays. The array functions are part of the PHP core. There is no installation needed to use these functions. Sample of these functions are:
- is_array: Checks whether a variable is an array.
- in_array: Checks if a specified value exists in an array.
if (in_array("Adhesives", $products))
            echo "<br>Match found";
- count: Returns the number of elements in an array. sizeof function behaves like count.
- sort: sorts an array in ascending order
- rsort: sorts an array in descending order
- asort: sorts an associative array in ascending order, according to the value.
- arsort: sorts an associative array in descending order, according to the value.
- max: Returns the highest value in an array.
- min: Returns the lowest value in an array.
- implode: function that takes an array and converts it to a string.


# Explode , Shuffle function

**explode:** Place a string containing several words separated by a single character (e.g. space) into an array.

**shuffle:** Shuffles an array and put elements in random order.
	
# Array_Merge , Array_Reverse function

**array_merge:** Merges one or more arrays into one array.

**array_merge:** Merges one or more arrays into one array.

# array_push, array_pop, end function

**array_push:** adds elements to the end of the array and returns the new number of elements in the array.

**array_pop:** removes the last element of an array and returns the removed element.

**end:** Sets the internal pointer of an array to its last element and returns its value.
