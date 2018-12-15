<?php
namespace Godogi\BackImages\Block;
class Back extends \Magento\Framework\View\Element\Template
{
	protected $_scopeConfig;
	protected $_storeManager;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
		\Magento\Store\Model\StoreManagerInterface $storeManager)
	{
		$this->_scopeConfig = $scopeConfig;
		$this->_storeManager = $storeManager;
		parent::__construct($context);
	}
	public function getMediaUrl(){
		return $this ->_storeManager-> getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA );
	}


	public function getEnable(){
		return $this->getConfig("backimages/general/enable");
	}
	public function getLeftImageUrl(){
		return $this->getConfig("backimages/general/left_image_url");
	}
	public function getLeftImageSrc(){
		return $this->getConfig("backimages/general/left_image_src");
	}
	public function getLeftImageWidth(){
		return $this->getConfig("backimages/general/left_image_width");
	}
	public function getRightImageUrl(){
		return $this->getConfig("backimages/general/right_image_url");
	}
	public function getRightImageSrc(){
		return $this->getConfig("backimages/general/right_image_src");
	}
	public function getRightImageWidth(){
		return $this->getConfig("backimages/general/right_image_width");
	}

	public function getPageMaxWidth(){
		return $this->getConfig("backimages/general/page_max_width");
	}

	public function getConfig($config) {
        return $this->_scopeConfig->getValue($config, "websites");
    }
	

}