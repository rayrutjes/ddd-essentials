<?php

namespace RayRutjes\DddEssentials\Messaging\Command;

interface CommandHandler
{
    /**
     * @param Command $command
     *
     * @return mixed
     */
    public function handle(Command $command);
}
