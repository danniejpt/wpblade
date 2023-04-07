<?php

namespace BC\WP\View\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \BC\WP\View\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
