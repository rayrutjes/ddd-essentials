<?php

namespace RayRutjes\DddEssentials\Persistence;

interface Repository
{
    /**
     * @param $aggregateRootId
     *
     * @return AggregateRoot
     */
    public function load($aggregateRootId): AggregateRoot;

    /**
     * @param AggregateRoot $aggregate
     */
    public function save(AggregateRoot $aggregate);
}
