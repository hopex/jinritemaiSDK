<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class RefundOrderListRequest extends BaseRequest
{

	/**
	 * 获取备货中有退款的订单列表
	 * 在订单发货前，用户能申请退款，但此时只能申请整单退。
	 */
	public function __construct()
	{
		$this->method = 'refund.orderList';
		$this->path = '/refund/orderList';
	}

	/**
	 * 类型
	 * @param string $type
	 *  1对应子订单状态16、17、21
	 *  2对应子订单状态16
	 *  3对应子订单状态21
	 */
	public function setType($type)
	{
		$this->paramJson['type'] = (string)$type;
	}

	/**
	 * 开始时间
	 * @param string $startTime 2018/06/03 00:00:00
	 */
	public function setStartTime($startTime)
	{
		$this->paramJson['start_time'] = (string)$startTime;
	}

	/**
	 * 结束时间
	 * @param string $endTime 2018/06/03 00:01:00
	 */
	public function setEndTime($endTime)
	{
		$this->paramJson['end_time'] = (string)$endTime;
	}

	/**
	 * 订单排序类型
	 * @param string $orderBy 1、默认按订单创建时间搜索 2、值为“create_time”：按订单创建时间；值为“update_time”：按订单更新时间
	 */
	public function setOrderBy($orderBy)
	{
		$this->paramJson['order_by'] = (string)$orderBy;
	}

	/**
	 * 订单排序方式
	 * @param string $isDesc desc(最近的在前)，默认为asc（最近的在后）
	 */
	public function setIsDesc($isDesc)
	{
		$this->paramJson['is_desc'] = (string)$isDesc;
	}

	/**
	 * 页数
	 * @param string $page 默认为0，第一页从0开始
	 */
	public function setPage($page)
	{
		$this->paramJson['page'] = (string)$page;
	}

	/**
	 * 每页订单数
	 * @param string $page 默认为10，最大100
	 */
	public function setSize($size)
	{
		$this->paramJson['size'] = (string)$size;
	}
}
