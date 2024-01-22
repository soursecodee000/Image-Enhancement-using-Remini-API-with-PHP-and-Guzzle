# Image Enhancement with Remini API and PHP

Enhance your images effortlessly using Remini AI's powerful image enhancement tools. This PHP script, combined with the Guzzle HTTP client, allows seamless integration with the Remini API to beautify faces and enhance backgrounds.

## Requirements

- PHP (>= 7.0)
- Composer (for Guzzle dependency)

## Installation

1. Clone or download the repository.
2. Run `composer install` to install the required dependencies.

## Usage

1. Replace `'YOUR_API_KEY'` in the script with your Remini API key.
2. Set the `$imagePath` variable to the path of the image you want to enhance.
3. Run the script using `php enhance_image.php`.

## Configuration

Adjust the script parameters as needed, such as image content type, output content type, and enhancement modes. Refer to the Remini API documentation for more details.

## Error Handling

The script includes error handling to gracefully manage exceptions during API requests. In case of errors, the script will display an error message.

## Acknowledgments

- [Remini AI](https://www.reminiapp.com/) - For providing the powerful image enhancement API.
- [Guzzle](https://docs.guzzlephp.org/) - A PHP HTTP client used for making API requests.

## License

This project is licensed under the [MIT License](LICENSE).
