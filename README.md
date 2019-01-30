# Porte (Porte-Aye) Portfolio Engine

PHP Portfolio Engine that makes it super-easy to show off your web design and/or programming portfolio.  Add new projects as simply as adding a line to a file and uploading a picture (And a script to automate that is what I'm going to make next)

### Setup/use:

1. Clone this repo: 
	
```
git clone https://github.com/hadenodom/porte.git
```

2. Move the contents to a new directory under a php server's document root


It should work as-is and show the sample/filler content.  

To change that and add your projects, open **portfolio.csv**

You'll notice 4 fields on each line:

* Project Title
* Project URL
* Image URL 
* Project Description

Edit these to add your projects.  

The HTML in index.php is minimal, and is meant for you to build your site around.  

Have fun, and happy hacking!

## TODO:
* Distro packaging
* Change from CSV to using SQL or a non-SQL relational database system
* Create simple client to push changes to one's portfolio
