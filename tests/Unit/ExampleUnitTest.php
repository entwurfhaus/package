<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use entwurfhaus\package\Package\TestStatus;

class ExampleUnitTest extends TestCase {
    public function testStatusSuccessful() {
        $status = new TestStatus('successful', 'A successful unit test.');

        $this->assertSame('successful', $status->getStatus(), $status->getMessage());
    }

    public function testStatusUnsuccessful() {
        $status = new TestStatus('unsuccessful', 'An unsuccessful unit test.');

        $this->assertSame('unsuccessful', $status->getStatus(), $status->getMessage());
    }
}
