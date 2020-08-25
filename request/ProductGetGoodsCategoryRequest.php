<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductGetGoodsCategoryRequest extends BaseRequest
{

	/**
	 * 获取商品分类列表
	 * 根据父分类id获取子分类
	 */
	public function __construct()
	{
		$this->method='product.getGoodsCategory';
		$this->path='/product/getGoodsCategory';
	}

	/**
	 * 分类id
	 * @param int $cid 父分类id,根据父id可以获取子分类，一级分类cid=0
	 */
	public function setCid($cid)
	{
		$this->paramJson['cid']=(string)$cid;
	}
}
