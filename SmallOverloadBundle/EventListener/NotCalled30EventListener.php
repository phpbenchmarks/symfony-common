<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled30EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
