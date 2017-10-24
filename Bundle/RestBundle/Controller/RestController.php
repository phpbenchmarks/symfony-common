<?php

namespace PhpBenchmarksSymfony\Bundle\RestBundle\Controller;

use PhpBenchmarksRestData\Service;
use PhpBenchmarksSymfony\EventListener\DefineLocaleEventListener;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RestController extends Controller
{
    /** @return Response */
    public function restAction()
    {
        $this->get('event_dispatcher')->dispatch(DefineLocaleEventListener::EVENT_NAME);

        return new JsonResponse($this->get('serializer')->normalize(Service::getUsers(), 'json'));
    }
}
