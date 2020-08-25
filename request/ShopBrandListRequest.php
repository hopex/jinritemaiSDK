<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ShopBrandListRequest extends BaseRequest
{

	/**
	 * 获取店铺的已授权品牌列表
	 * 调用API接口创建商品时，入参brand_id（品牌选项）依赖此接口返回的id
	 */
	public function __construct()
	{
		$this->method='shop.brandList';
		$this->path='/shop/brandList';
	}
}
