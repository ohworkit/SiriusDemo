#!/bin/bash

path=$(cd $(dirname $0); pwd)
cd $path
cd ../

pid=$(cat $(pwd)/docker/pid)

/usr/local/bin/docker stop $pid