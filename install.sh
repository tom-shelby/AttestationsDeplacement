#!/bin/sh

# Check is compose deps are locked
ERROR=0
CHANGE=0


if [ -f .env ] ; then
    php artisan key:generate
    echo "[INFO] Set a new app key."
    CHANGE=1
else
    echo "[ERROR] Unable to find .env file. Be sure to copy the example file and configure it as you like." 
    ERROR=1
fi 


if [ ! -f composer.lock ] ; then
    composer install
    CHANGE=1
else 
    echo "[INFO] Deps already installed in $PWD. Run 'composer update' to update deps."
fi

if [ $CHANGE -eq 0 ] ; then
    echo "[FINAL STATE] no change were done."
fi

if [ $ERROR -ne 0 ] ; then 
    echo "[FINAL STATE] Some errors occured, please pay attention to error messages and fix them befor running the app."
    exit 1

else
    exit 0
fi

