<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SpecListRequest extends BaseRequest
{

	/**
	 * 获取规格列表
	 */
	public function __construct()
	{
		$this->method='spec.list';
		$this->path='/spec/list';
	}
}
