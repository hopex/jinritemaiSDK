<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class RefundShopRefundRequest extends BaseRequest
{

	/**
	 * 商家处理备货中退款申请
	 * 订单备货中，用户申请退款，商家处理。
	 * 接口使用场景及order_status变更情况
	 * 原始订单状态码 16（退款中-用户申请）	
	 * 同意退款后 17（退款中-商家同意）
	 * 拒绝退款申请后3（已发货）
	 */
	public function __construct()
	{
		$this->method = 'refund.shopRefund';
		$this->path = '/refund/shopRefund';
	}

	/**
	 * 父订单ID，须带字母A
	 * @param string $orderId
	 */
	public function setOrderId($orderId)
	{
		$this->paramJson['order_id'] = (string)$orderId;
	}


	/**
	 * 处理方式
	 * @param string $type 1：同意退款 2：不同意退款
	 */
	public function setType($type)
	{
		$this->paramJson['type'] = (string)$type;
	}

	/**
	 * 由接口/order/logisticsCompanyList返回的物流公司列表中对应的ID
	 * @param string $logisticsId type = 2 时必须填写物流公司ID
	 */
	public function setLogisticsId($logisticsId)
	{
		$this->paramJson['logistics_id'] = (string)$logisticsId;
	}

	/**
	 * 物流单号
	 * @param string $logisticsCode type = 2 时必须填写物流单号
	 */
	public function setLogisticsCode($logisticsCode)
	{
		$this->paramJson['logistics_code'] = (string)$logisticsCode;
	}
}
