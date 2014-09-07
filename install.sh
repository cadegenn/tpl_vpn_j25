#!/bin/bash
DIRNAME=$(cd `dirname $0`; pwd)
SITE=www.volontairesnature.org
cp -a "${DIRNAME}"/* "/var/www/html/${SITE}/templates/vpn/"
cp -a "${DIRNAME}"/language/* "/var/www/html/${SITE}/language/"
