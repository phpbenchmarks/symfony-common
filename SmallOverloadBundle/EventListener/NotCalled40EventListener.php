<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled40EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
