<?php

namespace RayRutjes\DddEssentials\Model;

use RayRutjes\DddEssentials\Messaging\MessageStream;

interface AggregateRoot
{
    /**
     * @return string
     */
    public function id(): string;

    /**
     * @return int
     */
    public function version(): int;

    /**
     * @param MessageStream $events
     *
     * @return AggregateRoot
     */
    public static function loadFromHistory(MessageStream $events): AggregateRoot;

    /**
     * @return MessageStream
     */
    public function uncommittedChanges(): MessageStream;

    /**
     * Clears uncommitted changes and updates the version of the aggregate.
     */
    public function markChangesAsCommitted();
}
