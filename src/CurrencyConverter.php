<?php

namespace CurrencyConverter;

class CurrencyConverter
{
    private $apiUrl = 'https://api.exchangerate-api.com/v4/latest/';
    private $baseCurrency;

    public function __construct($baseCurrency = 'USD')
    {
        $this->baseCurrency = $baseCurrency;
    }

    /**
     * Fetch the exchange rates for the base currency.
     */
    public function getExchangeRates()
    {
        $url = $this->apiUrl . $this->baseCurrency;

        $response = file_get_contents($url);
        if (!$response) {
            throw new \Exception("Failed to fetch exchange rates.");
        }

        return json_decode($response, true)['rates'];
    }

    /**
     * Convert from one currency to another.
     */
    public function convert($amount, $fromCurrency, $toCurrency)
    {
        $rates = $this->getExchangeRates();
        if (!isset($rates[$fromCurrency]) || !isset($rates[$toCurrency])) {
            throw new \Exception("Unsupported currency.");
        }

        $usdAmount = $amount / $rates[$fromCurrency];
        return $usdAmount * $rates[$toCurrency];
    }
}
