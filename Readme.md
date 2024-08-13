# Book Post Type Plugin

[![License](https://img.shields.io/badge/license-GPL--2.0--or--later-blue.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

## Description

The Book Post Type plugin is a WordPress plugin that adds a custom post type called "Book" to your WordPress site. This plugin is designed to help you manage and display book content on your website easily. It also includes an additional post type for "Articles."

## Features

- **Custom Post Types:** Adds "Book" and "Article" post types to your WordPress site.
- **Custom Taxonomies:** Utilize default WordPress taxonomies for categorizing books and articles.
- **Gutenberg Support:** Full compatibility with the Gutenberg editor.
- **Localization:** Ready for translation with text domains.
- **Customizable:** Easily extendable and customizable to suit your needs.

## Requirements

- **WordPress:** Version 5.8 or higher.
- **PHP:** Version 7.2 or higher.
- **Composer:** Required for managing dependencies.

## Installation

### 1. Using Composer

1. Ensure Composer is installed on your system. If not, follow the [official Composer installation guide](https://getcomposer.org/download/).

2. Clone the plugin repository:

   ```bash
   git clone https://github.com/emowebdev/book-cpt.git
3. Navigate to the plugin directory:

    ```bash
   cd book-cpt
4. Install the required dependencies using Composer:
    ```bash
   composer install
5. Upload the plugin to your WordPress site's `wp-content/plugins/` directory.

6. Activate the plugin through the 'Plugins' menu in WordPress.

### 2. Manual Installation

1. Download the plugin from the GitHub repository.

2. Extract the zip file and upload the `book-cpt` directory to your WordPress site's `wp-content/plugins/` directory.

3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

Once activated, the plugin will automatically create two new post types: "Books" and "Articles." You can access these new post types from the WordPress admin menu. Use the standard WordPress interface to add, edit, or delete books and articles.

## Localization

The plugin is ready for translation. If you wish to translate the plugin into your language, follow these steps:

1. Create a `.po` file for your language in the `languages` directory, based on the template.

2. Generate the corresponding `.mo` file using a tool like [Poedit](https://poedit.net/).

3. The plugin will automatically load your translation based on the WordPress site language settings.

## Development

### Code Structure

- Main Plugin File: `book-cpt.php` - Initializes the plugin.

- Composer: `composer.json` - Manages the plugin dependencies.

- Includes: Contains all the core classes for registering post types and interfaces.

### Extending the Plugin

To extend the plugin functionality, you can add new classes or features within the includes directory. Follow the existing structure to ensure compatibility and maintainability.

## Support
For any issues or feature requests, please use the [GitHub Issues](https://github.com/emowebdev/book-cpt/issues) page.

## License
This plugin is licensed under the GPL-2.0-or-later license.

Happy coding! 😊