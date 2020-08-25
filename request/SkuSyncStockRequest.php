<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SkuEditPriceRequest extends BaseRequest
{

	/**
	 * 修改sku库存
	 * 同步库存时请注意sku对应商品的状态status和check_status, 下架、删除、禁封等状态的商品不予同步sku库存
	 */
	public function __construct()
	{
		$this->method='sku.syncStock';
		$this->path='/sku/syncStock';
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
	 * 库存 (可以为0)
	 * @param string $stockNum
	 */
	public function setStockNum($stockNum)
	{
		$this->paramJson['stock_num']=(string)$stockNum;
	}
}
