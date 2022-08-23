<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Component\Tracking\Tracker;

interface TrackerInterface
{
    public function isEnabled(): bool;

    public function setEnabled(bool $enabled): void;

    public function trackProduct($product): void;

    public function trackProductImpression($product): void;

    public function trackCartAdd($cart, $product, float $quantity = 1.0): void;

    public function trackCartRemove($cart, $product, float $quantity = 1.0): void;

    public function trackCheckoutStep($cart, $stepIdentifier = null, bool $isFirstStep = false, $checkoutOption = null): void;

    public function trackCheckoutComplete($order): void;
}
