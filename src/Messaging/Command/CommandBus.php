<?php

namespace RayRutjes\DddEssentials\Messaging\Command;

interface CommandBus
{
    /**
     * @param Command $command
     *
     * @return mixed
     */
    public function dispatch(Command $command);
}
