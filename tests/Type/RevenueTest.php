<?php

namespace MarcusJaschen\Collmex\Tests\Type;

use MarcusJaschen\Collmex\Type\AbstractType;
use MarcusJaschen\Collmex\Type\Revenue;
use MarcusJaschen\Collmex\Type\TypeInterface;
use PHPUnit\Framework\TestCase;

class RevenueTest extends TestCase
{
    /**
     * @test
     */
    public function isAbstractType()
    {
        $subject = new Revenue([]);

        self::assertInstanceOf(AbstractType::class, $subject);
    }

    /**
     * @test
     */
    public function implementsTypeInterface()
    {
        $subject = new Revenue([]);

        self::assertInstanceOf(TypeInterface::class, $subject);
    }
}
