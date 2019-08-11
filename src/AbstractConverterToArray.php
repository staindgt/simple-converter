<?php

namespace Staindgt\SimpleConverter;

/**
 * Абстрактный класс конвертатора
 */
abstract class AbstractConverterToArray
{
    /**
     * @var SourceInterface Источник
     */
    public $source;

    /**
     * Конструктор
     *
     * @param SourceInterface $source Источник
     */
    public function __construct(SourceInterface $source)
    {
        $this->source = $source;
    }

    /**
     * Конвертирует данные в массив
     *
     * @return array Данные в виде массива
     */
    abstract function convert(): array;
}
