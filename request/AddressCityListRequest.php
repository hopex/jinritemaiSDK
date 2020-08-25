<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AddressAreaListListRequest extends BaseRequest
{

	/**
	 * 获取市列表
	 * 获取平台支持的市列表
	 */
	public function __construct()
	{
		$this->method = 'address.cityList';
		$this->path = '/address/cityList';
	}

	/**
	 * 省ID
	 * @param string $provinceId
	 */
	public function setProvinceId($provinceId)
	{
		$this->paramJson['province_id'] = (string)$provinceId;
	}
}
