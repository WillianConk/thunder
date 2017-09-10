<?php

$output = shell_exec("cd /var/www/html/; git fetch --all ; git reset --hard origin/master ; git pull origin master 2>&1");
echo $output;