<?php

namespace RayRutjes\DddEssentials\Persistence;

use RayRutjes\DddEssentials\Messaging\MessageStream;

interface EventStore
{
    /**
     * Should append events to the event store. The event stream should be append atomically.
     * It should either successfully store all events of the stream or none and raise an exception.
     * If you plan on dispatching events it should be made part of a larger transaction boundary.
     * If the dispatching fails, you should also roll back the event store.
     *
     * @param string        $aggregateRootId
     * @param int           $expectedVersion
     * @param MessageStream $eventStream
     *
     * @throws ConflictingChangesException
     */
    public function saveAggregateChanges($aggregateRootId, $expectedVersion, MessageStream $eventStream);

    /**
     * Reads all events to constitute a full history of the aggregate identified by its id.
     *
     * @param string $aggregateRootId
     *
     * @return MessageStream
     */
    public function getAggregateHistory($aggregateRootId): MessageStream;
}
