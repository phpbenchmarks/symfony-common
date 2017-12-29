<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled5EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
