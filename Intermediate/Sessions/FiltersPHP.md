# Filters in PHP

Filters in PHP provide a convenient way to validate and sanitize user input. They allow you to ensure that the data entered by users meets certain criteria and is safe to use in your application.

## Validation Filters

Validation filters are used to check if a value meets a specific condition. Here are some commonly used validation filters in PHP:

- `FILTER_VALIDATE_EMAIL`: Validates if a value is a valid email address.
- `FILTER_VALIDATE_URL`: Validates if a value is a valid URL.
- `FILTER_VALIDATE_INT`: Validates if a value is a valid integer.
- `FILTER_VALIDATE_FLOAT`: Validates if a value is a valid floating-point number.
- `FILTER_VALIDATE_IP`: Validates if a value is a valid IP address.
- `FILTER_VALIDATE_BOOLEAN`: Validates if a value is a boolean.
- `FILTER_VALIDATE_REGEXP`: Validates if a value matches a regular expression.
- `FILTER_VALIDATE_DOMAIN`: Validates if a value is a valid domain name.
- `FILTER_VALIDATE_MAC`: Validates if a value is a valid MAC address.

## Sanitization Filters

Sanitization filters are used to clean and sanitize user input. They remove any potentially harmful or unwanted characters from the input. Here are some commonly used sanitization filters in PHP:

- `FILTER_SANITIZE_STRING`: Removes HTML tags and special characters from a string.
- `FILTER_SANITIZE_EMAIL`: Removes all characters except letters, digits, and a few special characters from an email address.
- `FILTER_SANITIZE_URL`: Removes all characters except letters, digits, and a few special characters from a URL.
- `FILTER_SANITIZE_NUMBER_INT`: Removes all characters except digits from a string.
- `FILTER_SANITIZE_NUMBER_FLOAT`: Removes all characters except digits, plus and minus signs, and optionally, the decimal point and exponential notation.
- `FILTER_SANITIZE_SPECIAL_CHARS`: Encodes special characters to HTML entities.
- `FILTER_SANITIZE_FULL_SPECIAL_CHARS`: Converts special characters to HTML entities, including quotes.
- `FILTER_SANITIZE_ENCODED`: Encodes a string to be used in a URL.
- `FILTER_SANITIZE_MAGIC_QUOTES`: Applies addslashes() to a string, escaping special characters.
- `FILTER_SANITIZE_NUMBER_INT`: Removes all characters except digits, plus and minus signs.
- `FILTER_SANITIZE_NUMBER_FLOAT`: Removes all characters except digits, plus and minus signs, and optionally, the decimal point and exponential notation.
