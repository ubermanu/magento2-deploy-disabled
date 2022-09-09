<?php

namespace Ubermanu\DeployDisabled\View\Asset\PreProcessor;

use Magento\Framework\View\Asset\PreProcessor\Chain;
use Magento\Framework\View\Asset\PreProcessor\Pool;

class NullPool extends Pool
{
    /**
     * @inheriDoc
     */
    public function process(Chain $chain)
    {
    }
}
