<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled32EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
