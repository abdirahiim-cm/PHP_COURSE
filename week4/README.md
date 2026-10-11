
## A function
- is a set of statements that performs a particular task and, optionally, returns a value.

- ## Advantage
- Functions have many advantages over inline code. For example, they:
- Involve less typing and less code.
- Reduce syntax and other programming errors.
- Decrease the loading time of program files.
- Decrease execution time, because each function is compiled only once, no matter how often you call it.
- Accept arguments and can therefore be used for general as well as specific cases.
- Code reusability because functions are defined only once and can be invoked many times.

- ## Differentiate between parameters and arguments .
- *Arguments* are values passed to a function.
- *Parameters* are the placeholders for arguments.

- ## Passing By Value
- Passing arguments by value is passing a copy of the argument, not the original value. 

- *Passing By Reference*
- Involves the passed value being changed inside the function.

- *Default Argument Value*
- You can set default argument to a function, just supply the default value in the parameter.

## Scope of Variables

- The scope of a variable is the part of the script where the variable can be referenced/used.
- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.
- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
- You can have local variables with the same name in different functions, because local 
variables are only recognized by the function in which they are declared.

## Variable Scope - Superglobal variables

- Several predefined variables provided by the PHP environment. 
- Global within the program, accessible absolutely everywhere.
- Contain lots of useful information about the currently running program and its environment.
    $_GET   $_SESSION   $_FILES  $_SERVER   $GLOBALS 
- $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).


