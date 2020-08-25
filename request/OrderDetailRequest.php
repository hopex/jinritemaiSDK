<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderDetailRequest extends BaseRequest
{

	/**
	 * 订单的详情信息
	 * 根据订单ID，获取单个订单的详情信息
	 */
	public function __construct()
	{
		$this->method = 'order.detail';
		$this->path = '/order/detail';
	}

	/**
	 * 父订单id
	 * @param string $orderId 由orderList接口返回
	 */
	public function setOrderId($orderId)
	{
		$this->paramJson['order_id'] = (string)$orderId;
	}
}
