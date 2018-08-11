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


## Developers

### Instalation

__Install application using composer__

```shell
$ composer create-project krzysiekpiasecki/symfonator --stability=dev
$ cd symfonator
```

__Start MYSQL, create database and configure application database URL. Example shell commands are:__
```shell
$ mysql # start MYSQL
$ mysqladmin -u MYSQL_USER_NAME -p create symfonator # Create database called symfonator
$ nano .env # Edit enviroments variables
# Change this line: DATABASE_URL=mysql://MYSQL_USER_NAME:PASSWORD@127.0.0.1:3306/symfonator
```

__Create application user and run HTTP server__
```shell
$ bin/console doctrine:schema:create # Create database schema from entity model
$ bin/console fos:user:create --super-admin # Create first application user with admin privileges
$ bin/console server:run # Run http server
```
