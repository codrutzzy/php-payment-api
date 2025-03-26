<?php

namespace Heidelpay\Tests\PhpPaymentApi\Unit\ParameterGroup;

use Codeception\TestCase\Test;
use Heidelpay\PhpPaymentApi\ParameterGroups\RiskInformationParameterGroup as RiskInformation;

/**
 * Unit test for RiskInformationParameterGroup
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present heidelpay GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Daniel Kraut
 *
 * @package heidelpay\php-payment-api\tests\unit
 */
class RiskInformationParameterGroupTest extends Test
{
    /**
     * Guestcheckout getter/setter test
     *
     * @test
     */
    public function guestcheckout()
    {
        $riskInformation = new RiskInformation();

        $guestcheckout = false;
        $riskInformation->setCustomerGuestCheckout($guestcheckout);

        $this->assertFalse($riskInformation->getCustomerGuestCheckout(), 'guestcheckout should be false');
    }

    /**
     * Since getter/setter test
     *
     * @test
     */
    public function since()
    {
        $riskInformation = new RiskInformation();

        $since = '1984-05-23';
        $riskInformation->setCustomerSince($since);

        $this->assertEquals($since, $riskInformation->getCustomerSince());
    }

    /**
     * Ordercount getter/setter test
     *
     * @test
     */
    public function ordercount()
    {
        $riskInformation = new RiskInformation();

        $ordercount = 5;
        $riskInformation->setCustomerOrderCount($ordercount);

        $this->assertEquals($ordercount, $riskInformation->getCustomerOrderCount());
    }
}
