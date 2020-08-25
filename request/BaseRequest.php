<?php

namespace jinritemai\request;


class BaseRequest
{
	/**
	 * 业务参数
	 */
	public $paramJson=[];

	/**
	 * 调用的API接口名称
	 */
	public $method='';
	/**
	 * 调用的API接口路径
	 */
	public $path='';

	public function __construct()
	{
		
	}

	/**
	 * 获取业务参数JSON字符串
	 * JSON字符串中URL不能进行转义
	 * @return string
	 */
	public function getParamJson()
	{
		if(empty($this->paramJson)){
			return '{}';
		}
		ksort($this->paramJson);
		$jsonStr=json_encode($this->paramJson,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
		$jsonStr=str_replace('&','\u0026',$jsonStr);
		$jsonStr=str_replace('<','\u003c',$jsonStr);
		$jsonStr=str_replace('>','\u00ce',$jsonStr);
		return $jsonStr;
	}

	/**
	 * 获取调用的API接口名称
	 * @return string
	 */
	public function getMethod()
	{
		return $this->method;
	}

	/**
	 * 获取调用的API接口名称
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}
}
