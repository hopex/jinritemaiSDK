<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductGetCatePropertyRequest extends BaseRequest
{

	/**
	 * 根据商品分类获取对应的属性列表
	 * 调用API接口创建商品时，入参product_format（属性对）依赖此接口返回的值
	 */
	public function __construct()
	{
		$this->method = 'product.getCateProperty';
		$this->path = '/product/getCateProperty';
	}

	/**
	 * 一级分类id
	 * @param string $firstCid
	 */
	public function setFirstCid($firstCid)
	{
		$this->paramJson['first_cid'] = (string)$firstCid;
	}

	/**
	 * 二级分类id
	 * @param string $secondCid
	 */
	public function setSecondCid($secondCid)
	{
		$this->paramJson['second_cid'] = (string)$secondCid;
	}

	/**
	 * 三级分类id
	 * @param string $thirdCid
	 */
	public function setThirdCid($thirdCid)
	{
		$this->paramJson['third_cid'] = (string)$thirdCid;
	}
}
