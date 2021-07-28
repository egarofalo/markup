# Project

Wordpress starter theme integrated with Bootstrap 4 Framework and Webpack Encore.

## Description

Markup, like [\_s](https://underscores.me/), is a base theme to develop themes in Wordpress. It is built using namespaces, which gives us greater flexibility when developing our theme. On the other hand, Markup is already integrated with Bootstrap 4, therefore you will save the trouble of integrate Bootstrap 4 to the theme. To manage and optimize front-end dependencies, Webpack Encore is used, a Webpack wrapper created by Symfony wich simplifies the use of Webpack.

## Requirements

To start using Markup you must ensure that:

-   php >= 7.0
-   Composer
-   Node.js >= 12.x
-   Yarn

## Installation

Install [Composer](https://getcomposer.org/download/) on your computer and after installing run the command <code>composer require codevelopers/markup</code> in the root of your Wordpress project. Composer will automatically install Markup in the <code>wp-content/themes</code> folder.

## Theme structure

```sh
themes/markup/                  # → Markup root folder
├── assets/                     # → Translation files
│   ├── fonts/                  # → Fonts files processed by Webpack
│   ├── images/                 # → Statics image files processed by Webpack
│   ├── scripts/                # → Javascript files processed by Webpack
│   ├── styles/                 # → Scss files processed by Webpack
│   │   ├── mixins/             # → Mixins used in scss files
│   │   ├── _404.scss           # → 404 page styles
│   │   ├── _alert.scss         # → Bootstrap alerts custom styles
│   │   ├── _archive.scss       # → Archive pages styles
│   │   ├── _button_.scss       # → Buttons styles
│   │   ├── _container.scss     # → Containers styles
│   │   ├── _fonts.scss         # → Html root element responsive font size
│   │   ├── _footer.scss        # → Site footer styles
│   │   ├── _form.scss          # → Forms styles
│   │   ├── _image.scss         # → Image elements styles, like logos, brands and others
│   │   ├── _link.scss          # → Links styles
│   │   ├── _loop.scss          # → WordPress loop styles, like regular posts and custom posts
│   │   ├── _modal.scss         # → Bootstrap modals custom styles
│   │   ├── _nav.scss           # → Site navigation elements styles
│   │   ├── _page.scss          # → WordPress pages styles
│   │   ├── _paginator.scss     # → Pagination elements styles
│   │   ├── _section.scss       # → Section elements styles
│   │   ├── _sidebar.scss       # → Sidebars styles
│   │   ├── _single.scss        # → Single template styles
│   │   ├── _table.scss         # → Table elements styles
│   │   ├── _title.scss         # → Heading elements styles
│   │   ├── _variables.scss     # → Bootstrap variables override
│   │   ├── _vendor.scss        # → External libraries styles
│   │   ├── editor-styles.scss  # → Editor styles
│   │   ├── login.scss          # → Admin login styles
│   │   └── main.scss           # → This file includes all the _*.scss files
│   └── assets.json             # → Manifest file used by Webpack
├── external/                   # → External php libraries
├── helpers/                    # → Helpers functions used by template files
├── hooks/                      # → Custom and WordPress Hooks
├── languages/                  # → Translation files
├── template-parts/             # → Template parts
├── 404.php                     # → Template file
├── comments.php                # → Template file
├── composer.json               # → Composer file
├── footer.php                  # → Template file
├── functions.php               # → Theme bootloader
├── header.php                  # → Template file
├── index.php                   # → Template file
├── package.json                # → Node.js dependencies and scripts
├── page.php                    # → Template file
├── postcss.config.js           # → Used by Webpack
├── searchform.php              # → Template file
├── sidebar.php                 # → Template file
├── single.php                  # → Template file
├── style.css                   # → Theme meta information
├── template-full-width.php     # → Template Full Width
└── webpack.config.js           # → Webpack Encore configuration
```

## The <code>functions.php</code> file

This file takes care of including the external libraries, helpers, and hooks.
In the <code>helpers</code> and <code>hooks</code> folder you will find some <strong>php</strong> files. If you want to create a new hook, you can use one of the files located in the <code>hooks</code> folder or create a new one. The same goes for helpers.
You should consider when you create a new helper or hook file, you must reference it in the <code>$helpers</code> or <code>$hooks</code> array respectively, defined both in the <code>functions.php</code> file.

## Hooks

You can find some hooks defined into the <code>php</code> scripts located in the <code>hooks</code> folder. As mentioned above, your own hooks can be defined in an existing hook file, or you can create new one.

## Helpers

Markup come with some helper functions wich help you resolve common code problems while you are develope a new theme. Helper files, wich contain helper functions, must have a unique namespace, to avoid coalitions of functions and constants with other files or libraries. Helper files are located in the <code>helpers</code> folder.
As same as hooks, a new helper function can be written in one of the exisiting helper files. If you want, you can create a new file with a unique namespace for avoid coalitions. Helper functions can act as filters or actions, and you can use it inside hook files. Also, you can use a helper function as a template tag. Feel free to create helper functions that you can use in any part of your code.

## Custom Queries

Custom queries can be created inside the <code>query.php</code> helper file as functions. You can call these functions in any part of your code.

## Custom template tags

Template tags can be created inside the <code>template_tags.php</code> helper file, and you can call these functions in any template file.

## Install front-end dependencies

To install front-end dependencies, you must install Yarn, and then run the following command in the theme directory:

-   yarn install

## Compile assets with Webpack Encore

Once the front-end libraries are installed, you must run the <code>yarn dev</code> command in the theme directory to compile the assets. If you want, you can run <code>yarn watch</code> during the development process, since webpack can watch files and recompile whenever they change. Before deploy to production environment, you must run <code>yarn production</code>.

## Help us to skip working in this project

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.paypal.com/donate?hosted_button_id=7GSFA7BVHWDTN)
