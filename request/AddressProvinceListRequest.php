<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AddressProvinceListRequest extends BaseRequest
{

	/**
	 * 获取省列表
	 * 获取平台支持的省列表
	 */
	public function __construct()
	{
		$this->method = 'address.provinceList';
		$this->path = '/address/provinceList';
	}
}
