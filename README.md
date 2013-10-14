#Canteen Boilerplate

This HTML5 Boilerplate project is designed to get a Canteen site up and running as quickly a possible. This project is a great starting point for customizing your own site.

##Tools checklist

The following tools are required to get the boilerplate project up and running. Absolute tool paths can be modified in __build.properties__.

+ [Apache Ant](http://ant.apache.org/) for running __build.xml__
+ [Composer](http://getcomposer.org/doc/00-intro.md#installation-nix) for fetching the PHP dependencies
+ [Bower](http://bower.io/) for fetching the JavaScript dependencies. Install with `npm install bower`
+ [UglifyJS](https://github.com/mishoo/UglifyJS) for minifying Modernizr (version in Bower is not minified, ugh!). Install with `npm install uglify-js@1`

###Getting Start

1. Setup a MySQL database & a corresponding user
2. Edit __deploy/config.php__ with your MySQL credentials
3. Import JavaScript and PHP dependencies by running `ant install`
4. Modify __deploy/.htaccess__ if necessary
5. Run index.php from Apache