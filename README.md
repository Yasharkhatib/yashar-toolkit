# Yashar Toolkit

A modular WordPress plugin developed to extend WordPress functionality with custom components and reusable tools.

## About

Yashar Toolkit is a custom WordPress plugin built with a modular architecture approach.

The goal of this project is to create lightweight, maintainable WordPress features without relying on heavy third-party plugins.

The plugin is developed to explore and implement:

- WordPress Plugin Architecture
- Object-Oriented PHP
- Custom Shortcodes
- WordPress Query API
- Modular Component Design
- Template Separation
- Custom CSS and JavaScript Asset Management

## Current Features

### Posts Grid Module

A lightweight custom post grid component.

Features:

- Display WordPress posts using WP_Query
- Custom shortcode integration
- Separate template rendering
- Custom module-based CSS assets
- Responsive grid layout
- Featured image support
- Post metadata display

## Usage

Add the shortcode below to any WordPress page or post:
[ytk_posts_grid]


The plugin will render a custom post grid.

## Plugin Structure

yashar-toolkit/

├── includes/
│ └── Plugin core classes

├── modules/
│ └── Individual plugin components

│ └── posts-grid/
│ ├── class-post-grid.php
│ ├── templates/
│ └── assets/

├── yashar-toolkit.php
└── README.md


## Development Goals

Future improvements include:

- Shortcode customization options
- Dynamic grid settings
- AJAX powered loading
- REST API integration
- Gutenberg block integration
- Additional reusable WordPress components

## Technologies

- PHP
- WordPress Plugin API
- WordPress Query API
- HTML5
- CSS3
- JavaScript

## License

This project is currently developed for learning, experimentation, and portfolio purposes.