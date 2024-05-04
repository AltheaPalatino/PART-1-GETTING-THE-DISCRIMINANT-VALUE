<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Discriminant Result</title>
</head>
<body>
    <h2>Discriminant of a quadratic equation result</h2>

    <?php
    if(isset($_POST['submit'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = pow($b, 2) - 4 * $a * $c;

        echo "<p>The discriminant of the quadratic equation is: $discriminant</p>";
    } else {
        echo "<p>Error: Please submit the form to calculate the discriminant.</p>";
    }
    ?>

    <button><a href="index.html">Back to Calculator</a></button>
</body>
</html>

