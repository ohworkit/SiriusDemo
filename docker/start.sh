#!/bin/bash

path=$(cd $(dirname $0); pwd)
cd $path
cd ../

if [ ! -z $1 ]
then
    port=$1
else
    port=80
fi

/usr/bin/env docker run -d -h sirius -p $port:80 -v $(pwd):/var/www/sirius -v $(pwd)/docker/nginx:/etc/nginx/sites-enabled -v $(pwd)/docker/php:/etc/php5/fpm/custom --privileged=true -e DEV_UID=$UID -e DEV_GID=$GID 192.168.1.234:5000/phalcon
