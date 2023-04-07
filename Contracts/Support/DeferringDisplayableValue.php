<?php

namespace BC\WP\View\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \BC\WP\View\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
