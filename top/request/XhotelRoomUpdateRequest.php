<?php
/**
 * TOP API: taobao.xhotel.room.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-14 17:01:58
 */
class XhotelRoomUpdateRequest
{
	/** 
	 * 宝贝描述
	 **/
	private $desc;
	
	/** 
	 * gid酒店商品id
	 **/
	private $gid;
	
	/** 
	 * 购买须知
	 **/
	private $guide;
	
	/** 
	 * 酒店商品是否提供发票
	 **/
	private $hasReceipt;
	
	/** 
	 * room级别库存日历，可选参数。备注：taobao酒店库存分为room级别共享库存和rate级别私用库存（请参考taobao.xhotel.rate.add接口查看库存在下单时候的校验逻辑）。请top用户根据自己的数据模型选择合适的对接方式。示例：[{"date":2011-01-28,"quota":10},{"date":2011-01-29,"quota":10}]
	 **/
	private $inventory;
	
	/** 
	 * 酒店商品图片。类型:JPG,GIF;最大长度:500K。支持的文件类型：gif,jpg,jpeg,png。发布的时候只能发布一张图片
	 **/
	private $pic;
	
	/** 
	 * 发票说明，不能超过100个字
	 **/
	private $receiptInfo;
	
	/** 
	 * 发票类型为其他时的发票描述,不能超过30个字
	 **/
	private $receiptOtherTypeDesc;
	
	/** 
	 * 发票类型。A,B。分别代表： A:酒店住宿发票,B:其他
	 **/
	private $receiptType;
	
	/** 
	 * 宝贝名称
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setGuide($guide)
	{
		$this->guide = $guide;
		$this->apiParas["guide"] = $guide;
	}

	public function getGuide()
	{
		return $this->guide;
	}

	public function setHasReceipt($hasReceipt)
	{
		$this->hasReceipt = $hasReceipt;
		$this->apiParas["has_receipt"] = $hasReceipt;
	}

	public function getHasReceipt()
	{
		return $this->hasReceipt;
	}

	public function setInventory($inventory)
	{
		$this->inventory = $inventory;
		$this->apiParas["inventory"] = $inventory;
	}

	public function getInventory()
	{
		return $this->inventory;
	}

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function setReceiptInfo($receiptInfo)
	{
		$this->receiptInfo = $receiptInfo;
		$this->apiParas["receipt_info"] = $receiptInfo;
	}

	public function getReceiptInfo()
	{
		return $this->receiptInfo;
	}

	public function setReceiptOtherTypeDesc($receiptOtherTypeDesc)
	{
		$this->receiptOtherTypeDesc = $receiptOtherTypeDesc;
		$this->apiParas["receipt_other_type_desc"] = $receiptOtherTypeDesc;
	}

	public function getReceiptOtherTypeDesc()
	{
		return $this->receiptOtherTypeDesc;
	}

	public function setReceiptType($receiptType)
	{
		$this->receiptType = $receiptType;
		$this->apiParas["receipt_type"] = $receiptType;
	}

	public function getReceiptType()
	{
		return $this->receiptType;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.room.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->desc,50000,"desc");
		RequestCheckUtil::checkNotNull($this->gid,"gid");
		RequestCheckUtil::checkMaxLength($this->guide,600,"guide");
		RequestCheckUtil::checkMaxLength($this->receiptInfo,100,"receiptInfo");
		RequestCheckUtil::checkMaxLength($this->receiptOtherTypeDesc,30,"receiptOtherTypeDesc");
		RequestCheckUtil::checkMaxLength($this->title,60,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
