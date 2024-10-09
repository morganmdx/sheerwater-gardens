# WordPress Boilerplate Theme

A boilerplate WordPress theme template designed for development purposes. This theme serves as a starting point for building custom WordPress themes, providing the essential file structure and basic functionality to get started with theme development. The theme is not fully complete but includes essential files such as `single.php`, `page.php`, and `functions.php`.

## Tech Stack

![WordPress](https://img.shields.io/badge/WordPress-21759B?logo=wordpress&logoColor=white&style=flat-square)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white&style=flat-square)
![HTML](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white&style=flat-square)
![CSS](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white&style=flat-square)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black&style=flat-square)

## Features

- **Basic WordPress Theme Structure**: Includes core theme files for WordPress development.
- **Responsive Design**: The template uses standard HTML5 and CSS3 for responsiveness.
- **Dynamic Content**: `single.php` and `page.php` handle dynamic content rendering.
- **Customisable Header and Footer**: The theme provides basic structure for the header and footer.
- **Sidebar Support**: The `sidebar.php` file enables sidebar functionality.
- **Modular Functions**: The `functions.php` file contains hooks and functions for theme customization.

## Dependencies

- **PHP**: Ensure PHP 7.4 or higher is installed on your web server.
- **[WordPress.org CMS](https://wordpress.org/)**: Install WordPress to manage your website’s content.
- **Web Hosting**: You’ll need a web host that supports WordPress and PHP.
- **[cPanel](https://cpanel.net/)** (optional): Use cPanel for easy hosting management (optional); or
- **[Plesk](https://www.plesk.com/)** (optional): Alternatively, Plesk can be used for server management (optional).

## Included Files

- `index.php`: The main template file.
- `single.php`: Template for displaying individual posts.
- `page.php`: Template for static pages.
- `functions.php`: Contains theme functions and WordPress hooks.
- `style.css`: The main stylesheet for the theme.
- `footer.php`: Template for the footer section.
- `header.php`: Template for the header section.
- `sidebar.php`: Template for the sidebar section.

## Project Structure

```bash
.
├── index.php        # Main template file
├── single.php       # Template for single posts
├── page.php         # Template for static pages
├── functions.php    # Theme functions and hooks
├── style.css        # Theme's stylesheet
├── footer.php       # Footer section
├── header.php       # Header section
├── sidebar.php      # Sidebar section
└── README.md        # This file
```

## Installation
Clone the repository into your WordPress wp-content/themes/ directory:

```bash
git clone https://github.com/morganmdx/sheerwater-gardens.git
```

### Activate the theme:
Go to the WordPress admin dashboard.
Navigate to Appearance > Themes.
Find and activate this theme.

### Start Development:
- Use the included files as the foundation for your custom theme.
- Add styles, scripts, and templates as required for your project.

## Development Notes
PHP 7.4 or higher is recommended for compatibility with WordPress core functions.
This boilerplate is designed to be extended and customised. It's an initial starting point rather than a full theme.
Make sure to enqueue scripts and styles in the functions.php file as you develop.

## License
This project is licensed under the MIT License.
License is subject to change.
See the LICENSE file for more details.
