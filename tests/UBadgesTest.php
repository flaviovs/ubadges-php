<?php

namespace fv\tests;

use fv\ubadges\UBadges;

class UBadgesTest extends \PHPUnit\Framework\TestCase
{
    public function dimensionValuesDataProvider()
    {
        return [
            ['flávio veloso soares', [6, 64, 2]],
            ['  flávio veloso soares', [6, 64, 2]],
            ['flávio veloso soares   ', [6, 64, 2]],
            ['flávio    veloso    soares', [6, 64, 2]],
            ['FLÁVIO VELOSO SOARES', [6, 64, 2]],
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
            ['ub_1-6', 'ub_2-64', 'ub_3-2'],
            UBadges::getCssClasses('flávio veloso soares')
        );
    }

}
