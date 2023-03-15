<?php
namespace Merummer\Logger;

class EchoLogger implements ILogger{
    public function logEntry(string $line): void
    {
        echo $line . "\n";
    }
}