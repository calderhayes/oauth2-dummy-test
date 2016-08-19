Dummy PHP OAuth2 Server for testing

NOT PRODUCTION SECURE

Was running this on Ubuntu Server 16.04 in a VirtualBox VM

Used the following to install a basic LAMP stack
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

Used root/ubuntu as mysql credentials

Installed composer to get the library:
https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx

Used the following OAuth2 Library:
https://github.com/bshaffer/oauth2-server-php/

mkdir add a vendor folder
composer install

use db/build-db.sh to prep the database (create tables, load data)

And use scripts/run-dev-server.sh to launch a dev app that is exposed!

Use scripts/access-token-test.sh to see if things are running
