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

## 说明
### 支持的 HTTP 状态码
状态码 | 使用说明
---|---
200 | 成功, 用在不创建新资源的操作上
201 | 成功, 对创建新资源的 POST 操作进行响应
400 | 请求异常，比如请求中的 body 无法解析
401 | 没有进行认证或者认证非法
403 | 服务器已经理解请求，但是拒绝执行它
404 | 请求一个不存在的资源
422 | 用来表示校验错误
500 | 服务器内部错误

### 返回数据的结构
    200 和 201 接口返回，说明成功，返回的数据即为要传递给前端的数据；
    4xx 和 500 返回说明出错，出错时返回的数据结构如下:

```json
{
    "message": "出错信息",
    "errors": {
        "phone": [
            "手机号为必填项，参数名称 phone",
            "errors 字段为可选项"
        ]
    }
}
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/wl1524520/response/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/wl1524520/response/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT