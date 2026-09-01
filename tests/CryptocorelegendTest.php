<?php
/**
 * Tests for CryptoCoreLegend
 */

use PHPUnit\Framework\TestCase;
use Cryptocorelegend\Cryptocorelegend;

class CryptocorelegendTest extends TestCase {
    private Cryptocorelegend $instance;

    protected function setUp(): void {
        $this->instance = new Cryptocorelegend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptocorelegend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
