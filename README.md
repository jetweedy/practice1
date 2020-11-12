# practice1

This is a fork of a repo by dlargent for the purposes of testing pushing it to Heroku.

## Adjustments for Heroku

1. Modifying php/actions.php in accordance with [https://devcenter.heroku.com/articles/cleardb#using-cleardb-with-php](https://devcenter.heroku.com/articles/cleardb#using-cleardb-with-php) to use the system credentials for accessing ClearDB securely.

1. I've also added a php/dbSetup.php file to build the 'labels' table before running the other stuff.

1. Finally, I've replaced 'index.html' with 'index.php' so that Heroku will recognize it when using the PHP codebase.


