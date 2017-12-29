<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled24EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
