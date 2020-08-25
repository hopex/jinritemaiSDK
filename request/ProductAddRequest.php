<?php

namespace jinritemai\request;

use jinritemai\request\BaseRequest;

class ProductAddRequest extends BaseRequest
{

	/**
	 * 创建商品的接口
	 * 商品添加成功后会自动进入平台的异步机审流程，机审完成后将自动上架。
	 */
	public function __construct()
	{
		$this->method = 'product.add';
		$this->path = '/product/add';
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
	 * 划线价
	 * @param string $marketPrice 单位分
	 */
	public function setMarketPrice($marketPrice)
	{
		$this->paramJson['market_price'] = (string)$marketPrice;
	}

	/**
	 * 售价
	 * @param string $discountPrice 单位分
	 */
	public function setDiscountPrice($discountPrice)
	{
		$this->paramJson['discount_price'] = (string)$discountPrice;
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
	 * 主规格id
	 * @param string $specPic 如颜色-尺寸, 颜色就是主规格, 颜色如黑,白,黄,它们的id|图片url
	 */
	public function setSpecPic($specPic)
	{
		$this->paramJson['spec_pic'] = (string)$specPic;
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
	 * 商品重量 (单位:克)
	 * @param string $weight 范围: 10克 - 9999990克
	 */
	public function setWeight($weight)
	{
		$this->paramJson['weight'] = (string)$weight;
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
	 * 支付方式
	 * @param string $payType 0-货到付款，1-在线支付，2-二者都支持
	 */
	public function setPayType($payType)
	{
		$this->paramJson['pay_type'] = (string)$payType;
	}

	/**
	 * 商家推荐语
	 * @param string $recommendRemark 不能含emoj表情
	 */
	public function setRecommendRemark($recommendRemark)
	{
		$this->paramJson['recommend_remark'] = (string)$recommendRemark;
	}

	/**
	 * 品牌id 
	 * @param string $brandId 请求店铺授权品牌接口获取) (效果即为商品详情页面中的品牌字段)
	 */
	public function setBrandId($brandId)
	{
		$this->paramJson['brand_id'] = (string)$brandId;
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
	 * 承诺发货时间，单位是天
	 * @param string $deliveryDelayDay 可选值为: 2、3、5、7、10、15
	 */
	public function setDeliveryDelayDay($deliveryDelayDay)
	{
		$this->paramJson['delivery_delay_day'] = (string)$deliveryDelayDay;
	}

	/**
	 * 商品创建和编辑操作支持设置质检报告链接
	 * @param string $qualityReport 多个图片以逗号分隔
	 */
	public function setQualityReport($qualityReport)
	{
		$this->paramJson['quality_report'] = (string)$qualityReport;
	}

	/**
	 * 商品创建和编辑操作支持设置品类资质链接
	 * @param string $classQuality 多个图片以逗号分隔
	 */
	public function setClassQuality($classQuality)
	{
		$this->paramJson['class_quality'] = (string)$classQuality;
	}
}
