# Superglobals
In PHP, **superglobals** are built-in global arrays that are available across all scopes (global, function, class) without the need for global declarations. They are automatically populated by the server with information, typically regarding server, environment, and user input data. These arrays are accessible from anywhere in the script.

Here are the key PHP superglobals:

1. **`$_GET`**: Contains variables passed to the script via the URL query string (i.e., after the `?` in the URL).
   ```php
   echo $_GET['name']; // URL: script.php?name=John
   ```

2. **`$_POST`**: Contains data passed to the script via an HTTP POST request (commonly from HTML forms).
   ```php
   echo $_POST['username']; // Retrieved from an HTML form submission
   ```

3. **`$_REQUEST`**: Superglobal array which contains a combination of `$_GET`, `$_POST`, and `$_COOKIE` data. It allows to access input-data and send via URL parameters, form selection and cookies.
   ```php
   echo $_REQUEST['email']; // Can retrieve from GET, POST, or cookies
   ```

4. **`$_SERVER`**: Contains information about headers, paths, and script locations.
   ```php
   echo $_SERVER['HTTP_USER_AGENT']; // Shows browser information
   echo $_SERVER['PHP_SELF']; // Returns the filename of the currently executing script
   echo $_SERVER['PHP_NAME'];// Returns name of server host under which the script is executing
   echo $_SERVER['REQUEST_METHOD'];  // Shows the request method (GET, POST, etc.)
   ```

5. **`$_FILES`**: Contains information about files uploaded via an HTTP POST request.
   ```php
   echo $_FILES['file']['name']; // Name of the uploaded file
   ```

6. **`$_ENV`**: Contains environment variables passed to the current script.
   ```php
   echo $_ENV['HOME']; // Access an environment variable
   ```

7. **`$_COOKIE`**: Contains variables passed to the script via HTTP cookies.
   ```php
   echo $_COOKIE['user']; // Retrieved from the user's browser cookies
   ```

8. **`$_SESSION`**: Used to store session variables for use across multiple pages.
   ```php
   $_SESSION['user'] = 'John';
   ```

9. **`$GLOBALS`**: It is a superglobal associative array. This superglobal can be used to access global variables from anywhere in the script. Takes variable names as the key. 
   ```php
   $x = 10;
   function test() {
      echo $GLOBALS['x']; // Accesses the global variable $x
   }
   ```
