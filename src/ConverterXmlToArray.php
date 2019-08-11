<?php

namespace Staindgt\SimpleConverter;

/**
 * Конвертатор из XML в массив
 */
class ConverterXmlToArray extends AbstractConverterToArray
{
    public function convert(): array
    {
        $xml = simplexml_load_string($this->source->getContent());
        $xmlJsonEncoded = json_encode($xml, true);

        return json_decode($xmlJsonEncoded, true);
    }
}
