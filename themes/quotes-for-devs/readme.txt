=== Quotes on Dev Theme ===

Contributors: Nosa Paath 
Tags: translation-ready, custom-background, theme-options, custom-menu, post-formats, threaded-comments

Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A WordPress starter theme for the Quotes on Dev project, forked from Underscores.

== Description ==

This is a WordPress Theme project called Quotes on Devs or Quotes for Devs. 

== Technology used ==

1. html
2. css
3. sass
4. gulp
5. iTerm CLI
6. MAMP
7. VScode
8. PHP
9. WordPress
10. JQuery
11. Rest API
12. github

== Learning Points == 

- To start with the project I visualized what I need in terms of functionality. From looking at the list of functionality, I need to work on a button that makes an ajax call to the rest api and display some information, the theme needs to be responsive so I will use sass mixins for the design. 
- What languages do I need? I need html and css, thats a given. But I will need to use php to speak with the WordPress world and use WordPress php functions, filters and action hooks. 
- I also need JQuery to add functionality of the "Show me another quotes" button. This button needs to do an Ajax call to the Rest API and get a random post/ quote along with the meta data. 
- I am comfortable with gulp so I will use it for this project. The gulpfile will check for erros, minify files, and also with Browsersync will reload the webpage whenever I Cmnd+S / Save the file. 
- Oh I also need MAMP, this is a local server that will allow me to access my database. The trick about using MAMP is to make sure we have our project folder along with the dependencies in the /htcdocs folder. MAMP will look for this forder when we try to load the localhost. 
- In the htcdocs you want to place the folder you got when you intitialisze WordPress for the project. In this folder you will find /wp-content folder and in there I looked for the /themes folder where I created my Quotes On Devs folder. 
- When working on the ajax call, I displayed the json file in the console and using .html in my main.js file to replace the quotes, author, and source + url. 
- There is always surprises in every project. I found the Submit a quote page and instead of just a button that does a GET ajax call, I also now need a Post call. 

== Installation ==
	
1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

= Does this theme support any plugins? =

Quotes on Dev Theme includes support for Infinite Scroll in Jetpack.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2015 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
