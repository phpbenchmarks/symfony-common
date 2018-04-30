<?php

namespace PhpBenchmarksSymfony\RestApiBundle\EventListener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;

class DefineLocaleEventListener
{
    const EVENT_NAME = 'defineLocale';

    /**
     * request_stack don't exist on <= 2.3, so use container to retrieve request, as mentionned in documentation
     * @var ContainerInterface
     */
    protected $container;

    /** @var TranslatorInterface */
    protected $translator;

    public function __construct(ContainerInterface $container, TranslatorInterface $translator)
    {
        $this->container = $container;
        $this->translator = $translator;
    }

    public function onDefineLocale()
    {
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $locale = $locales[rand(0, 2)];

        $this->container->get('request')->setLocale($locale);
        $this->translator->setLocale($locale);
    }
}
