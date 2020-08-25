<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderLogisticsEditRequest extends BaseRequest
{

	/**
	 * 订单发货
	 * 修改已发货订单（final_status=3）的发货物流信息
	 */
	public function __construct()
	{
		$this->method = 'order.logisticsEdit';
		$this->path = '/order/logisticsEdit';
	}

	/**
	 * 父订单ID，由orderList接口返回
	 * @param string $orderId
	 */
	public function setOrderId($orderId)
	{
		$this->paramJson['order_id'] = (string)$orderId;
	}

	/**
	 * 物流公司ID,由接口/order/logisticsCompanyList返回的物流公司列表中对应的ID
	 * @param string $logisticsId
	 */
	public function setLogisticsId($logisticsId)
	{
		$this->paramJson['logistics_id'] = (string)$logisticsId;
	}

	/**
	 * 物流公司名称
	 * @param string $company
	 */
	public function setCompany($company)
	{
		$this->paramJson['company'] = (string)$company;
	}

	/**
	 * 运单号
	 * @param string $logisticsCode
	 */
	public function setLogisticsCode($logisticsCode)
	{
		$this->paramJson['logistics_code'] = (string)$logisticsCode;
	}
}
