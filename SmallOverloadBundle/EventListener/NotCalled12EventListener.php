<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled12EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
