<?php
namespace Merummer\Logger;

interface ILogger
{
    public function logEntry(string $line): void;

}