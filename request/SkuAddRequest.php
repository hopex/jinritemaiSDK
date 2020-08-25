<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SkuAddRequest extends BaseRequest
{

	/**
	 * 添加SKU
	 * 单个规格可设置的规格值最多是20个
	 */
	public function __construct()
	{
		$this->method='sku.add';
		$this->path='/sku/add';
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
	 * 业务方自己的sku_id，
	 * @param string $outSkuId 唯一需为数字字符串，max = int64
	 */
	public function setOutSkuId($outSkuId)
	{
		$this->paramJson['out_sku_id']=(string)$outSkuId;
	}

	/**
	 * 规格id
	 * @param string $productId 依赖/spec/list接口的返回
	 */
	public function setSpecId($specId)
	{
		$this->paramJson['spec_id']=(string)$specId;
	}

	/**
	 * 子规格id
	 * @param string $specDetailIds 最多3级,如 100041|150041|160041 （ 女款|白色|XL）
	 */
	public function setSpecDetailIds($specDetailIds)
	{
		$this->paramJson['spec_detail_ids']=(string)$specDetailIds;
	}

	/**
	 * 库存 (必须大于0)
	 * @param string $stockNum
	 */
	public function setStockNum($stockNum)
	{
		$this->paramJson['stock_num']=(string)$stockNum;
	}

	/**
	 * 售价 (单位 分)
	 * @param string $price
	 */
	public function setPrice($price)
	{
		$this->paramJson['price']=(string)$price;
	}

	/**
	 * 结算价格 (单位 分)
	 * @param string $productId
	 */
	public function setSettlementPrice($settlementPrice)
	{
		$this->paramJson['settlement_price']=(string)$settlementPrice;
	}

	/**
	 * 商品编码
	 * @param string $code
	 */
	public function setCode($code)
	{
		$this->paramJson['code']=(string)$code;
	}

}
