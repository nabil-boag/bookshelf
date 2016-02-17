# Deploying a PHP application with docker and elasticbeanstalk

## Requirements

### Deploying development

* [Docker](https://docs.docker.com/engine/installation/)
* [Docker compose](https://docs.docker.com/compose/install/)

### Deploying Production

* [EB CLI](http://docs.aws.amazon.com/elasticbeanstalk/latest/dg/eb-cli3-install.html)

### Docker environment setup

```
cp docker/development/docker-compose.yml.development docker-compose.yml
docker-compose build
docker-compose up -d
```

### Prepare database

```
docker exec -ti bookshelf_mysql_1 mysql -pmysupersecretrootpassword -e 'create database demoapp'
docker exec -ti  bookshelf_fpm_1 bash -c 'cd bookshelf; vendor/bin/doctrine orm:schema-tool:create'
```
