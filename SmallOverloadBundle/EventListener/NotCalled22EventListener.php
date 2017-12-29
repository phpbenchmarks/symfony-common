<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled22EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
