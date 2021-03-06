<?php
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagBackendOrder\Components\PriceCalculation\Hydrator;

use SwagBackendOrder\Components\PriceCalculation\Struct\PositionStruct;

class PositionHydrator
{
    /**
     * @param array $data
     *
     * @return PositionStruct
     */
    public function hydrate(array $data)
    {
        $position = new PositionStruct();
        $position->setPrice((float) $data['price']);
        $position->setQuantity((int) $data['quantity']);
        $position->setTotal((float) $data['total']);
        $position->setTaxRate((int) $data['taxRate']);
        $position->setIsDiscount((bool) $data['isDiscount']);
        $position->setDiscountType((int) $data['discountType']);
        $position->setIsSurcharge((bool) $data['isSurcharge']);
        $position->setSurchargeType((int) $data['surchargeType']);

        return $position;
    }
}
