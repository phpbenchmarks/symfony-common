<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled7EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
