<?php

namespace jinritemai;

use Exception;
use GuzzleHttp\Client;
use jinritemai\exception\JinritemaiRequestException;
use jinritemai\request\BaseRequest;
use jinritemai\exception\JinritemaiResponseException;

class JinritemaiService
{
	/**
	 * 接口地址
	 */
	public $appHost='https://openapi-fxg.jinritemai.com';
	/**
	 * 应用创建完成后被分配的key
	 */
	public $appKey;

	/**
	 * 应用创建完成后被分配的Secret
	 */
	public $appSecret;

	/**
	 * 用于调用 API 的 access_token
	 */
	public $accessToken;

	/**
	 * API协议版本
	 */
	public $appVersion='2';

	/**
	 * 初始化服务
	 * @param string $appKey
	 * @param string $appSecret
	 */
	public function __construct($appKey,$appSecret)
	{
		$this->appKey=$appKey;
		$this->appSecret=$appSecret;
	}

	/**
	 * 签名
	 * @param array $signArr 签名字段数组
	 * @return string
	 */
	public function makeSign($signArr)
	{
		ksort($signArr,SORT_STRING);
		$signStr='';
		foreach ($signArr as $k => $v) {
            $signStr .= $k . $v;
        }
		return md5($this->appSecret . $signStr . $this->appSecret);
	}


	/**
	 * 构建GET请求Query
	 * @param string $paramJson 业务参数JSON
	 * @param string $method 接口方法
	 * @param string $accessToken
	 * @return array
	 */
	public function buildRequestQuery($paramJson,$method,$accessToken=null)
	{
		$app_key = $this->appKey;
		$param_json=$paramJson;
        $timestamp = date('Y-m-d H:i:s',time());
		$v = $this->appVersion;
		$access_token = $accessToken;
		$signArr=compact('app_key', 'method', 'param_json', 'timestamp', 'v');
		$sign=$this->makeSign($signArr);
		if(!is_null($access_token)){
			return compact('app_key', 'method', 'param_json', 'timestamp', 'v','sign','access_token');
		}
		return compact('app_key', 'method', 'param_json', 'timestamp', 'v','sign');
	}


	/**
	 * httpGet
	 * @param BaseRequest $request
	 * @param string $accessToken
	 */
	public function httpGet(BaseRequest $request,$accessToken=null)
	{		
		$paramJson=$request->getParamJson();
		$method=$request->getMethod();
		$path=$request->getPath();
		$options=[
			'query' =>$this->buildRequestQuery($paramJson,$method,$accessToken)
		];
		var_dump($options);
		return $this->request($path,'GET',$options);
	}

	/**
	 * httpPost
	 * @param BaseRequest $request
	 * @param string $accessToken
	 */
	public function httpPost(BaseRequest $request,$accessToken=null)
	{
		$paramJson=$request->getParamJson();
		$method=$request->getMethod();
		$path=$request->getPath();
		$options=[
			'query' =>$this->buildRequestQuery($paramJson,$method,$accessToken)
		];
		return $this->request($path,'GET',$options);
	}

	/**
	 * 请求接口
	 * @param string $path 接口地址
	 * @param string $method
	 * @param array $options
	 */
	public function request($path,$method,$options)
	{
		$client=new Client([
			'base_uri'=>$this->appHost
		]);
		$response=null;
		try {
			$response = $client->request($method,$path,$options);
        } catch (Exception $e) {
            throw new JinritemaiRequestException($e->getMessage());
		}
		$respBody = json_decode($response->getBody()->getContents(), true);
		$errno = $respBody['err_no'] ?? $respBody['errno'] ?? 0;
        $message = $respBody['message'];
        if ($errno !== 0) {
            throw new JinritemaiResponseException($message, $errno);
		}
		return $respBody['data'] ?? [];
	}
}
