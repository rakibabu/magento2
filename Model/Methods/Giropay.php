<?php
/**
 * Copyright © 2018 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Model\Methods;

use Mollie\Payment\Model\Mollie;

/**
 * Class Giropay
 *
 * @package Mollie\Payment\Model\Methods
 */
class Giropay extends Mollie
{

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'mollie_methods_giropay';

    /**
     * Info instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = 'Mollie\Payment\Block\Info\Base';

}
