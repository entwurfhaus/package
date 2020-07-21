<?php

namespace entwurfhaus\package\Package;

class Welcome {
    private string $message;

    /**
     * Welcome constructor.
     *
     * @param string $message
     */
    public function __construct(string $message = 'Hello World') {
        $this->message = $message;
    }

    /**
     * Get welcome message
     *
     * @return string|null
     */
    public function getMessage(): ?string {

        if (isset($this->message)) {
            return $this->message;
        }

        return null;
    }
}
