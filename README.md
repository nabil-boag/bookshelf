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
