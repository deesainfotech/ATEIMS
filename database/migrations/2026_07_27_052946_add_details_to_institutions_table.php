<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('institutions', function (Blueprint $table) {

            $table->string('institution_code')->unique();

            $table->string('institution_name');

            $table->string('institution_type');

            $table->string('affiliation')->nullable();

            $table->text('address')->nullable();

            $table->string('city')->nullable();

            $table->string('state')->nullable();

            $table->string('country')->default('India');

            $table->string('postal_code')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('website')->nullable();

            $table->string('principal_name')->nullable();

            $table->integer('established_year')->nullable();

            $table->string('logo')->nullable();

            $table->boolean('status')->default(true);

        });
    }

    public function down(): void
    {
        Schema::table('institutions', function (Blueprint $table) {

            $table->dropColumn([
                'institution_code',
                'institution_name',
                'institution_type',
                'affiliation',
                'address',
                'city',
                'state',
                'country',
                'postal_code',
                'phone',
                'email',
                'website',
                'principal_name',
                'established_year',
                'logo',
                'status'
            ]);

        });
    }
};