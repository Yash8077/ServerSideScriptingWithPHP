# Filters in PHP

Filters in PHP provide a convenient way to validate and sanitize user input. They allow you to ensure that the data entered by users meets certain criteria and is safe to use in your application.

## Validation Filters

Validation filters are used to check if a value meets a specific condition. Here are some commonly used validation filters in PHP:

- `FILTER_VALIDATE_EMAIL`: Validates if a value is a valid email address.
- `FILTER_VALIDATE_URL`: Validates if a value is a valid URL.
- `FILTER_VALIDATE_INT`: Validates if a value is a valid integer.
- `FILTER_VALIDATE_FLOAT`: Validates if a value is a valid floating-point number.
- `FILTER_VALIDATE_IP`: Validates if a value is a valid IP address.

## Sanitization Filters

Sanitization filters are used to clean and sanitize user input. They remove any potentially harmful or unwanted characters from the input. Here are some commonly used sanitization filters in PHP:

- `FILTER_SANITIZE_STRING`: Removes HTML tags and special characters from a string.
- `FILTER_SANITIZE_EMAIL`: Removes all characters except letters, digits, and a few special characters from an email address.
- `FILTER_SANITIZE_URL`: Removes all characters except letters, digits, and a few special characters from a URL.
- `FILTER_SANITIZE_NUMBER_INT`: Removes all characters except digits from a string.

