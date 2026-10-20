<?php

namespace App\Support;

use RuntimeException;

class InvoiceBackfill
{
    public static function run(): void
    {
        throw new RuntimeException('Invoice backfill failed: column totals_cents is missing (shipslip test)');
    }
}
