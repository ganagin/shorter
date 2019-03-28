# URL shorter

## Install

	git clone https://github.com/ganagin/shorter

Create `.htaccess` in root directory:

	RewriteEngine on         
  
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^([0-9a-z]{8})$ web/index.php?r=link/go&short=$1 [NC,L,QSA]

And edit `config/db.php`.
