#!/bin/bash
echo 'suhosin.executor.include.whitelist = phar' | sudo tee -a /etc/php5/cli/conf.d/suhosin.ini
sudo apt-get install curl php5-curl
curl -sS https://getcomposer.org/installer | php
./composer.phar --dev install
./vendor/bin/behat 
