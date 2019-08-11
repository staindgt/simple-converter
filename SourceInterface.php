<?php

namespace Staindgt\SimpleConverter;

/**
 * Интерфейс источника
 */
interface SourceInterface
{
    /**
     * Получить контент
     *
     * @return string Контент
     */
    public function getContent(): string;
}
