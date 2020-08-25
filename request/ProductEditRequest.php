<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductEditRequest extends BaseRequest
{

	/**
	 * 编辑商品相关信息
	 * 编辑提交后默认自动提交审核，审核通过后，更新线上数据。
	 */
	public function __construct()
	{
		$this->method='product.edit';
		$this->path='/product/edit';
	}

	/**
	 * 外部商品id，接入方的商品id需为数字字符串，max = int64
	 * @param string $cid
	 */
	public function setOutProductId($outProductId)
	{
		$this->paramJson['out_product_id'] = (string)$outProductId;
	}

	/**
	 * 商品名称，最多30个字符，不能含emoj表情
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->paramJson['name'] = (string)$name;
	}

	/**
	 * 商品轮播图
	 * @param string $pic 多张图片用 "|" 分开，第一张图为主图，最多5张，至少600x600，大小不超过1M
	 */
	public function setPic($pic)
	{
		$this->paramJson['pic'] = (string)$pic;
	}

	/**
	 * 商品描述
	 * @param string $description 目前只支持图片。多张图片用 "|" 分开。不能用其他网站的文本粘贴，这样会出现css样式不兼容
	 */
	public function setDescription($description)
	{
		$this->paramJson['description'] = (string)$description;
	}

	/**
	 * 一级分类id
	 * @param string $firstCid
	 */
	public function setFirstCid($firstCid)
	{
		$this->paramJson['first_cid'] = (string)$firstCid;
	}

	/**
	 * 二级分类id
	 * @param string $secondCid
	 */
	public function setSecondCid($secondCid)
	{
		$this->paramJson['second_cid'] = (string)$secondCid;
	}

	/**
	 * 三级分类id
	 * @param string $thirdCid
	 */
	public function setThirdCid($thirdCid)
	{
		$this->paramJson['third_cid'] = (string)$thirdCid;
	}

	/**
	 * 规格id
	 * @param string $specId 要先创建商品通用规格, 如颜色-尺寸
	 */
	public function setSpecId($specId)
	{
		$this->paramJson['spec_id'] = (string)$specId;
	}

	/**
	 * 客服号码
	 * @param string $mobile
	 */
	public function setMobile($mobile)
	{
		$this->paramJson['mobile'] = (string)$mobile;
	}

	/**
	 * 属性名称|属性值
	 * @param string $productFormat 用|分隔, 多组之间用^分开
	 */
	public function setProductFormat($productFormat)
	{
		$this->paramJson['product_format'] = (string)$productFormat;
	}

	/**
	 * 预售类型
	 * @param string $recommendRemark 1-全款预售，0-非预售，默认0
	 */
	public function setPresellType($presellType)
	{
		$this->paramJson['presell_type'] = (string)$presellType;
	}

	/**
	 * 预售结束后，几天发货
	 * @param string $presellDelay 1-全款预售，0-非预售，默认0
	 */
	public function setPresellDelay($presellDelay)
	{
		$this->paramJson['presell_delay'] = (string)$presellDelay;
	}

	/**
	 * 预售结束时间
	 * @param string $presellEndTime 几天发货，可以选择2-30
	 */
	public function setPresellEndTime($presellEndTime)
	{
		$this->paramJson['presell_end_time'] = (string)$presellEndTime;
	}

	/**
	 * 提交方式
	 * @param string $commit "1"：编辑后立即提交审核；"2"：编辑后仅保存，不提审
	 */
	public function setCommit($commit)
	{
		$this->paramJson['commit'] = (string)$commit;
	}
}
