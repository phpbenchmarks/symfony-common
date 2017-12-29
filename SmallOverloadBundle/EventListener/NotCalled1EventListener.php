<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled1EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
