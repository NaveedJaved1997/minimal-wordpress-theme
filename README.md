# Minimal WordPress Theme

A lightweight, modern WordPress theme built from scratch. This project demonstrates a mastery of the WordPress Template Hierarchy, modern CSS techniques (Grid & Flexbox), and the Theme Customization API.

## 🚀 Features

* **Modern Layout:** Utilizes **CSS Grid** for a robust 2-column layout that automatically adjusts to screen size.
* **Theme Customizer:** Built-in controls to change the **Primary** and **Accent** colors directly from the WordPress Dashboard.
* **Custom Logo Support:** Fully integrated with the WordPress "Site Identity" controls for uploading logos.
* **Navigation Menus:** Registers a dynamic "Main Header Menu" location.
* **Sticky Sidebar:** The sidebar remains visible while scrolling through long content.
* **Card UI Design:** Blog posts feature a clean card interface with subtle hover animations and shadows.
* **Mobile Responsive:** Fully responsive design that stacks content and adjusts typography for mobile devices.

## 🛠️ Tech Stack

* **Core:** PHP (WordPress Standards, Hooks, Customizer API)
* **Styling:** CSS3 (Variables, Grid, Flexbox)
* **Markup:** HTML5

## 📂 File Structure

* `style.css` - Handles theme identity, variables, and visual styling.
* `functions.php` - Enqueues styles, registers menus/sidebars, and adds Customizer controls.
* `header.php` - Displays the Logo, Site Title, and Navigation Menu.
* `index.php` - The main template loop for displaying the blog feed.
* `single.php` - Template for individual blog posts.
* `page.php` - Template for static pages.

## ⚙️ Usage

### 1. Customizing Colors
1.  Go to **Appearance > Customize > Colors**.
2.  Use the color pickers to change the **Primary Theme Color** (Header/Footer) and **Accent Color** (Links/Buttons).
3.  The site updates automatically.

### 2. Adding a Logo & Menu
1.  **Logo:** Go to **Appearance > Customize > Site Identity** to upload a logo.
2.  **Menu:** Go to **Appearance > Menus**. Create a menu and check the **"Main Header Menu"** location box.

### 3. Adding Widgets
1.  Go to **Appearance > Widgets**.
2.  Drag any widget into the **Main Sidebar** area.

## 📝 Author

**[Your Name]**
* *Built as part of a Full Stack WordPress Development learning path.*