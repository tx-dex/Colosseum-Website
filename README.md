# How to Develop

Development server: <https://col-www.sangre.dev/>
Credentials in 1Password

The project installed to `/home/devops/colosseum/academy`

The site is run with docker-compose: `/home/devops/colosseum/academy/docker-compose.yml`
There is some volume mounts in the file

The site proxied with locally installed Nginx. See: `/etc/nginx/conf.d/default.conf`

Pushing changes to Gitlab will trigger webhook `/home/devops/colosseum/academy/update.sh`,
which pulls new version to the development server and runs composer install & drush updb & cache:rebuild

## Installing modules

If you have locally installed composer, you can add required modules with following commands:
```
composer require drupal/module_name --ignore-platform-reqs

if you get memory errors:
php -d memory_limit=-1 /usr/local/bin/composer require drupal/module_name --ignore-platform-reqs

Then add the module to the DRUPAL_MODULES list

git add composer.json composer.lock DRUPAL_MODULES
git commit -m 'added module module_name'
git push
```

## Running Debugger
The image enables XDebug in DEV mode listening on port 9999

### Local development
Using local dev env just set PHPStorm XDebug to listen port 9999 and click listen icon on a toolbar.
### Debugging on col-aca.sangre.dev
Enable `XDEBUG_CONFIG` env var in the service's docker-compose.yml file on the server and re-create the container with `docker-compose up -d drupal`.  

Open remote tunnel to the server:
```
ssh -R 10.4.10.41:9999:localhost:9999 clients.sangre.dev
```

## Azure AD Data Import in Drupal

```
The _API permisions_ Item of the Microsoft Azure application allows granting different API permissions to the application, https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationMenuBlade/CallAnAPI/appId/XXXXXX/isMSAApp/ .

Once the appropriate permissions were granted, the corresponding User Profile fields must be defined in Drupal using the functionality at _/admin/config/people/accounts/fields_ .

The last step is to alter the _col_aca_global_openid_connect_post_authorize()_ function in the _web/modules/custom/col_aca_global/col_aca_global.module_ file. The incoming user information data fields must be set to the corresponding fields in the Drupal User Profile. This way, every time the user logs in using the Azure AD login, the user's data will be updated in Drupal. Note that currently no user profile related changes are sent back to the Azure AD.
```

# Front-end development

### Get started

```bash
npm install
```

### Dev

```bash
npm run watch
```

### Installing new js libraries
- Install the package
```bash
npm install --save-dev [package name]
```
- Add the new library to webpack.config.js to "filesToConcat" list
- Run  ```bash npm run build ```
This will rebuild the plugins.js to js folder

### Icons

https://jossef.github.io/material-design-icons-iconfont/
