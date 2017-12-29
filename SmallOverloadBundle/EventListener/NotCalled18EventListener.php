<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled18EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
