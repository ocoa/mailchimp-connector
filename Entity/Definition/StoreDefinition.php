<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace MailChimpBundle\Entity\Definition;

/**
 * Definition class for the Store connector object
 *
 */
trait StoreDefinition
{    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $domain;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $emailAddress;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $currencyCode;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $moneyFormat;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $primaryLocale;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $timezone;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $phone;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $id;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $listId;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $name;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $platform;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $address;
	
    

	
	/**
	 * Get domain
	 *
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}

	/**
	 * Set domain
	 *
	 * @param  string $domain
	 * @return Store
	 */
	public function setDomain($domain)
	{
		$this->domain = $domain;
		
		return $this;
	}	
    

	
	/**
	 * Get emailAddress
	 *
	 * @return string
	 */
	public function getEmailAddress()
	{
		return $this->emailAddress;
	}

	/**
	 * Set emailAddress
	 *
	 * @param  string $emailAddress
	 * @return Store
	 */
	public function setEmailAddress($emailAddress)
	{
		$this->emailAddress = $emailAddress;
		
		return $this;
	}	
    

	
	/**
	 * Get currencyCode
	 *
	 * @return string
	 */
	public function getCurrencyCode()
	{
		return $this->currencyCode;
	}

	/**
	 * Set currencyCode
	 *
	 * @param  string $currencyCode
	 * @return Store
	 */
	public function setCurrencyCode($currencyCode)
	{
		$this->currencyCode = $currencyCode;
		
		return $this;
	}	
    

	
	/**
	 * Get moneyFormat
	 *
	 * @return string
	 */
	public function getMoneyFormat()
	{
		return $this->moneyFormat;
	}

	/**
	 * Set moneyFormat
	 *
	 * @param  string $moneyFormat
	 * @return Store
	 */
	public function setMoneyFormat($moneyFormat)
	{
		$this->moneyFormat = $moneyFormat;
		
		return $this;
	}	
    

	
	/**
	 * Get primaryLocale
	 *
	 * @return string
	 */
	public function getPrimaryLocale()
	{
		return $this->primaryLocale;
	}

	/**
	 * Set primaryLocale
	 *
	 * @param  string $primaryLocale
	 * @return Store
	 */
	public function setPrimaryLocale($primaryLocale)
	{
		$this->primaryLocale = $primaryLocale;
		
		return $this;
	}	
    

	
	/**
	 * Get timezone
	 *
	 * @return string
	 */
	public function getTimezone()
	{
		return $this->timezone;
	}

	/**
	 * Set timezone
	 *
	 * @param  string $timezone
	 * @return Store
	 */
	public function setTimezone($timezone)
	{
		$this->timezone = $timezone;
		
		return $this;
	}	
    

	
	/**
	 * Get phone
	 *
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Set phone
	 *
	 * @param  string $phone
	 * @return Store
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
		
		return $this;
	}	
    

	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set id
	 *
	 * @param  string $id
	 * @return Store
	 */
	public function setId($id)
	{
		$this->id = $id;
		
		return $this;
	}	
    

	
	/**
	 * Get listId
	 *
	 * @return string
	 */
	public function getListId()
	{
		return $this->listId;
	}

	/**
	 * Set listId
	 *
	 * @param  string $listId
	 * @return Store
	 */
	public function setListId($listId)
	{
		$this->listId = $listId;
		
		return $this;
	}	
    

	
	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set name
	 *
	 * @param  string $name
	 * @return Store
	 */
	public function setName($name)
	{
		$this->name = $name;
		
		return $this;
	}	
    

	
	/**
	 * Get platform
	 *
	 * @return string
	 */
	public function getPlatform()
	{
		return $this->platform;
	}

	/**
	 * Set platform
	 *
	 * @param  string $platform
	 * @return Store
	 */
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		
		return $this;
	}	
    

	
	/**
	 * Get address
	 *
	 * @return Object
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Set address
	 *
	 * @param  Object $address
	 * @return Store
	 */
	public function setAddress($address)
	{
		$this->address = $address;
		
		return $this;
	}	
}