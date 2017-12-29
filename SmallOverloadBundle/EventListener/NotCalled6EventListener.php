<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled6EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
