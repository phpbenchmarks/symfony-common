<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled8EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
