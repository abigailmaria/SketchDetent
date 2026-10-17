<?php
/**
 * Tests for SketchDetent
 */

use PHPUnit\Framework\TestCase;
use Sketchdetent\Sketchdetent;

class SketchdetentTest extends TestCase {
    private Sketchdetent $instance;

    protected function setUp(): void {
        $this->instance = new Sketchdetent(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchdetent::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
