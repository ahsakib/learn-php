PHP uses the convention of prefixing a dollar sign ($) to the name of a variable.

Variable names in PHP are case-sensitive.

Variable names must begin with a letter or underscore character.

A variable name can consist of numbers, letters, underscores but you cannot use characters like + , - , % , ( , ) . & , etc

Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.

As per the naming convention, "$name", "$rate_of_int", "$Age", "$mark1" are examples of valid variable names in PHP.

Invalid variable names: "name" (not having $ prefix), "$rate of int" (whitespace not allowed), "$Age#1" (invalid character #), "$11" (name not starting with alphabet)





##Variable Scope
-Local Variables
-Global Variables
-Static Variables
-Function Parameters


##########################################

Local Scope: Variables defined inside a function or method have local scope. They are accessible only within the function or method where they are defined.

$globalVar = 10;

function myFunction() {
    // $globalVar is accessible here
    echo $GLOBALS['globalVar']; // Another way to access global variables
}

myFunction(); // Outputs: 10

##########################################

Global Scope: Variables defined outside of any function or class have global scope. They can be accessed from anywhere within the script, including inside functions, methods, and included files.

$globalVar = 10;

function myFunction() {
    // $globalVar is accessible here
    echo $GLOBALS['globalVar']; // Another way to access global variables
}

myFunction(); // Outputs: 10

##########################################

-Static scope: static keyword within functions, which allows a variable to maintain its value between function calls, effectively extending its scope beyond a single function call.

```php
function increment() {
    static $count = 0;
    $count++;
    echo $count;
}

increment(); // Outputs: 1
increment(); // Outputs: 2
```

echo:
echo can take multiple parameters.
It doesn't return a value, so it's slightly faster than print.
It's a language construct, not a function, so the parentheses are optional.
Commonly used for simple string outputs.

echo "Hello, World!";

print:
print can only take one argument.
It returns a value of 1, so it can be used in expressions.
It's a function, so it requires parentheses.
Commonly used when you need to directly print a value in an expression.

Constants variable

-By default, a PHP constant is case-sensitive.

-By convention, constant identifiers are always uppercase.

-A constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscore.

-There is no need to write a dollar sign ($) before a constant, however one has to use a dollar sign before a variable

Difference between Constants and Variables in PHP

Constants cannot be defined by simple assignment; they can only be defined using the define() function.

Constants may be defined and accessed anywhere without regard to variable scoping rules.

Once the Constants have been set, they may not be redefined or undefined.

Magic Constants

