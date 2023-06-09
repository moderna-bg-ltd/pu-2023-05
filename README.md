# pu-2023-05

## University of Plovdiv, Internship, May 2023

### Requirements
- Please use a personal email.
- Register on Github.com and send your email address to us.
- Register on Drupal.org and add "MODERNA BG LTD" (moderna-bg-ltd) as your Work >> Organization.

### Git
- Install Git locally - https://git-scm.com/ (for Windows use GitBash console)
- Git servers - Github.com, Gitlab.com, Bitbucket.com (custom Redmine, etc.)
- Most used console commands:

```
git clone git@github.com:moderna-bg-ltd/pu-2023-05.git
git pull
<apply code changes>
git add .
git commit -m"Describe code changes"
git push
```

### SSH
- New SSH key generation: `ssh-keygen -t rsa`
- Private (your own key) & Public SSH keys (upload to the servers).
- Generate SSH key: ssh-keygen -t rsa -b 4096 -C "your_email@example.com".
- Start SSH agent: `eval "$(ssh-agent -s)"`
- Add your personal SSH key: `ssh-add ~/.ssh/id_your_private_ssh_key`
- Resource: https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent

### Local Dev server
- Windows - Wamp64 (64bit): https://www.wampserver.com/en/download-wampserver-64bits/
- MacOS - Mamp64.
- Linux - integrated by default.
- Docker - Win/Mac/Linux - Linux Containers on Windows OS: [https://www.docker.com/](https://docs.docker.com/desktop/install/windows-install/)

### PHP Development IDE
- PhpStorm (trial, paid): https://www.jetbrains.com/phpstorm/
- MS Visual Studio Code (VS Code).
- Notepad++, other text editors.
- Comodo, Netbeans, Eclipse, etc.

### Basic PHP programming
- Create `index.php`.
- Add a CSS framework W3CSS in folder `css/`.
- Learn basic HTML, CSS, Javascript, PHP and why not Python: https://www.w3schools.com/
- If your computer/laptop has installed PHP, we can use local php/web server with the command: `php -S localhost:8000`.
- Official documentation: https://www.php.net/
- Current version and realeses: https://www.php.net/releases/index.php
- Check your current php version: `php -v`
- Check your php settings within an index.php file and single PHP function: `<?php phpinfo();`

### Practical example - basic Git commands
- Status of the current local git branch: `git status`
- Create new git branch: `git checkout -b feature-podvrati`
- SSH connect to a server: `user@ip_address_xxx_xxx_xxx_xxx -p <port_number>`
- Exit from remote server: `exit`
- Switch to a different branch: `git checkout master`
- Merge master into dev: `git checkout dev` and `git merge master`

### Extended Git commands
- When we have already added in local git file/s (in green), we can restore it with: `git reset -- <file_name>`
- Remove/cancel file changes: `git checkout -- .htaccess`
- Remove all untracked files and folders: `git clean -fd .`
- See all differences: `git diff` (or `git diff <filename>`).

### Composer
- Install composer (it requires installed PHP): https://getcomposer.org/
- PHP libraries package manager.
- Regular usage: `composer require <path>/<library_name>`.
- Example: `composer require drupal/stage_file_proxy`.
- Run the require composer (PHP) libraries and patches: `composer install`
- Update the already in use library/patch: `composer update <path>/<library_name>`
- To update composer.lock run: `composer update lock`

### Docker & Docksal
- Install Docker Desktop: https://www.docker.com/products/docker-desktop/
- Install Docksal (it uses Docker for the orchestration): https://docksal.io/
- Docksal command always starts with `fin `.
- Docksal setup (first docksal setup, in the project root folder): `fin init`
- Docksal docker containers start: `fin start`
- Stop the docksal/docker containers: `fin system stop`
- To run command/s into the main container use: `fin composer install`
- Import database dump: `fin db import <path_to_db>/<db_backup_file.sql>`

### Resolve real problem (issue) with the local DEV environment:
- Set the correct files & folders (default chmod) permissions on our local project:
- Folders (directories): `find ./ -type d -exec chmod 755 -R {} \;`
- Files: `find ./ -type f -exec chmod 644 {} \;`

### Default local DEV Docksal MySQL settings
- 'database' => 'default'
- 'username' => 'user'
- 'password' => 'user'
- 'host' => 'db'
- 'port' => '3306'

### Practical Experience - Login system
- Login & Register system in PHP & MySQL database with tutorials.
- Resources / Learning materials:
- Secure Login System with PHP and MySQL (example): https://codeshack.io/secure-login-system-php-mysql/
- Secure Registration System with PHP and MySQL (example): https://codeshack.io/secure-registration-system-php-mysql/

### Work in progress on real PHP project
- Add register / login / logout functionality on a real project.

### Professional public visibility
- Please register and add MODERNA BG LTD
- Register on Github.com
- Gitlab.com
- PHP.net (documentation only)
- Symfony.com
- Drupal.org (you can also add MODERNA BG LTD as an employer).
- Linkedin (professional network).
- Behance.net (portfolio).
- Other social networks (Facebook, Instagram, Twitter, Youtube, TikTok, etc.)
- Personal website.
- CV (Curriculum Vitae).
- IT Jobs in Bulgaria - Dev.bg, Jobs.bg, Zaplata.bg, Jobtiger, etc.

### PHP CMS (Content Management Systems)
- Wordpress
- Joomla
- Drupal

### PHP Frameworks
- Codeigniter
- Laravel.com (Online video courses: laracasts.com)
- Symfony.com (Online courses: symfonycast.com)

### Javascript Frameworks
- Javascript
- NodeJS
- AngularJS
- ReactJS
- VueJS

### CSS Frameworks
- W3CSS
- Boostrap
- Foundation
- Responsive web design

### Learning / Training
- HTML, CSS, Javascript, PHP, Python - https://www.w3schools.com/
- Python on learn.microsoft.com - https://learn.microsoft.com/en-us/training/browse/?terms=python

### Check if a webpage is HTML & CSS valid
- HTML validator - https://validator.w3.org
- CSS validator - https://jigsaw.w3.org/css-validator/
- Loading speed - https://pagespeed.web.dev/
- Check for structured data (by Google) - https://search.google.com/test/rich-results

### Real projects work
- https://dd-vrati-plovdiv.com/
- https://www.poznanie.org/

### Global variables
- `$_SESSION`, `$_COOKIE`, `$_SERVER`, `$_POST`, `$_GET`, `$_FILES`

### Upload file

```
<form method="post" enctype="multipart/form-data" action="upload.php">
...
<input id="cover" name="cover" type="file">
...
</form>
```

```
$target_file = "/var/www/images/books/1234.jpg";
move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file);
```
