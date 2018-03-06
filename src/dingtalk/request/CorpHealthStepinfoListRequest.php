<?php
namespace Weikaiii\DingtalkR;
/**
 * dingtalk API: dingtalk.corp.health.stepinfo.list request
 * 
 * @author auto create
 * @since 1.0, 2018.01.19
 */
class CorpHealthStepinfoListRequest
{
	/** 
	 * 可以传入用户userid或者部门id
	 **/
	private $objectId;
	
	/** 
	 * 时间列表，注意时间格式是YYYYMMDD
	 **/
	private $statDates;
	
	/** 
	 * 0表示取用户步数，1表示取部门步数
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setObjectId($objectId)
	{
		$this->objectId = $objectId;
		$this->apiParas["object_id"] = $objectId;
	}

	public function getObjectId()
	{
		return $this->objectId;
	}

	public function setStatDates($statDates)
	{
		$this->statDates = $statDates;
		$this->apiParas["stat_dates"] = $statDates;
	}

	public function getStatDates()
	{
		return $this->statDates;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.health.stepinfo.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->objectId,"objectId");
		RequestCheckUtil::checkNotNull($this->statDates,"statDates");
		RequestCheckUtil::checkMaxListSize($this->statDates,31,"statDates");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
