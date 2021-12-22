# orange sms api

## Description

Un package pour envoyer des sms via l'api de orange middle africa.

## Installation

Utilisation de  composer:

```
$ composer require riftone07/orange-sms
```

## SMS Api

### Configuration

Ouvrez le `.env` et ajoutez une clé comme celle-ci :

    AUTHORIZATION_HEADER=xxxxxxxxxxxxxxxxxxxxxxxxxxxxx

Vous pouvez obtenir l'autorisation header au niveau de votre tableau de bord orange api 

### Comment l'utiliser

Creer une instance de l'objet 
```php

use Riftone07\OrangeSms\Sendsmsorange;


$sms = new Sendsmsorange();

$sms->sendMessage($telephone, $message);
```

## License

Riftone07 orange-smsest un logiciel open source sous licence [MIT license](https://github.com/mediumart/orange/blob/master/LICENSE.txt).
