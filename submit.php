<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Result</title>
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
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $description = htmlspecialchars($_POST['description']);
                echo "<p>Your series is - $name!</p>";
                echo "<p>It is about $description!</p>";
            } else {
                echo "<p>No data submitted.</p>";
            }
        ?>
    </div>
    <footer>
        <?php
            $date = date("Y/m/d");
            echo "Current date: " . $date;
        ?>
    </footer>
</body>
</html>