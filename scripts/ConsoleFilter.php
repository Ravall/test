<?php
namespace Scripts;

use Interfaces\ConsoleScriptInterface;
use Interfaces\CriteriaInterface;
use Interfaces\FileFilterConsoleInterface;
use Interfaces\FileScanInterface;
use traits\FileFilterTrait;

class ConsoleFilter implements FileFilterConsoleInterface, ConsoleScriptInterface
{
    use FileFilterTrait;

    public function __construct(CriteriaInterface $criteria, FileScanInterface $fileStrategy)
    {
        $this->criteria = $criteria;
        $this->strategy = $fileStrategy;
    }

    public function handle():void
    {
        foreach ($this->getFiles() as $file) {
            if ($this->isOk($file)) {
                print ($file."\n");
            }
        }
    }
}

