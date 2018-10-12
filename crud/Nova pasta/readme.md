# CRUD FRAMEWORK
Pequeno framework orientado a objetos.

Requisitos.
PHP >= 5.6
MySql

Possue a seguinte estrutura:
/app
/css
/img
/inc
/js
/upload
index.php


## Config
Defina as configurações de conexão ao banco de dados MySql.
/app/Config.inc.php

```php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBSA', 'compras');
```

Tabem é importante configurar a url do sistema em:
/inc/header.php

```php
include "./_app/Config.inc.php";
$base_url="http://localhost/sistema/";
$url = $_SERVER ['REQUEST_URI'];
```

## ## Classes
- Create
- Delete
- Read
- Update
- Check
