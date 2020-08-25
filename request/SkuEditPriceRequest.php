<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SkuEditPriceRequest extends BaseRequest
{

	/**
	 * 编辑sku价格
	 */
	public function __construct()
	{
		$this->method='sku.editPrice';
		$this->path='/sku/editPrice';
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
	 * 售价 (单位 分)
	 * @param string $price
	 */
	public function setPrice($price)
	{
		$this->paramJson['price']=(string)$price;
	}
}
