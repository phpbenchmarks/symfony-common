<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled60EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
