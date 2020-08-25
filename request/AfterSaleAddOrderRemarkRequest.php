<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AfterSaleAddOrderRemarkRequest extends BaseRequest
{

	/**
	 * 商家为订单添加售后备注
	 * 此接口可用于给备货中退款的订单、已发货退货/仅退款的订单，添加售后备注
	 */
	public function __construct()
	{
		$this->method = 'afterSale.addOrderRemark';
		$this->path = '/afterSale/addOrderRemark';
	}

	/**
	 * 子订单ID
	 * @param string $orderId
	 */
	public function setOrderId($orderId)
	{
		$this->paramJson['order_id'] = (string)$orderId;
	}

	/**
	 * 售后备注内容
	 * @param string $remark
	 */
	public function setRemark($remark)
	{
		$this->paramJson['remark'] = (string)$remark;
	}
}
