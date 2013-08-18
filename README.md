Bootstrap 3 Dropdown menu in WORDPRESS themes
=============================================

Theese files show how to create a Wordpress dropdown menu with Bootstrap 3.
Only the edited files are attached. Some additional info is inside the code as comments.

The things you need to do:

1. Download and add Bootstrap files to your theme.
2. Add your Bootstrap styles to style.css
3. Register your bootstrap javascript with a hook in `functions.php` 
4. Make sure the template calls the hook in the template (`headers.php`)
5. Insert a menu in the template and style it (`headers.php`)
6. Register the menu in functions `functions.php`. 
Until this everything was just like adding a Bootstrap 2 menu.
7. Create a new Walker class in `functions.php` that renders an edited `<a data-toggle="dropdown">` tag
8. Add walker parameter to the wp_nav_menu function in `headers.php` 

And you should have a working dropdown menu. 

Note: headers.php is usually the header part of a rendered page. 
You can insert the code into any other files if you organize your code differently.
