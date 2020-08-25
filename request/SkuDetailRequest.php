<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SkuDetailRequest extends BaseRequest
{

	/**
	 * sku详情
	 * 根据sku id获取商品sku详情
	 */
	public function __construct()
	{
		$this->method='sku.detail';
		$this->path='/sku/detail';
	}

	/**
	 * sku id
	 * @param string $skuId
	 */
	public function setProductId($skuId)
	{
		$this->paramJson['sku_id']=(string)$skuId;
	}
}
