<?php
/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Checker;

use Sylius\Component\Core\Model\OrderInterface;

interface CustomerOrderCancellationCheckerInterface
{
    public function check(OrderInterface $order): bool;
}
