<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\EventListener;

class SmallOverload1EventListener
{
    public function onPhpbenchmarksSmallOverload($event)
    {
        // nothing to do, this is just to benchmark onSmallOverload() call time
    }
}
