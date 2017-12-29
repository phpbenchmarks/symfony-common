<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled16EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
