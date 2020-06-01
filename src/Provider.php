<?php

namespace alexeevdv\Sms\Contract;

/**
 * SMS provider
 */
interface Provider
{
    /**
     * Send message to the given phone number
     *
     * @throws Exception
     */
    public function sendMessage(PhoneNumber $phoneNumber, string $text): MessageId;
}
