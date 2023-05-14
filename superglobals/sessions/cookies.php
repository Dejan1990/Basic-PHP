<?php

// 1. Explain what is cookie
// Cookie is a piece of data saved in browser and sent to server and back
// on every request/response

// 2. How to set cookies
setcookie('name', 'TheCodeholic', time() + 60);
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

// 3. How to delete cookies
//setcookie('name', 'TheCodeholic', time() - 60);
// if we wont to delete the cookie, just set up the negative value time() - 60
