<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $height = htmlspecialchars($_POST['height']);
    $weight = htmlspecialchars($_POST['weight']);
    $bmi = htmlspecialchars($_POST['bmi']) ?: "Not Provided";
    $goal = htmlspecialchars($_POST['goal']);

    echo "
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submission Success</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <header>
            <h1>Submission Successful</h1>
        </header>
        <main>
            <h2>Here are your details:</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Age:</strong> $age</p>
            <p><strong>Height:</strong> $height cm</p>
            <p><strong>Weight:</strong> $weight kg</p>
            <p><strong>BMI:</strong> $bmi</p>
            <p><strong>Fitness Goal:</strong> $goal</p>
            <a href='index.html' class='btn'>Back to Registration</a>
        </main>
    </body>
    </html>";
} else {
    header("Location: index.html");
    exit;
}
?>