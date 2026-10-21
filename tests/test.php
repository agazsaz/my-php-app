<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/index.php';

class GreetingTest extends TestCase {
    public function testGreetingContainsKeywords(): void {
        $greeting = getGreeting();
        $this->assertEquals("Hello from PHP in Docker! ", $greeting);
        $this->assertStringContainsString("PHP", $greeting);
        $this->assertStringContainsString("Docker", $greeting);
    }
}