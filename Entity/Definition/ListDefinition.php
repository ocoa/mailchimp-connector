<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace MailChimpBundle\Entity\Definition;

/**
 * Definition class for the List connector object
 *
 */
trait ListDefinition
{    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $name;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $contact;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $permissionReminder;
	
    

	 /**
	 * @var blob
	 *
	 
	 */
	
	private $useArchiveBar;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $campaignDefaults;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $notifyOnSubscribe;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $notifyOnUnsubscribe;
	
    

	 /**
	 * @var blob
	 *
	 
	 */
	
	private $emailTypeOption;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $visibility;
	
    

	
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
	 * @return List
	 */
	public function setName($name)
	{
		$this->name = $name;
		
		return $this;
	}	
    

	
	/**
	 * Get contact
	 *
	 * @return Object
	 */
	public function getContact()
	{
		return $this->contact;
	}

	/**
	 * Set contact
	 *
	 * @param  Object $contact
	 * @return List
	 */
	public function setContact($contact)
	{
		$this->contact = $contact;
		
		return $this;
	}	
    

	
	/**
	 * Get permissionReminder
	 *
	 * @return string
	 */
	public function getPermissionReminder()
	{
		return $this->permissionReminder;
	}

	/**
	 * Set permissionReminder
	 *
	 * @param  string $permissionReminder
	 * @return List
	 */
	public function setPermissionReminder($permissionReminder)
	{
		$this->permissionReminder = $permissionReminder;
		
		return $this;
	}	
    

	
	/**
	 * Get useArchiveBar
	 *
	 * @return blob
	 */
	public function getUseArchiveBar()
	{
		return $this->useArchiveBar;
	}

	/**
	 * Set useArchiveBar
	 *
	 * @param  blob $useArchiveBar
	 * @return List
	 */
	public function setUseArchiveBar($useArchiveBar)
	{
		$this->useArchiveBar = $useArchiveBar;
		
		return $this;
	}	
    

	
	/**
	 * Get campaignDefaults
	 *
	 * @return Object
	 */
	public function getCampaignDefaults()
	{
		return $this->campaignDefaults;
	}

	/**
	 * Set campaignDefaults
	 *
	 * @param  Object $campaignDefaults
	 * @return List
	 */
	public function setCampaignDefaults($campaignDefaults)
	{
		$this->campaignDefaults = $campaignDefaults;
		
		return $this;
	}	
    

	
	/**
	 * Get notifyOnSubscribe
	 *
	 * @return string
	 */
	public function getNotifyOnSubscribe()
	{
		return $this->notifyOnSubscribe;
	}

	/**
	 * Set notifyOnSubscribe
	 *
	 * @param  string $notifyOnSubscribe
	 * @return List
	 */
	public function setNotifyOnSubscribe($notifyOnSubscribe)
	{
		$this->notifyOnSubscribe = $notifyOnSubscribe;
		
		return $this;
	}	
    

	
	/**
	 * Get notifyOnUnsubscribe
	 *
	 * @return string
	 */
	public function getNotifyOnUnsubscribe()
	{
		return $this->notifyOnUnsubscribe;
	}

	/**
	 * Set notifyOnUnsubscribe
	 *
	 * @param  string $notifyOnUnsubscribe
	 * @return List
	 */
	public function setNotifyOnUnsubscribe($notifyOnUnsubscribe)
	{
		$this->notifyOnUnsubscribe = $notifyOnUnsubscribe;
		
		return $this;
	}	
    

	
	/**
	 * Get emailTypeOption
	 *
	 * @return blob
	 */
	public function getEmailTypeOption()
	{
		return $this->emailTypeOption;
	}

	/**
	 * Set emailTypeOption
	 *
	 * @param  blob $emailTypeOption
	 * @return List
	 */
	public function setEmailTypeOption($emailTypeOption)
	{
		$this->emailTypeOption = $emailTypeOption;
		
		return $this;
	}	
    

	
	/**
	 * Get visibility
	 *
	 * @return string
	 */
	public function getVisibility()
	{
		return $this->visibility;
	}

	/**
	 * Set visibility
	 *
	 * @param  string $visibility
	 * @return List
	 */
	public function setVisibility($visibility)
	{
		$this->visibility = $visibility;
		
		return $this;
	}	
}