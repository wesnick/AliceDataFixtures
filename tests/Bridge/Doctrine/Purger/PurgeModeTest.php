<?php

/*
 * This file is part of the Fidry\AliceDataFixtures package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fidry\AliceDataFixtures\Bridge\Doctrine\Purger;

use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Fidry\AliceDataFixtures\Persistence\PurgeMode;

/**
 * @coversNothing
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class PurgeModeTest extends \PHPUnit_Framework_TestCase
{
    public function testThePurgerModesValueIsSynchronizedWithDoctrinePurgerMode()
    {
        $mode = PurgeMode::createDeleteMode();
        $this->assertEquals(ORMPurger::PURGE_MODE_DELETE, $mode->getValue());

        $mode = PurgeMode::createTruncateMode();
        $this->assertEquals(ORMPurger::PURGE_MODE_TRUNCATE, $mode->getValue());
    }
}
