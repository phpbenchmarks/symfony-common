<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled13EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
