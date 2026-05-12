<?php
/**
 * Tests for ExLlamaV2
 */

use PHPUnit\Framework\TestCase;
use Exllamav2\Exllamav2;

class Exllamav2Test extends TestCase {
    private Exllamav2 $instance;

    protected function setUp(): void {
        $this->instance = new Exllamav2(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Exllamav2::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
