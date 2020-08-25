<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SkuEditCodeRequest extends BaseRequest
{

	/**
	 * 修改sku编码
	 */
	public function __construct()
	{
		$this->method='sku.editCode';
		$this->path='/sku/editCode';
	}

	/**
	 * 商品id
	 * @param string $productId
	 */
	public function setProductId($productId)
	{
		$this->paramJson['product_id']=(string)$productId;
	}

	/**
	 * skuid
	 * @param string $skuId
	 */
	public function setSkuId($skuId)
	{
		$this->paramJson['sku_id']=(string)$skuId;
	}

	/**
	 * 编码
	 * @param string $code
	 */
	public function setCode($code)
	{
		$this->paramJson['code']=(string)$code;
	}
}
