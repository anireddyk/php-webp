<?php

/**
 * WebPConvert - Convert JPEG & PNG to WebP with PHP
 *
 * @link https://github.com/rosell-dk/webp-convert
 * @license MIT
 */

namespace WebPConvert\Tests\Converters;

use WebPConvert\Converters\Optimus;
use PHPUnit\Framework\TestCase;

class OptimusTest extends TestCase
{
    private $source;
    private $destination;

    public function __construct()
    {
        $this->optimus = new Optimus(
            realpath(__DIR__ . '/../test.jpg'),
            realpath(__DIR__ . '/../test.webp')
        );
    }

    public function testCheckRequirements()
    {
        define("WEBPCONVERT_OPTIMUS_KEY", "key-abc123");

        $this->assertNotNull($this->optimus->checkRequirements());
    }

    public function testConvert()
    {
        $this->assertNotNull($this->optimus->convert());
    }
}