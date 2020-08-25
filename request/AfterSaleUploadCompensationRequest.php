<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class AfterSaleUploadCompensationRequest extends BaseRequest
{

	/**
	 * 货到付款订单上传退款凭证
	 * 货到付款订单，用户申请退货，商家确认收到退货时（final_status=12 or 14时）。如果需要上传退款凭证，需要调此接口！
	 */
	public function __construct()
	{
		$this->method = 'afterSale.uploadCompensation';
		$this->path = '/afterSale/uploadCompensation';
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
	 * 凭证备注
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		$this->paramJson['comment'] = (string)$comment;
	}

	/**
	 * 凭证图片
	 * @param string $evidence 值传图片的url地址
	 */
	public function setEvidence($evidence)
	{
		$this->paramJson['evidence'] = (string)$evidence;
	}
}
