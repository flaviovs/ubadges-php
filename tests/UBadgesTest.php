<?php

namespace fv\tests;

use fv\ubadges\UBadges;

class UBadgesTest extends \PHPUnit\Framework\TestCase
{
    public function dimensionValuesDataProvider()
    {
        return [
            ['flávio veloso soares', [7, 65, 3]],
            ['  flávio veloso soares', [7, 65, 3]],
            ['flávio veloso soares   ', [7, 65, 3]],
            ['flávio    veloso    soares', [7, 65, 3]],
            ['FLÁVIO VELOSO SOARES', [7, 65, 3]],
        ];
    }


    /**
     * @dataProvider dimensionValuesDataProvider
     */
    public function testDimensionValues($input, $expected)
    {
        return $this->assertEquals(
            $expected,
            UBadges::getDimensionValues($input)
        );
    }


    public function testGetCssClasses()
    {
        return $this->assertEquals(
            ['ub_1-7', 'ub_2-65', 'ub_3-3'],
            UBadges::getCssClasses('flávio veloso soares')
        );
    }

}
