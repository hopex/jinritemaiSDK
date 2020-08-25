<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SkuListRequest extends BaseRequest
{

	/**
	 * sku列表
	 * 根据商品id获取商品的sku列表
	 */
	public function __construct()
	{
		$this->method='sku.list';
		$this->path='/sku/list';
	}

	/**
	 * 商品id
	 * @param string $productId
	 */
	public function setProductId($productId)
	{
		$this->paramJson['product_id']=(string)$productId;
	}
}
