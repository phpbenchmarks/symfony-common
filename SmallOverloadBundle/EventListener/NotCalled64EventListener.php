<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled64EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
