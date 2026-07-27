<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('departments', function (Blueprint $table) {

        $table->string('department_code')->unique()->after('id');

        $table->string('department_name')->after('department_code');

        $table->string('hod')->nullable()->after('department_name');

        $table->text('description')->nullable()->after('hod');

        $table->boolean('status')->default(true)->after('description');

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('departments', function (Blueprint $table) {

        $table->dropColumn([
            'department_code',
            'department_name',
            'hod',
            'description',
            'status',
        ]);

    });
}
};
