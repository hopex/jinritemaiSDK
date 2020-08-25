<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class SpecAddRequest extends BaseRequest
{

	/**
	 * 添加规格
	 */
	public function __construct()
	{
		$this->method='spec.add';
		$this->path='/spec/add';
	}

	/**
	 * 店铺通用规格，能被同类商品通用。
	 * @param string $specs 多规格用^分隔，父规格与子规格用|分隔，子规格用,分隔
	 */
	public function setSpecs($specs)
	{
		$this->paramJson['specs']=(string)$specs;
	}

	/**
	 * 规格名
	 * @param string $name 如果不填，则规格名为子规格名用 "-" 自动生成
	 */
	public function setName($name)
	{
		$this->paramJson['name']=(string)$name;
	}
}
