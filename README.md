# ÉPKŐ Kft. – Responsive One-Page Website

A modern, responsive one-page company website created for **ÉPKŐ Kft.**, a Hungarian company specializing in stone cladding, stone masonry, monument restoration, and architectural stonework.

This project is built with simplicity in mind using **HTML5**, **CSS3**, and **PHP**, making it lightweight, fast, and easy to deploy on almost any shared hosting environment.

## Features

- Responsive one-page layout
- Hero section with call-to-action buttons
- Company introduction
- Services section
- Reference gallery
- Contact form
- PHP form processing
- Clean and modern design
- No frameworks required

## Project Structure

```
.
├── index.html
├── style.css
├── send.php
├── images/
└── README.md
```

## Technologies

- HTML5
- CSS3
- PHP
- Vanilla JavaScript (optional, if AJAX form submission is used)

## Contact Form

The contact form can work in two ways:

### Standard PHP (recommended)

The form submits directly to `send.php`, which sends an email using PHP's `mail()` function.

Advantages:
- No JavaScript required
- Compatible with virtually every PHP hosting provider
- Simple and reliable

### AJAX (optional)

An AJAX version can also be implemented using the Fetch API to submit the form without reloading the page.

## Customization

Replace the placeholder images by adding your own files to the `images/` directory.

Example:

```html
<img src="images/reference1.jpg" alt="Reference Project">
```

Update the hero background inside `style.css`:

```css
.hero {
    background:
        linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
        url("images/hero.jpg") center/cover no-repeat;
}
```

## Deployment

Upload the project to any PHP-enabled web hosting.

Requirements:

- PHP 7.4+
- Mail server configured (for PHP `mail()`)

No database is required for the basic version.

## Future Improvements

- Admin dashboard
- Drag & Drop image uploads
- Gallery management
- Category filtering
- Lightbox gallery
- reCAPTCHA protection
- SEO improvements
- Image optimization
- Database-backed contact requests

## License

This project is provided as a demonstration website template and may be freely modified for personal or commercial use.

---

Developed as a lightweight custom website without the use of a CMS.
