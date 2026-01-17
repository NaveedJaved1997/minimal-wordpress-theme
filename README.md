# Minimal WordPress Theme

A lightweight, modern WordPress theme built from scratch. This project demonstrates a mastery of the WordPress Template Hierarchy, modern CSS techniques (Grid & Flexbox), and responsive design principles.

## 🚀 Features

* **Modern Layout:** Utilizes **CSS Grid** for a robust 2-column layout that automatically adjusts to screen size.
* **Sticky Sidebar:** The sidebar remains visible while scrolling through long content (`position: sticky`).
* **Card UI Design:** Blog posts feature a clean card interface with subtle hover animations and shadows.
* **Mobile Responsive:** Fully responsive design that stacks content and adjusts typography for mobile devices.
* **Template Hierarchy:** Includes specific templates for the Homepage (`index.php`), Single Posts (`single.php`), and Static Pages (`page.php`).
* **Widget Ready:** Fully supports dynamic widgets in the sidebar area.

## 🛠️ Tech Stack

* **Core:** PHP (WordPress Standards)
* **Styling:** CSS3 (Variables, Grid, Flexbox)
* **Markup:** HTML5

## 📂 File Structure

* `style.css` - Handles theme identity and visual styling (including mobile breakpoints).
* `functions.php` - Enqueues styles and registers the "Main Sidebar" widget area.
* `index.php` - The main template loop for displaying the blog feed.
* `single.php` - Template for individual blog posts (includes metadata, navigation, and comments).
* `page.php` - Template for static pages (clean layout without post metadata).
* `header.php` & `footer.php` - Reusable global partials.

## 📦 Installation

1.  Download or clone this repository.
2.  Move the `minimal-theme` folder into your WordPress installation:
    ```path
    /wp-content/themes/minimal-theme
    ```
3.  Log in to your WordPress Dashboard.
4.  Go to **Appearance > Themes**.
5.  Locate **Minimal Theme** and click **Activate**.

## ⚙️ Usage

### Adding Widgets
1.  Go to **Appearance > Widgets**.
2.  Drag any widget (or the custom "Recent Posts with Thumbnails" widget) into the **Main Sidebar** area.

### Customizing Styles
The theme uses CSS Variables for easy color customization. Open `style.css` and edit the `:root` section:

```css
:root {
    --primary: #2c3e50;  /* Change Main Color */
    --accent: #3498db;   /* Change Link/Button Color */
}
