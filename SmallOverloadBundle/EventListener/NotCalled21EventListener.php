<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled21EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
