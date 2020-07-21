<?php

namespace Tests\Unit\Package;

use entwurfhaus\package\Package\Welcome;
use PHPUnit\Framework\TestCase;

class WelcomeTest extends TestCase {
    /**
     * If welcome message is not empty
     *
     */
    public function testWelcomeIsNotEmpty() {
        $welcome = new Welcome("Hello World");

        $this->assertNotEmpty($welcome->getMessage(), "There is no welcome message.");

        $this->assertEmpty($welcome->getMessage(), "There is a welcome message.");
    }

    /**
     * If welcome message is empty
     *
     */
    public function testWelcomeIsEmpty() {
        $welcome = new Welcome("");

        $this->assertEmpty($welcome->getMessage(), "There is a welcome message.");

    }
}
