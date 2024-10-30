<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <p>Welcome!</p>
    <form method="post" action="submit.php">
        <label for="name">The best series is:</label>
        <input type="text" id="name" name="name"><br/>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description"><br/>
        <input type="submit" value="Submit">
    </form>
    </div>
    <footer>
        <?php
            $date = date("Y/m/d");
            echo "Current date: " . $date;
        ?>
    </footer>
</body>
</html>