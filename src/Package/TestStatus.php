<?php

namespace entwurfhaus\package\Package;

class TestStatus {
    private string $status;

    private string $message;

    public function __construct(string $status = 'successful', string $message = 'default message') {
        $this->status = $status;
        $this->message = $message;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getMessage(): ?string {
        return $this->message;
    }
}
