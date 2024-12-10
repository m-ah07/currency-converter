<?php

require_once __DIR__ . '/../src/CurrencyConverter.php';

use CurrencyConverter\CurrencyConverter;

// Initialize the CurrencyConverter with base currency (default is USD)
$converter = new CurrencyConverter();

// Example conversion: Convert 100 EUR to GBP
try {
    $amount = 100;
    $fromCurrency = 'EUR';
    $toCurrency = 'GBP';

    $convertedAmount = $converter->convert($amount, $fromCurrency, $toCurrency);

    echo "Converted $amount $fromCurrency to $toCurrency: $convertedAmount\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
