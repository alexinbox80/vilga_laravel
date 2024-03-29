#!/bin/bash

# Start the php-fpm process
/usr/local/sbin/php-fpm &

# Start the supervisor process
#/usr/bin/supervisord -c /etc/supervisor/supervisord.conf &

# Wait for any process to exit
wait -n

# Exit with status of process that exited first
exit $
