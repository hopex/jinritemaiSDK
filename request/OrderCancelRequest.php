<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderCancelRequest extends BaseRequest
{

	/**
	 * 取消订单
	 * 取消待确认或备货中的货到付款订单（final_status=1或2）
	 */
	public function __construct()
	{
		$this->method = 'order.cancel';
		$this->path = '/order/cancel';
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
