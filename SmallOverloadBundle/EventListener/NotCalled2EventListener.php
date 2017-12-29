<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled2EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
