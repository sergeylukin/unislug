# Unislug

Library that allows converting unicode strings into slug-ready strings

# Installation

Use composer to require in your `composer.json`:

```
"sergeylukin/unislug": "dev-master"
```

or just run `composer require sergeylukin/unislug`

# Usage

```php
<?php require __DIR__ . '/vendor/autoload.php';

use Sergeylukin\Unislug;

print_r(Unislug::convert('<UNICODE STRING>');
```

# Development

Install [git](http://git-scm.com) and [composer](http://getcomposer.org)

```
git clone https://github.com/sergeylukin/unislug.git
composer install
```

Run tests:

```
./vendor/bin/codecept run
```

# License

MIT
