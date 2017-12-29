<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled15EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
