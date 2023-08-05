<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Factorial</h2>
        <div class="form-group">
            <label for="numberInput">Enter Number:</label>
            <input type="number" class="form-control" id="numberInput" placeholder="Enter a number">
        </div>
        <button type="button" class="btn btn-primary" onclick="calculateFactorial()">Calculate Factorial</button>
        <div class="mt-3" id="result"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript Code -->
    <script>
        function calculateFactorial() {
            const numberInput = parseInt($("#numberInput").val());
            if (isNaN(numberInput) || numberInput < 0) {
                $("#result").html('<div class="alert alert-danger">Please enter a valid non-negative number.</div>');
                return;
            }
            const result = factorial(numberInput);
            $("#result").html('<div class="alert alert-success">Factorial of ' + numberInput + ' is ' + result + '.</div>');
        }

        function factorial(n) {
            if (n === 0 || n === 1) {
                return 1;
            } else {
                return n * factorial(n - 1);
            }
        }
    </script>
</body>
</html>
