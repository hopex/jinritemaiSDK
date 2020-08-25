<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderLogisticsCompanyListRequest extends BaseRequest
{

	/**
	 * 获取快递公司列表
	 * 获取平台支持的快递公司列表,开发者需自行维护快递公司ID的映射关系
	 */
	public function __construct()
	{
		$this->method = 'order.logisticsCompanyList';
		$this->path = '/order/logisticsCompanyList';
	}
}
