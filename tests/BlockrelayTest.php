<?php
/**
 * Tests for BlockRelay
 */

use PHPUnit\Framework\TestCase;
use Blockrelay\Blockrelay;

class BlockrelayTest extends TestCase {
    private Blockrelay $instance;

    protected function setUp(): void {
        $this->instance = new Blockrelay(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockrelay::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
