# JatDemo Package
## A simple Hello World - dev PHP package

### Installation
```
composer require jatdemo/hello
```

### Usage
```
<?php

require __DIR__ . '/vendor/autoload.php';

$demo = new JatDemo\JatDemo();

echo $demo->helloDev(); // Hello Dev!

echo $demo->hello('Jatniel'); // Hello Jatniel!
```

### Testing
```
composer test
```

### Quality Tools
```
composer analyse
composer format
```

### License
MIT

### Author
Jatniel Guzmán

### Website
[jatniel.dev](https://jatniel.dev)
