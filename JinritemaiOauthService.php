<?php

namespace jinritemai;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use jinritemai\exception\JinritemaiRequestException;
use jinritemai\exception\JinritemaiResponseException;

class JinritemaiOauthService
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
	 * 获取授权地址
	 * @param string $redirectUri 
	 * @param string
	 */
	public function getOauthUrl($redirectUri)
	{
		$url='https://fxg.jinritemai.com/index.html#/ffa/open/applicationAuthorize';
		$query=[
			'app_id'=>$this->appKey,
			'response_type'=>'code',
			'redirect_uri'=>$redirectUri,
			'state'=>md5(date('Y-m-d H:i:s',time())),
		];
		return $url.'?'.http_build_query($query);
	}


	/**
	 * 请求accesstoekn信息
	 * @param string $code
	 * @param array
	 */
	public function requestAccessToken($code)
	{
		$path='/oauth2/access_token';
		$query=[
			'app_id'=>$this->appKey,
			'app_secret'=>$this->appSecret,
			'grant_type'=>'authorization_code',
			'code'=>$code,
		];
		$options=[
			'query' =>$query
		];
		return $this->request($path,'GET',$options);
	}

	/**
	 * 请求自己accesstoekn信息
	 * @param string $accessToken
	 */
	public function requestSelfAccessToken()
	{		
		$path='/oauth2/access_token';
		$query=[
			'app_id'=>$this->appKey,
			'app_secret'=>$this->appSecret,
			'grant_type'=>'authorization_self'
		];
		$options=[
			'query' =>$query
		];
		return $this->request($path,'GET',$options);
	}

	/**
	 * 刷新accesstoekn信息
	 * @param string $refreshToken
	 */
	public function requestRefreshToken($refreshToken)
	{		
		$path='/oauth2/refresh_token';
		$query=[
			'app_id'=>$this->appKey,
			'app_secret'=>$this->appSecret,
			'grant_type'=>'refresh_token',
			'refresh_token'=>$refreshToken
		];
		$options=[
			'query' =>$query
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
		$respBody = json_decode($response->getBody(), true);
		$errno = $respBody['err_no'] ?? $respBody['errno'] ?? 0;
        $message = $respBody['message'];
        if ($errno !== 0) {
            throw new JinritemaiResponseException($message, $errno);
		}
		return $respBody['data'] ?? [];
	}
}
