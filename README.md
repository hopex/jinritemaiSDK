# jinritemaiSDK
抖店SDK

### 授权服务 JinritemaiOauthService
```php
  $appKey='';
  $appSecret='';
  $service=new JinritemaiOauthService($appKey,$appSecret);
  $res=$service->requestSelfAccessToken();
  var_dump($res);
```

### API服务 JinritemaiService

```php
  $appKey='';
  $appSecret='';
  $accessToken='';
  $service=new JinritemaiService($appKey,$appSecret);
  $req=new ProductGetGoodsCategoryRequest();
  $req->setCid(0);
  $res=$service->httpGet($req,$accessToken);
  var_dump($res);
```

