<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AddressAreaListListRequest extends BaseRequest
{

	/**
	 * 获取区列表
	 * 获取平台支持的区列表
	 */
	public function __construct()
	{
		$this->method = 'address.areaList';
		$this->path = '/address/areaList';
	}

	/**
	 * 市ID
	 * @param string $cityId
	 */
	public function setCityId($cityId)
	{
		$this->paramJson['city_id'] = (string)$cityId;
	}
}
