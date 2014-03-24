#!/bin/bash

# Must have a project name
if [ "$#" -ne 1 ]; then
  echo "Usage: ./sunrise.sh <project_name>"
  exit 1
fi

if [ -d "$1" ]; then
  echo "ERROR: Directory already exists."
  exit 1
fi

# Get laravel sunrise
wget https://github.com/sjlu/laravel-sunrise/archive/master.zip -O sunrise.zip
unzip sunrise.zip
rm sunrise.zip
mv laravel-sunrise-master $1
cd $1

# Do dependencies
curl -sS https://getcomposer.org/installer | php
php composer.phar install
npm install
bower install
