<?php
require 'recipe/common.php';

// Specify your server details
server('production', 'your-server-hostname-or-ip')
    ->user('your-server-username')
    ->password('your-server-password')
    ->set('deploy_path', '/var/www/html');

// Basic deployment task
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'deploy:symlink',
]);
