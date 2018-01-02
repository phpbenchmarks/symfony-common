<?php

namespace PhpBenchmarksSymfony\SmallOverloadBundle\Entity;

class SmallOverload31
{
    /** @var ?int */
    protected $id;

    /** @var ?\DateTime */
    protected $date;

    /** @var ?\DateTime */
    protected $dateTime;

    /** @var ?string */
    protected $fixedString;

    /** @var ?string */
    protected $variableString;

    /** @return ?int */
    public function getId()
    {
        return $this->id;
    }

    /** @return $this */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /** @return \DateTime */
    public function getDate()
    {
        return $this->date;
    }

    /** @return $this */
    public function setDateTime(\DateTime $dateTime = null)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /** @return ?\DateTime */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /** @return $this */
    public function setFixedString($string = null)
    {
        $this->fixedString = $string;

        return $this;
    }

    /** @return ?string */
    public function getFixedString()
    {
        return $this->fixedString;
    }

    /** @return $this */
    public function setVariableString($variableString = null)
    {
        $this->variableString = $variableString;

        return $this;
    }

    /** @return ?string */
    public function getVariableString()
    {
        return $this->variableString;
    }
}
