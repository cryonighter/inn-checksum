<?php

namespace Cryonighter\InnChecksum\Test;

use Cryonighter\InnChecksum\InnChecker;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase;

class InnCheckerTest extends TestCase
{
    /**
     * @throws AssertionFailedError
     */
    public function testCheck(): void
    {
        $this->assertTrue(InnChecker::check('3329000313'));
        $this->assertTrue(InnChecker::check('366221019350'));
        $this->assertFalse(InnChecker::check('8215737924062684'));
        $this->assertFalse(InnChecker::check('qwerty123456'));
    }

    /**
     * @throws AssertionFailedError
     */
    public function testCheckIndividual(): void
    {
        $this->assertFalse(InnChecker::checkIndividual('3329000313'));
        $this->assertTrue(InnChecker::checkIndividual('366221019350'));
        $this->assertFalse(InnChecker::check('8215737924062684'));
        $this->assertFalse(InnChecker::check('qwerty123456'));
    }

    /**
     * @throws AssertionFailedError
     */
    public function testCheckLegal(): void
    {
        $this->assertTrue(InnChecker::checkLegal('3329000313'));
        $this->assertFalse(InnChecker::checkLegal('366221019350'));
        $this->assertFalse(InnChecker::check('8215737924062684'));
        $this->assertFalse(InnChecker::check('qwerty123456'));
    }
}
