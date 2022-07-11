<h1 align="center"> API 响应定义 </h1>

<p align="center"> .</p>


## 安装

```shell
$ composer require wl1524520/response -vvv
$ php artisan vendor:publish --tag=wanglu-response --force
```

## 使用

在项目 composer.json 中添加如下项目
```php
"autoload": {
    "files": [
        "app/response.php"
    ]
},
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/wl1524520/response/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/wl1524520/response/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT