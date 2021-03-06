<?php
/**
 * ALIPAY API: alipay.baitiaoprod.seller.status.query request
 *
 * @author auto create
 * @since 1.0, 2014-11-14 11:50:30
 */
class AlipayBaitiaoprodSellerStatusQueryRequest
{
	/** 
	 * 卖家淘宝账号id
	 **/
	private $taobaoSellerId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;

	
	public function setTaobaoSellerId($taobaoSellerId)
	{
		$this->taobaoSellerId = $taobaoSellerId;
		$this->apiParas["taobao_seller_id"] = $taobaoSellerId;
	}

	public function getTaobaoSellerId()
	{
		return $this->taobaoSellerId;
	}

	public function getApiMethodName()
	{
		return "alipay.baitiaoprod.seller.status.query";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

}
