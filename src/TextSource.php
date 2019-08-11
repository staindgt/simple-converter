<?php

namespace Staindgt\SimpleConverter;

/**
 * Текст в роли источника
 */
class TextSource implements SourceInterface
{
    /**
     * @var string Контент
     */
    public $content;

    /**
     * Конструктор
     *
     * @param string $content Контент
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @inheritdoc
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
