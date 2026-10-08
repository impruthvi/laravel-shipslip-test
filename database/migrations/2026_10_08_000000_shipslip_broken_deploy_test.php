<?php

use Illuminate\Database\Migrations\Migration;

// Deliberately failing migration to test Shipslip's failure receipts.
return new class extends Migration
{
    public function up(): void
    {
        throw new RuntimeException('Shipslip broken-deploy test: this migration fails on purpose.');
    }

    public function down(): void
    {
    }
};
