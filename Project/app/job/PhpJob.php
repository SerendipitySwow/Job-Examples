<?php

declare(strict_types = 1);

namespace App\Job;

use SwowCloud\Job\Contract\JobInterface;
use SwowCloud\Job\Contract\JobMiddlewareInterface;

class PhpJob implements JobInterface
{

    public int|string $identity;

    public int $timeout;

    public int $retryTimes;

    public string $name;

    public int $step;

    public function __construct(int|string $identity, int $timeout, int $retryTimes, string $name, int $step)
    {
        $this->identity   = $identity;
        $this->timeout    = $timeout;
        $this->retryTimes = $retryTimes;
        $this->name       = $name;
        $this->step       = $step;
    }

    public function handle() : void
    {
        echo 'Project';
    }

    public function canRetry(int $counter, mixed $error) : bool
    {
        return $counter < 3;
    }

    public function retryAfter(int $counter) : int
    {
        return 0;
    }

    public function failed(array $payload) : void
    {
        // TODO: Implement failed() method.
    }

    public function middleware() : array
    {
        return [];
    }

    public function getIdentity() : int|string
    {
        return $this->identity;
    }

    public function getTimeout() : int
    {
        return $this->timeout;
    }

    public function IncreaseCounter(int $attempt = 1) : mixed
    {
        return ++$this->retryTimes;
    }

    public function getStep() : int
    {
        return $this->step;
    }

    public function getCounter() : int
    {
        return $this->retryTimes;
    }
}
