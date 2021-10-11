<?php

declare(strict_types=1);

/*
 * This file is part of the medunes\noise PHP package.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Noise;

use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Noise\Noise::beep
 */
final class NoiseTest extends TestCase
{
    public function testBeep(): void
    {
        $sut = new Noise();
        NoiseTest::assertSame('zZzZzZz', $sut->beep());
    }
}
