#!/bin/bash

echo Setting up mysql arguments
usage="Usage: $0 <MYSQL_HOST> <MYSQL_DATABASE> <MYSQL_USERNAME> <MYSQL_PASSWORD> <MYSQL_PORT:default 3306>"
eb setenv MYSQL_HOST=${1?${usage}}
#echo eb setenv MYSQL_DATABASE=${2?${usage}}
#echo eb setenv MYSQL_USERNAME=${3?${usage}}
#echo eb setenv MYSQL_PASSWORD=${4?${usage}}
#echo eb setenv MYSQL_PORT=${5:3306}
