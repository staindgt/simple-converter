<?php

namespace Staindgt\SimpleConverter;

/**
 * Конвертатор из JSON в массив
 */
class ConverterJsonToArray extends AbstractConverterToArray
{
    public function convert(): array
    {
        return json_decode($this->source->getContent(), true);
    }
}
