<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use entwurfhaus\package\Package\TestStatus;

class ExampleFeatureTest extends TestCase {
    public function testStatusSuccessful() {
        $status = new TestStatus('successful', 'A successful feature test.');

        $this->assertSame('successful', $status->getStatus(), $status->getMessage());
    }

    public function testStatusUnsuccessful() {
        $status = new TestStatus('unsuccessful', 'An unsuccessful feature test.');

        $this->assertSame('unsuccessful', $status->getStatus(), $status->getMessage());
    }
}
