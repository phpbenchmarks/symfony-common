<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class NotCalled70EventListener
{
    public function onPhpbenchmarksNotCalled($event)
    {
        // should never be called
    }
}
