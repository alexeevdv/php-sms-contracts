<?php

namespace alexeevdv\Sms\Contract;

/**
 * Sent message ID that is returned by provider
 */
interface MessageId
{
    public function __toString();
}
