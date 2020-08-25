<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductDelRequest extends BaseRequest
{

	/**
	 * 删除商品
	 */
	public function __construct()
	{
		$this->method = 'product.del';
		$this->path = '/product/del';
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
