# monjo
Web based mongo management tool

Monjo is an extremely easy to install php based mongo management tool. It can be used to easily connect to a mongo database on a local machine or a remote server effortlessly using no auth, authentication or ssh.

Install PHP mongo driver.
=============

Windows
---------------
To use MongoDB with PHP, you need to use MongoDB PHP driver. Download the driver from the url <a href="https://s3.amazonaws.com/drivers.mongodb.org/php/index.html">PHP mongo driver</a> Make sure to download the latest release of it. Now unzip the archive and put php_mongo.dll in your PHP extension directory ("ext" by default) and add the following line to your php.ini file −

```
extension = php_mongo.dll
```

Ubuntu
---------------
Installing the mongo-php driver:
```
sudo pecl install mongodb
```
Also you might receive error: phpize not found. Phpize is a command which is used to create a build environment. This error could appear at the time of installation of any pecl extension. To solve this problem of the phpize command not found, the user has to install the php5-dev package. To install it enter the command:
```
sudo apt-get install php7.0-dev
```

Then in the php.ini file which is in /etc/php/7.0/apache2 directory, add the mongo db extension:

$ sudo nano /etc/php/7.0/apache2/php.ini 
Add the following line in the file:

```
extension = mongo.so;
```

So the mongo driver is installed.

