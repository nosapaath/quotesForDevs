# Quotes on Dev Starter

## Description 

This is a WordPress Theme project called Quotes on Devs or Quotes for Devs. 

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content/themes` directory.

### 2. Rename the `quotesondev-starter-master` directory

Make sure that the theme directory name is project appropriate! Do you need `starter` or `master` in the directory name?

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the npm packages you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

And now would be a good time to `git init` :)

## Technology used 

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

## Learning Points  

- To start with the project I visualized what I need in terms of functionality. I need to work on a button that makes an ajax call to the rest api and display some information, the theme needs to be responsive so I will use sass mixins for the design. 
- What languages do I need? I need html and css, thats a given. But I will need to use php to speak with the WordPress world and use WordPress php functions, filters and action hooks. 
- I also need JQuery to add functionality of the "Show me another quotes" button. This button needs to do an Ajax call to the Rest API and get a random post/ quote along with the meta data. 
- I am comfortable with gulp so I will use it for this project. The gulpfile will check for erros, minify files, and also with Browsersync will reload the webpage whenever I Cmnd+S / Save the file. 
- Oh I also need MAMP, this is a local server that will allow me to access my database. The trick about using MAMP is to make sure we have our project folder along with the dependencies in the /htcdocs folder. MAMP will look for this forder when we try to load the localhost. 
- In the htcdocs you want to place the folder you got when you intitialisze WordPress for the project. In this folder you will find /wp-content folder and in there I looked for the /themes folder where I created my Quotes On Devs folder. 
- When working on the ajax call, I displayed the json file in the console and using .html in my main.js file to replace the quotes, author, and source + url. 
- There is always surprises in every project. I found the Submit a quote page and instead of just a button that does a GET ajax call, I also now need a Post call. A requirement in this project is to make it that whenever someone wants to submit a Quote they need to be logged in and also we want to make it a default for the Quotes submission to require approval. 