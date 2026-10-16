<?php
/**
 * Tests for RoughPico
 */

use PHPUnit\Framework\TestCase;
use Roughpico\Roughpico;

class RoughpicoTest extends TestCase {
    private Roughpico $instance;

    protected function setUp(): void {
        $this->instance = new Roughpico(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughpico::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
