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
     *
     * @param string $phoneNumber
     * @param string $text
     * @return MessageId
     */
    public function sendMessage($phoneNumber, $text);
}
