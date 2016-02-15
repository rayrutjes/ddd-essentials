<?php

namespace RayRutjes\DddEssentials\Messaging;

interface MessageHandler
{
    /**
     * @param Message $message
     *
     * @return mixed
     */
    public function handle(Message $message);
}
