<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function getFixturePath(string $fixtureName)
    {
        $parts = [__DIR__, 'fixtures', $fixtureName];
        return realpath(implode('/', $parts));
    }

    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }

    public function testReverseLong(): void
    {
        $text = file_get_contents($this->getFixturePath('longText.txt'));
        $textExpected = file_get_contents($this->getFixturePath('longTextExpected.txt'));

        $this->assertEquals($textExpected, reverseString($text));
    }
}
