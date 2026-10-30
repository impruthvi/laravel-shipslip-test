<?php

use Illuminate\Database\Migrations\Migration;

// Fails on purpose to exercise Shipslip's failed-deploy recovery.
return new class extends Migration
{
    public function up(): void
    {
        throw new RuntimeException('Shipslip GUI check: this migration fails on purpose.');
    }

    public function down(): void
    {
    }
};
