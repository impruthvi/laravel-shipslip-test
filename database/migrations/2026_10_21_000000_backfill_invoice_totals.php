<?php

use App\Support\InvoiceBackfill;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        InvoiceBackfill::run();
    }

    public function down(): void
    {
    }
};
