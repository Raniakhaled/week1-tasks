<!DOCTYPE html>
<html>
    <head>
        <title>Simple PHP Calculator</title>
    </head>

    <body>
        <h2> Simple PHP Calculator </h2>

        <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        
        <select name="operation" required>
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (−)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (÷)</option>
        </select>
        
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result ="";

        switch($operation){
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result= $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = "Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid operation selected";
            }
        echo "<h3>Result: $result</h3>";
    }
    ?>
    </body>


</html>
