<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class OrderReplyServiceRequest extends BaseRequest
{

	/**
	 * 回复服务请求
	 * 回复客服向店铺发起的服务请求
	 */
	public function __construct()
	{
		$this->method = 'order.replyService';
		$this->path = '/order/replyService';
	}

	/**
	 * 回复内容
	 * @param string $reply
	 */
	public function setReply($reply)
	{
		$this->paramJson['reply'] = (string)$reply;
	}

	/**
	 * 服务请求列表中获取的id
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->paramJson['id'] = (string)$id;
	}
}
