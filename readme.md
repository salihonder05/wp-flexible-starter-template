# WP Flexible Starter template
Our Wordpress starter template which uses Flexible Grid System 
Documentation: https://dnomak.com/flexiblegs/learn/wrap/?method=css

## Manual Installation
1. Clone the theme into the "wp-content/themes/" folder:
```bash
git clone https://github.com/salihonder05/wp-flexible-starter-template.git theme-name
```
2. Update the template information in "style.scss" file (Theme Name, Description, etc.)
3. Open terminal in the the template folder you just clonned and configured, and run:
```bash
npm run build
```
4. Activate the theme from the Wordpress Admin panel

## Local Usage
1. Open terminal in the the template folder you just clonned and configured, and run:
```bash
npm start
```
2. Then "gulp" will be watching the .scss files that are in "scss" folder.


IF YOU USE WINDOWS PC =>
CHANGE PACKAGE JSON =>

"devDependencies": {
    "gulp": "4.0.2",
    "gulp-autoprefixer": "8.0.0",
    "gulp-cli": "2.3.0",
    "gulp-sass": "^4.0.0",
    "gulp-sass-lint": "1.4.0",
    "gulp-sourcemaps": "3.0.0"
  },
  "keywords": [],
  "author": "Salih ÖNDER",
  "license": "ISC",
  "scripts": {
    "build": "npm install --unsafe-perm=true --allow-root && del -f style.css && del -f style.css.map && gulp build",
    "start": "del -f style.css && del -f style.css.map && gulp"
  },



/***********/
  Version Notes:
  Campatilibilty, Versions
  node -v : v17.5.0
  npm -v : 8.4.1
  packages versions in package.json
/***********/

