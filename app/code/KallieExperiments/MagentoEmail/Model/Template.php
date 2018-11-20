<?php
namespace KallieExperiments\MagentoEmail\Model;

class Template extends \Magento\Email\Model\Template
{
    public function setForcedArea($templateId) 
    {   
        
        if (!isset($this->area)) {
            $this->area = $this->emailConfig->getTemplateArea($templateId);
        }
        return $this;
    }
}