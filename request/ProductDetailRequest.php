<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductDetailRequest extends BaseRequest
{

	/**
	 * 获取商品的详细信息
	 * 默认读取的是线上数据，而非草稿数据；如无线上数据，则读取草稿数据
	 */
	public function __construct()
	{
		$this->method='product.detail';
		$this->path='/product/detail';
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
	 * 是否读取草稿
	 * @param boolean $showDraft "true"：读取草稿数据；"false"：读取上架数据
	 */
	public function setShowDraft($showDraft)
	{
		$this->paramJson['show_draft']=(string)$showDraft;
	}
}
