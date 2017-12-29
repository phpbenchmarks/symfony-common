<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled75EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
