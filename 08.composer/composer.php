<?php 

//  1. Composer is a command line dependency management tool designed for PHP.
//  2. Composer ensure all developer run the correct package or php version.
//  3. composer.json and composer.lock file there are two file control the dependency
//  4. "composer install" will check if a composer.lock file exits
// 5. if composer.lock file not exit "composer update" will automaticly run to create the composer.lock file
// 6. if composer.lock file exits, then install the declared dependencies from here
// 7. "composer update" will check the composer.json file
// 8. it will determine the latest verions to install based on what is declared in the composer.json and install the latest version
// 9. finally, the composer.lock file will be updated to reflect these changes
