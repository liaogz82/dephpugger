<?php

namespace Dephpug\Exporter\Type;

use Dephpug\Exporter\iExporter;

/**
 * Exporter for  type
 */
class NullExporter implements iExporter
{
    /**
     * Get type of instance
     *
     * @return string
     */
    public static function getType()
    {
        return 'null';
    }

    /**
     * Get exported variable value
     *
     * @param obj $xml Parsed XML
     *
     * @return string
     */
    public function getExportedVar($xml)
    {
        return 'null';
    }
}
