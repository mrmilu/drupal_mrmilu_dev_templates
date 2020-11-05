# Mr. Milú Dev Templates

Allows front developers to create templates that will be accesible via web like a standard drupal page. These templates will use the selected theme, it means it will use styles, javascript files, preprocess functions, etc.

## Usage
1. Enable this module: `drush en mrmilu_dev_templates -y`

1. Create a new "dev" folder inside your theme templates folder (i.e. web/themes/custom/my_theme/templates/dev)

1. __Optional__: Create a new page--dev-templates.html.twig, based on your page.html.twig and revemo all regions except content one. (It will prevent drupal header and footer to be rendered)

1. Create a new template whose name starts with "dev-template--" (i.e. dev-template--home.html.twig or dev-template--contact-page.html.twig)

1. Clear drupal cache: `drush cr`

1. Now you can access your template in yourdomain.dev.mrmilu.com/dev-templates/home or yourdomain.dev.mrmilu.com/dev-templates/contact-page

You can create a "components" folder inside this "dev" folder and use it across a lot of templates like `{% include 'dev-template--header.html.twig' %}`

## Notes
It will be a good practice add this module to config_exclude_modules variable to prevent to be enabled accidentally.

`$settings['config_exclude_modules'][] = 'mrmilu_dev_templates';`