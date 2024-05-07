# PHP_Basic

<details><summary> ### Lesson 1: </summary>

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

<details><summary> ### Lesson 2: </summary>
`<?= ?>` This option is used if one expression is being made.
`mt_rand(0,1)` Random library
Comments in php
`//` , `#` - one-line comments
`/* */` - multi-line comments
</details>