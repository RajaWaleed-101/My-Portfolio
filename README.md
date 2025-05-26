# Modern Portfolio Website

A modern, responsive portfolio website with a black and purple color theme. This portfolio includes sections for Home, About Me, Services, Projects, and Contact.

## Features

- Responsive design that works on all devices (mobile, tablet, desktop)
- Modern black and purple color theme
- Interactive navigation with smooth scrolling
- Project filtering functionality
- Animated typing effect
- Contact form with PHP backend
- Skill progress bars
- Mobile-friendly navigation menu

## Technologies Used

- HTML5
- CSS3 (with CSS variables and flexbox/grid layouts)
- JavaScript (ES6+)
- PHP (for contact form processing)
- Font Awesome icons

## Setup Instructions

### Prerequisites

- Web server with PHP support (e.g., Apache, Nginx)
- Basic knowledge of HTML, CSS, JavaScript, and PHP

### Installation

1. Clone or download this repository to your web server's public directory.
2. Open `includes/contact.php` and update the recipient email address:
   ```php
   $to = 'your-email@example.com'; // Change this to your email
   ```
3. If you want to use a database to store contact form submissions, uncomment and configure the database connection code in `includes/contact.php`.
4. Add your own images to the `images` folder:
   - `profile.jpg` for your profile picture
   - `about.jpg` for the About section
   - Project images (`project1.jpg`, `project2.jpg`, etc.)

### Customization

1. **Personal Information**:
   - Update your name, profession, and description in `index.html`
   - Modify the contact details (email, phone, location)

2. **Projects**:
   - Add or remove project cards in the Projects section
   - Update project details, images, and tags

3. **Services**:
   - Customize the services you offer by editing the service cards

4. **Skills**:
   - Update the skills and progress percentages in the About section

5. **Colors**:
   - The color scheme can be modified by changing the CSS variables in `css/styles.css`:
     ```css
     :root {
         --primary-color: #8e44ad; /* Purple */
         --secondary-color: #6c3483; /* Darker Purple */
         --accent-color: #a569bd; /* Light Purple */
         --background-color: #121212; /* Dark Background */
         --secondary-bg: #1e1e1e; /* Slightly Lighter Background */
         /* ... other variables ... */
     }
     ```

## Usage

1. Access the website through your web server.
2. Navigate through different sections using the menu.
3. Filter projects by category using the filter buttons.
4. Fill out and submit the contact form to send a message.

## Browser Compatibility

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## License

This project is available for personal and commercial use.

## Credits

- Font Awesome for icons
- Google Fonts for typography 