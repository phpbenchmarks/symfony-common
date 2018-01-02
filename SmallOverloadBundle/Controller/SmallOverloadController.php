<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\Controller;

use PhpBenchmarksSymfony\SmallOverloadBundle\Entity\SmallOverload1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SmallOverloadController extends Controller
{
    /** @return Response */
    public function smallOverloadAction()
    {
        $session = $this->get('session');
        $entities = $this->get('doctrine')->getRepository(SmallOverload1::class)->findAll();
        $this
            ->writeSession($session)
            ->readSession($session)
            ->fireEvent()
            ->validate($entities);

        return $this->render(
            '@SmallOverload/SmallOverload/smallOverload.html.twig',
            ['smallOverloads' => $entities]
        );
    }

    /** @return $this */
    protected function writeSession(SessionInterface $session)
    {
        for ($x = 1; $x <= 10; $x++) {
            $session->set('overload-' . $x, 'overload-' . $x . '-value');
        }

        return $this;
    }

    /** @return $this */
    protected function readSession(SessionInterface $session)
    {
        for ($x = 1; $x <= 20; $x++) {
            $session->get('overload-' . $x, 'overload-' . $x . '-value-not-found');
        }

        return $this;
    }

    /** @return $this */
    protected function fireEvent()
    {
        $event = new Event();
        $this->get('event_dispatcher')->dispatch('phpbenchmarks.smallOverload', $event);

        return $this;
    }


    /** @return $this */
    protected function validate(array $entities)
    {
        $validator = $this->get('validator');
        for ($x = 0; $x < 10; $x++) {
            $violations = $validator->validate($entities[$x], null, 'smallOverload');
            if (count($violations) > 0) {
                throw new HttpException(500, 'Validation error');
            }
        }

        return $this;
    }
}
