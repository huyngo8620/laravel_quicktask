<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
        });

        if (Schema::hasColumn('users', 'first_name'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('first_name');
            });
        }

        if (Schema::hasColumn('users', 'last_name'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('last_name');
            });
        }

        if (Schema::hasColumn('users', 'username'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('username');
            });
        }

        if (Schema::hasColumn('users', 'is_admin'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('is_admin');
            });
        }

        if (Schema::hasColumn('users', 'is_active'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('is_active');
            });
        }
    }
};
