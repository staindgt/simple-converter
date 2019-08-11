<?php

namespace Staindgt\SimpleConverter;

/**
 * Файл в роли источника
 */
class FileSource implements SourceInterface
{
    /**
     * @var string Имя файла
     */
    public $fileName;

    /**
     * Конструктор
     *
     * @param string $fileName Имя файла
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @inheritdoc
     */
    public function getContent(): string
    {
        return file_get_contents($this->fileName, true);
    }
}
