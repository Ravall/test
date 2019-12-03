<?php

namespace traits;

use Interfaces\CriteriaInterface;
use Interfaces\FileScanInterface;
use Traversable;

trait FileFilterTrait
{
    /**
     * @var CriteriaInterface
     */
    protected $criteria;
    /**
     * @var FileScanInterface
     */
    protected $strategy;

    public function isOk(string $f): bool
    {
        return $this->criteria->isOk($f);
    }

    public function getFiles(): Traversable
    {
        return $this->strategy;
    }
}