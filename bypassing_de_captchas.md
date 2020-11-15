# bypassing of captchas

## 1. Requerimientos previos

instalar librerias y paquetes necesarios
```bash
sudo apt-get install tesseract-ocr
sudo apt-get install libtesseract-dev
```

### 1.1 Entorno local y controlado de captchas
Verificar version php
```bash
php -v
PHP 7.4.11 (cli) (built: Oct  6 2020 10:34:39) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
   with Zend OPcache v7.4.11, Copyright (c), by Zend Technologies
```
Instalar la biblioteca grafica
```bash
sudo apt-get install php7.4-gd
```
Reiniciar Apache
```bash
sudo service apache2 restart
#o
sudo systemctl restart apache2.service
```
### 1.2 Montar Plantilla de captchas
Utilizar un recurso de la web en el que se proporcionan las plantillas.   
`Googlear: create a simple captcha script using php`

![Goglear create](/img/1.png)

![Pagina create captcha](/img/2.png)

[ALLPHPTRICKS](https://www.allphptricks.com/create-a-simple-captcha-script-using-php/)
