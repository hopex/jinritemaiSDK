<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderStockUpRequest extends BaseRequest
{

	/**
	 * 确认货到付款订单
	 * 当货到付款订单是待确认状态（final_status=1）时，可调此接口确认订单。确认后，订单状态更新为“备货中”
	 */
	public function __construct()
	{
		$this->method = 'order.stockUp';
		$this->path = '/order/stockUp';
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
