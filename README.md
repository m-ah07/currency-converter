# Currency Converter API

A lightweight and efficient **Currency Converter API** in PHP for real-time currency conversion. This API fetches the latest exchange rates from a public API and provides an easy-to-use interface for currency conversion.

---

## Features
- Supports multiple currencies.
- Real-time exchange rates.
- Lightweight and modular design.
- Easy to integrate into any PHP project.

---

## Installation

1. Clone this repository:

    ```bash
    git clone https://github.com/marwan-ahmed-23/currency-converter.git
    cd currency-converter
    ```

2. Include the `src` directory in your project.

## Usage

1. Include the `CurrencyConverter.php` file in your project.

2. Use the API to convert currencies:

    ```bash
    require_once 'CurrencyConverter.php';

    $converter = new CurrencyConverter();
    $rate = $converter->convert('USD', 'EUR', 100);
    echo "100 USD is equal to $rate EUR.";
    ```

## Directory Structure

currency-converter/
├── src/
│   └── CurrencyConverter.php   # Core conversion functionality
├── examples/
│   └── example.php             # Sample usage of the API
├── .gitignore                  # Git ignore file
└── README.md                   # Documentation

## Contribution

Feel free to fork this repository and contribute to its development. Submit a pull request with your changes.


