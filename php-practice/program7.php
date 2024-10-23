<?php
// Function to perform calculations
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Error: Division by zero";
            }
            return $num1 / $num2;
        default:
            return "Error: Invalid operation";
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Validate inputs
    if (is_numeric($num1) && is_numeric($num2)) {
        $result = calculate($num1, $num2, $operation);
    } else {
        $result = "Error: Please enter valid numbers";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1> Calculator</h1>
    <form method="POST" action="">
        <table border='1'>
            <tr>
                <td>Enter First Number</td>
                <td><input type="number" name="num1" placeholder="First Number" required></td>
            </tr>
            <tr>
                <td>Enter Second Number</td>
                <td><input type="number" name="num2" placeholder="Second Number" required></td>
            </tr>
            <tr>
                <td>Select Your Choice</td>
                <td>
                    <select name="operation" required>
                        <option value="add">Addition</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan='2'><button type="submit">Calculate</button></td>
                
            </tr>

        </table>
        
       
        
        
        
    </form>

    <?php
    // Display the result if available
    if (isset($result)) {
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>
