# laravel-image-factory
图片处理工厂，支持多种文件存储格式
```php
use Huozi\ImageFactory\Facade;

return Facade::image('url-or-image-path')->resize(50, 50);

```