<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace MailChimpBundle\Entity\Definition;

/**
 * Definition class for the Campaign connector object
 *
 */
trait CampaignDefinition
{    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $type;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $recipients;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $settings;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $variateSettings;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $tracking;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $rssOpts;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $socialCard;
	
    

	
	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Set type
	 *
	 * @param  string $type
	 * @return Campaign
	 */
	public function setType($type)
	{
		$this->type = $type;
		
		return $this;
	}	
    

	
	/**
	 * Get recipients
	 *
	 * @return Object
	 */
	public function getRecipients()
	{
		return $this->recipients;
	}

	/**
	 * Set recipients
	 *
	 * @param  Object $recipients
	 * @return Campaign
	 */
	public function setRecipients($recipients)
	{
		$this->recipients = $recipients;
		
		return $this;
	}	
    

	
	/**
	 * Get settings
	 *
	 * @return Object
	 */
	public function getSettings()
	{
		return $this->settings;
	}

	/**
	 * Set settings
	 *
	 * @param  Object $settings
	 * @return Campaign
	 */
	public function setSettings($settings)
	{
		$this->settings = $settings;
		
		return $this;
	}	
    

	
	/**
	 * Get variateSettings
	 *
	 * @return Object
	 */
	public function getVariateSettings()
	{
		return $this->variateSettings;
	}

	/**
	 * Set variateSettings
	 *
	 * @param  Object $variateSettings
	 * @return Campaign
	 */
	public function setVariateSettings($variateSettings)
	{
		$this->variateSettings = $variateSettings;
		
		return $this;
	}	
    

	
	/**
	 * Get tracking
	 *
	 * @return Object
	 */
	public function getTracking()
	{
		return $this->tracking;
	}

	/**
	 * Set tracking
	 *
	 * @param  Object $tracking
	 * @return Campaign
	 */
	public function setTracking($tracking)
	{
		$this->tracking = $tracking;
		
		return $this;
	}	
    

	
	/**
	 * Get rssOpts
	 *
	 * @return Object
	 */
	public function getRssOpts()
	{
		return $this->rssOpts;
	}

	/**
	 * Set rssOpts
	 *
	 * @param  Object $rssOpts
	 * @return Campaign
	 */
	public function setRssOpts($rssOpts)
	{
		$this->rssOpts = $rssOpts;
		
		return $this;
	}	
    

	
	/**
	 * Get socialCard
	 *
	 * @return Object
	 */
	public function getSocialCard()
	{
		return $this->socialCard;
	}

	/**
	 * Set socialCard
	 *
	 * @param  Object $socialCard
	 * @return Campaign
	 */
	public function setSocialCard($socialCard)
	{
		$this->socialCard = $socialCard;
		
		return $this;
	}	
}