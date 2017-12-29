<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled10EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
