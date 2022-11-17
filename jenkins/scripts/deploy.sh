#!/usr/bin/env sh

set -x
#pwd
#git clone https://github.com/practTestPipeline/jenkins-php-selenium-test.git

docker run -d -p 80:80 --name my-apache-php-app -v /var/jenkins_home/workspace/practTestPipeline/webapp:/var/www/html php:7.2-apache
#docker run -d -p 80:80 --name my-apache-php-app -v /home/Desktop/jenkins-php-selenium-test/webapp:/var/www/html php:7.2-apache
#docker exec my-apache-php-app /bin/bash -c 'chmod 777 /var/www/html/index.php'
#docker exec my-apache-php-app /bin/bash -c 'ls'
#docker exec my-apache-php-app /bin/bash -c 'curl http://localhost'

sleep 1
set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'

