<?php
namespace Interfaces;

use Traversable;

interface FileFilterConsoleInterface
{
    public function isOk(string $f): bool;
    public function getFiles(): Traversable;
}