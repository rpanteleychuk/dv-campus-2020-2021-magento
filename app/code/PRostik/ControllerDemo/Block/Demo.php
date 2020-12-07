<?php
declare(strict_types=1);

namespace PRostik\ControllerDemo\Block;

class Demo extends \Magento\Framework\View\Element\Template
{

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return  (string) $this->getRequest()->getParam('first_name');
    }

    /**
     * @return int
     */
    public function getLastName(): string
    {
        return (string) $this->getRequest()->getParam('last_name');
    }

    /**
     * @return float
     */
    public function getRepositoryUrl(): string
    {
        return (string) $this->getRequest()->getParam('url_repository');
    }
}
