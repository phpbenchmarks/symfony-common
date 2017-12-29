<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled11EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
