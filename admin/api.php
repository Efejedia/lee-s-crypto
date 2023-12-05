

<?php
include 'config/constants.php';
if (isset($_POST['convert'])) {
    $amount = $_POST['amount'];
    $fromCurrency = $_POST['from'];
    $toCurrency = $_POST['to'];

    // Your ExchangeRate-API key
    $apiKey = 'a3cc4c8765b31243df1f5a09';
    $apiUrl = "https://v6.exchangerate-api.com/v6/a3cc4c8765b31243df1f5a09/latest/USD";

    // Fetch exchange rates from the API
    $exchangeRates = json_decode(file_get_contents($apiUrl), true);

    // Check if the API request was successful
    if ($exchangeRates && isset($exchangeRates['rates'][$toCurrency])) {
        $conversionRate = $exchangeRates['rates'][$toCurrency];
        $convertedAmount = $amount * $conversionRate;

        echo "<p>{$amount} {$fromCurrency} is equal to {$convertedAmount} {$toCurrency}</p>";
    } else {
        echo "<p>Error fetching exchange rates. Please try again later.</p>";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <h2>Currency Converter</h2>
    <form action="" method="post">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" required>
        
        <label for="from">From Currency:</label>
        <select name="from" required>
            <!-- Add your currency options here -->
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <!-- Add more currencies as needed -->
        </select>

        <label for="to">To Currency:</label>
        <select name="to" required>
            <!-- Add your currency options here -->
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <!-- Add more currencies as needed -->
        </select>

        <button type="submit" name="convert">Convert</button>
    </form>
</body>
</html>
