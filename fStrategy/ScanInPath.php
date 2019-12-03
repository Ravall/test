<?php
namespace FStrategy;

use Interfaces\FileScanInterface;

class ScanInPath implements FileScanInterface
{
    protected $directory;

    public function __construct($directory)
    {
        $this->directory = $directory;
    }

    public function getIterator()
    {
        foreach (scandir($this->directory) as $f) {
            yield "{$this->directory}/{$f}";
        }
    }
}