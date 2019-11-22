# Resizer

**Resizer** - небольшой скрипт, позволяющий динамично перемещать объекты в [**VoidFramework**](https://github.com/winforms-php/VoidFramework)

### Установка (Qero)

```cmd
php Qero.phar install winforms-php/resizer
```

### Использование

**resize** (NetObject $object, array $config): Timer - перемещает указанный объект

```php
<?php

namespace VoidEngine;

resize ($object, [
    'x'        => 128,
    'y'        => 64,
    'w'        => 120,
    'h'        => 96,
    'speed'    => 0.1,
    'callable' => fn ($self) => pre ($self->caption)
])
```

$config принимает параметры:

| Параметр | Описание |
| - | - |
| x | Абсолютная левая координата объекта |
| y | Абсолютная верхняя координата объекта |
| w | Абсолютная ширина объекта |
| h | Абсолютная высота объекта |
| speed | (Необязательно) Скорость изменения абсолютных величин (число от 0 до 1, по умолчанию - 0.3) |
| callable | (Необязательно) Анонимная функция, которая будет вызвана по окончанию перемещения объекта |
