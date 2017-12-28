<?php

namespace PhpBenchmarksSymfony\RestApiBundle\Controller;

use PhpBenchmarksRestData\Service;
use PhpBenchmarksSymfony\RestApiBundle\EventListener\DefineLocaleEventListener;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RestApiController extends Controller
{
    /** @return Response */
    public function restAction()
    {
        $this->get('event_dispatcher')->dispatch(DefineLocaleEventListener::EVENT_NAME);

        return new JsonResponse($this->get('serializer')->normalize(Service::getUsers(), 'json'));
    }
}
