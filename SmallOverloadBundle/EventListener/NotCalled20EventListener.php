<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled20EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
