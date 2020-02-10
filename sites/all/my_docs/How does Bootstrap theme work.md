How does Bootstrap theme work?

Compared to others I've played with, Bootstrap theme seems extremely complicated. So much so that I wonder if it's really the thing to use, but anyway...

The complication comes from the very large number of template and related files. The themes I've seen so far just have a few files like page.tpl.php, which may be in a templates folder, or just in the theme root. Bootstrap has a templates folder containing many subfolders, containing in addition to tpl files func and vars files (filename.func.php, filename.vars.php).

Comparing page.tpl.php with other themes, there are common predefined variable names available for use in the template - a difference between bootstrap and bartik is that bootstrap has a template html.tpl.php whereas bartik uses a common html.tpl.php 'normally located in the modules/system directory'.

There are utility vars like $is_front, $logged_in, $is_admin, nav and content vars like $main_menu, $title, and region vars like $page['header']



