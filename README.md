# Deploying a PHP application with docker and elasticbeanstalk

## Requirements

### Deploying development

* [Docker](https://docs.docker.com/engine/installation/)
* [Docker compose](https://docs.docker.com/compose/install/)

#### Docker environment setup

```
export MYSQL_ROOT_PASSWORD=mysupersecretrootpassword MYSQL_HOST=mysql MYSQL_DATABASE=demoapp MYSQL_USERNAME=root MYSQL_PASSWORD=mysupersecretrootpassword
cp docker/development/docker-compose.yml.development docker-compose.yml
docker-compose build
docker-compose up -d
```

#### Prepare database

```
docker exec -ti dockerebsexample_mysql_1 mysql -pmysupersecretrootpassword -e 'create database demoapp'
```

### Deploying Production

* [EB CLI](http://docs.aws.amazon.com/elasticbeanstalk/latest/dg/eb-cli3-install.html)

#### Preparing

@TODO