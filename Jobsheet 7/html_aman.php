<!DOCTYPE html>
<html>
    <head>
        <title>Output HTML Injection</title>
    </head>
    <body>
        <h2>Output HTML Injection</h2>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input = $_POST['input'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                
                echo "<p>Input: $input</p>";
            };
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Email yang dimasukkan valid: $email";
                } else {
                    echo "Email yang dimasukkan tidak valid!";
                }
            };
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="input">Nama:</label>
            <input type="text" name="input" id="input"><br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>