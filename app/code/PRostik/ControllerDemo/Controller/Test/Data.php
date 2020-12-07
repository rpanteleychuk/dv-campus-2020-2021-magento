<?php
declare(strict_types=1);
namespace PRostik\ControllerDemo\Controller\Test;

use Magento\Framework\View\Result\PageFactory;

class Data implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $pageResponseFactory;

    /**
     * Index constructor.
     * @param PageFactory $pageFactory
     */
    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageResponseFactory = $pageFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $this->pageResponseFactory->create();
        return $this->pageResponseFactory->create();
    }
}
