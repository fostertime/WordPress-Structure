# WordPress Structure
A basic WordPress Git repository layout...a mash-up of different git projects, see CREDIT below for details. Use it, fork it and customize it to your own liking!

## This project uses the following environment tools:
* WP-CLI - command line interface for WordPress - http://wp-cli.org/
* PHP Composer - package dependency management - http://getcomposer.org/
* phpdotenv - Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automatically. - https://github.com/vlucas/phpdotenv

## Initial Setup
1. Clone the repo.
2. In your project root directory, create the directory tree `/shared/content/uploads`
    * WINDOWS USERS: After adding the above directory tree, create a directory `\app\uploads`, then open up the Windows command console, `Start->Run->cmd`, and enter `mklink /j "c:\path\to\root\project\app\uploads" c:\path\to\root\project\shared\content\uploads`
    * MAC/LINUX USERS: The uploads file contained in the repo handles the symlink automatically.
3. Edit `composer.json` to make sure the latest version of WordPress, and other plugins are set correctly.
4. Then run `composer install` - this installs all dependencies, including WordPress.
5. Edit the `.env.sample` in your project root and configure all settings to your local environment details, then save the file as `.env` in your project root
6. Run the WordPress installer as you normally would in your browser by visiting your localhost url.
7. Login to the WordPress Admin `http://{project_url}/wp/wp-admin/`.

## Database Sync Setup (not required)
1. WordPress Database Sync via Git Hooks and WP-CLI 
    * In the `/db_sync/git_hooks/` directory of the repo, move `pre-commit` and `post-merge` files to `/path/to/your/repo/.git/hooks/` directory
    * Edit `pre-commit` to include the WordPress tables you want to include in the sync, you could also easily modify this to include file uploads. 
    * While in the `/.git/hooks/` directory, make these files executable my typing `chmod +x pre-commit` and again for `post-merge`

## Setup Explanations:
* PHP Composer is used to install and manage dependencies, like the WordPress core and Plugins, WordPress core is installed in the sub directory `/wp/`
* This project uses a custom content directory of `/app/` - themes and plugins live here. do not add anything to the `/wp/wp-content` directory
* `wp-config.php` located in the root (because it can't be in `/wp/`)
* All writable directories are symlinked to similarly named locations under `/shared/`.

## Plugin & WordPress Updates, and New Version Management
To update to the latest versions of WordPress and Plugins for the project, simply modify `composer.json` to the latest versions and run `composer install`. If any new versions of WordPress or Plugins are available for the project, they will be automatically updated.

## Repo Structure and Descriptions:
* `/app/` directory contains the theme and plugin directories.
* `/config/` directory contains configuration files for dev, staging and production environments.
* `/db_sync/` directory contains hooks and database backups for WordPress db syncing.
* `.env.sample` file is a sample of your local environment settings.
* `.gitignore` file ignores specific files for git inclusion.
* `.htaccess` file for WordPress. 
* `.composer.json` file handles all dependency management details. Update this file to update WordPress and Plugin versions.
* `index.php` file WordPress directory handling. This file should never be modified.
* `README.md` this document.
* `wp-cli.yml` file allows wp-cli to run without including the WordPress directory in each command.
* `wp-config.php` file for WordPress. This file should never be modified.

## CREDIT
This project is a combination of multiple WordPress Git layout projects. Certain concepts used in this project were borrowed from the following git projects:
* Roots Bedrock - https://github.com/roots/bedrock (phpdotenv usage)
* Mark JaQuith's WordPress Skeleton - https://github.com/markjaquith/WordPress-Skeleton (basic structure/concept)

