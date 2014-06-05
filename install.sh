#!/bin/bash
DIRNAME=$(cd `dirname $0`; pwd)
cp -a "${DIRNAME}"/* "/var/www/html/www.apasdeloup-joomla.org/templates/vpn/"
