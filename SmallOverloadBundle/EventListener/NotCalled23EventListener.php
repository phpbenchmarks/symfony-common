<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled23EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
