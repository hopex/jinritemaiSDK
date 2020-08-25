<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductListRequest extends BaseRequest
{

	/**
	 * 获取商品列表
	 */
	public function __construct()
	{
		$this->method='product.list';
		$this->path='/product/list';
	}

	/**
	 * 设置第几页（第一页为0）
	 * @param string $page
	 */
	public function setPage($page)
	{
		$this->paramJson['page']=(string)$page;
	}

	/**
	 * 设置每页返回条数
	 * @param string $size
	 */
	public function setSize($size)
	{
		$this->paramJson['size']=(string)$size;
	}

	/**
	 * 指定状态返回商品列表
	 * @param string $status 0上架 1下架
	 */
	public function setStatus($status)
	{
		$this->paramJson['status']=(string)$status;
	}

	/**
	 * 指定审核状态返回商品列表
	 * @param string 1未提审 2审核中 3审核通过 4审核驳回 5封禁
	 */
	public function setCheckStatus($checkStatus)
	{
		$this->paramJson['check_status']=(string)$checkStatus;
	}
}
