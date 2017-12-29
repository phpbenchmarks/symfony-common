<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled17EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
