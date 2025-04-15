# willc-dev.net

Welcome to willc-dev.net where I display my most recent completed software development projects. These projects can include data management apps and websites, educational simulations, indie games, and more. Explore the projects I've completed, learn more about me, and view my contact information if you like what you see!

## Installation

### Dependecies

- [Apache](https://httpd.apache.org/) (Webserver)
- [MariaDB](https://mariadb.org/) or [MySQL](https://www.mysql.com/) (Database)

### Clone the repository

```bash
git clone https://github.com/wcouture/FO-Stats-PHP.git
```

### Configure Apache

Modify the <i>httpd.conf</i> apache configuration file to set the root directory to the cloned respository. ("{<i>PATH_TO_CLONED_REPOSITORY</i>}/FO-Stats-PHP/")<br>

<i>If installed through a package manager, httpd.conf will likely be in one of the following locations:</i>

- /etc/apache2/httpd.conf
- /etc/apache2/apache2.conf
- /etc/httpd/httpd.conf
- /etc/httpd/conf/httpd.conf

Additionally configure your domain name within httpd.conf and SSL certificates within ssl.conf, located within the conf.d directory within the httpd or apache2 directory, if desired.

### Start Apache Server

<i>The following commands demonstrate how to start, stop, and restart the webserver on a linux distribution.</i><br>

Start:

```bash
sudo systemctl start httpd
```

Stop:

```bash
sudo systemctl stop httpd
```

Restart:

```bash
sudo systemctl restart httpd
```

## Usage

Navigate to http(s)://localhost or http(s)://{YOUR_DOMAIN} if a domain is configured to access the website.

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
