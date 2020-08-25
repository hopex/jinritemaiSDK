<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AfterSaleRefundProcessDetailRequest extends BaseRequest
{

	/**
	 * 获取售后详情（建议使用）
	 * 订单已发货，买家申请售后。可通过该接口获取售后详细信息（建议使用）
	 */
	public function __construct()
	{
		$this->method = 'afterSale.refundProcessDetail';
		$this->path = '/afterSale/refundProcessDetail';
	}

	/**
	 * 子订单ID，不带字母A
	 * @param string $orderId
	 */
	public function setOrderId($orderId)
	{
		$this->paramJson['order_id'] = (string)$orderId;
	}
}
