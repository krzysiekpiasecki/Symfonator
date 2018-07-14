# Symfonator
Welcome to Symfonator - Responsive Bootstrap 4 admin application based on the foundation of Symfony and Adminator HTML5 template!
Preview of this application is available here [https://symfonator.herokuapp.com/admin](https://symfonator.herokuapp.com/admin).

## Application

### Screenshots
<br/>

<a href="https://symfonator.herokuapp.com/admin">
<img src="https://raw.githubusercontent.com/krzysiekpiasecki/Symfonator/master/src/assets/static/images/preview2.png" alt="Symfonator preview">
</a>

<br/>

<br/>
<br/>

<a href="https://symfonator.herokuapp.com/admin">
<img src="https://raw.githubusercontent.com/krzysiekpiasecki/Symfonator/master/src/assets/static/images/preview1.png" alt="Symfonator preview">
</a>

<br/>
<br/>


## Developers

### Instalation

__Install application using composer__

```shell
$ composer create-project krzysiekpiasecki/symfonator --stability=dev
$ cd symfonator
```

__Start MYSQL, create database and configure application database URL. Example shell commands are:__
```
$ mysql // start MYSQL
$ mysqladmin -u USER -p create DB_NAME // Create database
$ nano .env // Edit enviroments variables
# Change this line: DATABASE_URL=mysql://APP_USER:PASSWORD@127.0.0.1:3306/DB_NAME
```

__Create application user and run HTTP server__
```shell
$ bin/console fos:user:create
$ bin/console server:run
```
