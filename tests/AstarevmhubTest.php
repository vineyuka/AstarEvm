<?php
/**
 * Tests for AstarEvmHub
 */

use PHPUnit\Framework\TestCase;
use Astarevmhub\Astarevmhub;

class AstarevmhubTest extends TestCase {
    private Astarevmhub $instance;

    protected function setUp(): void {
        $this->instance = new Astarevmhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Astarevmhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
