<?php
namespace Criteria;

use Interfaces\CriteriaInterface;

class NameHas implements CriteriaInterface
{
    protected $has;
    public function __construct(string $has)
    {
        $this->has = $has;
    }

    public function isOk(string $file): bool
    {
        return strpos(pathinfo($file, PATHINFO_FILENAME), $this->has) !== FALSE;
    }
}