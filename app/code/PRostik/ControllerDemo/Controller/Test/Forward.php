<?php
declare(strict_types=1);
namespace PRostik\ControllerDemo\Controller\Test;

use Magento\Framework\Controller\Result\Forward as ForwardResult;

class Forward implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    private $forwardFactory;

    /**
     * Forward constructor.
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
     */
    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * @return ForwardResult
     */
    public function execute(): ForwardResult
    {
        $forward = $this->forwardFactory->create();
        return $forward->setParams(
            [
                'first_name' => 'Rostyslav',
                'last_name' => 'Panteleichuk',
                'url_repository' => 'https://github.com/rpanteleychuk/dv-campus-2020-2021-magento'
            ]
        )->forward('Data');
    }
}
