# PHP_Basic

<details><summary> 

### Lesson 1: </summary>

For local web development, I utilize the XAMPP software. To configure my local server, I made adjustments to the Apache configuration files.

1. **Modifying the `httpd-vhosts.conf` file of Apache:**

   ```Bash
   C:\xampp\apache\conf\extra\httpd-vhosts.conf
   ```

   I specified a new configuration for virtual hosts in this file, allowing my local server to handle requests for my project.

2. **Adding entries to the `hosts` file:**
   Additionally, I added corresponding entries to the hosts file so that my computer can resolve domain names at the local level.

```Bash
127.0.0.1 PHP_Basic
127.0.0.1 www.PHP_Basic
```

    Now, when I enter PHP_Basic/ in the browser's address bar, I can access my project on the local server.

3. **PHP Block:**
   To write PHP code, it is necessary to begin the block with the `<?php` tag and close it with `?>` at the end if the file contains code other than PHP. The echo command is used to output data to the terminal.

</details>

<details><summary> 

### Lesson 2:</summary>

The <?= ?> syntax is employed for outputting a single expression in PHP.

mt_rand(0,1) is a function from the random library, generating random numbers between 0 and 1.
PHP supports various comment types:
Single-line comments can be denoted by // or #.
Multi-line comments are enclosed within /* */.
When importing files, PHP provides require and include:
require halts the program execution if the specified file is missing.
include issues a warning but allows the program to continue execution if the file is absent.
Variables in PHP are indicated by the $ symbol and can hold different types:
Types include integer, boolean, float, string, array, object, resource, and NULL.
Boolean values in PHP are true and false.
Within double quotes " ", variables can be embedded using curly braces {$var}. To display a dollar sign as part of the string instead of as a variable indicator, escape it with a backslash like \$var.
The dir function in PHP facilitates executing terminal commands.
</details>

<details>
<summary>

### Lesson 3:</summary>
isset() - Check if variable is set return true
empty() - Check if string is empty return true
gettype() - Return variable type

namespace - Namespaces in PHP provide a way to organize code by grouping classes, functions, constants, and other elements into logically related groups. They help avoid naming conflicts between different parts of the code and make the project easier to maintain and scalable.

Constants in PHP are created using the `define()` function. They are named values that remain constant during program execution and cannot be changed. Checking for the existence and definition of constants is done using the `defined()` and `define()` functions, respectively.

Examples of using:

- To create a constant: `define('CONST_NAME', CONST_VAR);`
- To check the existence of a constant: `if (defined('CONST_NAME')) { /* ... */ }`
- To check whether a constant was successfully defined: `if (define('CONST_NAME', CONST_VAR)) { /* ... */ }`

These checks are useful to ensure that the program operates correctly and that constants are used in the appropriate places.
</details>

<details>
<summary>

### Lesson 4:</summary>

В php конкатенация осуществляется символом `.` например: `echo "text" . $num`

Поразрядные операторы php


</details>

<details>
<summary>

### Lesson 5:</summary>

Login/Regestration form


</details>
