#!/bin/sh
BRANCH='lesson-6-layout'

git checkout $BRANCH
git merge origin/$BRANCH
php bin/magento deploy:mode:set default
composer install
rm -rf var/cache/* var/page_cache/* var/view_preprocessed/* pub/static/frontend/* pub/static/adminhtml/* pub/static/_cache/* pub/static/deployed_version.txt generated/code/* generated/metadata/*
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy uk_UA -f -a frontend --theme PRostik/luma --jobs=4
php bin/magento setup:static-content:deploy en_US -f -a frontend --theme Magento/luma --jobs=4
php bin/magento setup:static-content:deploy en_US -f -a adminhtml --jobs=4
php bin/magento deploy:mode:set production --skip-compilation
