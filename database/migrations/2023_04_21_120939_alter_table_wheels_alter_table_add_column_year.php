<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('wheels', 'year')) {
            Schema::table('wheels', function (Blueprint $table) {
                $table
                                                                        ->integer('year')
                                                                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('wheels', function (Blueprint $table) {
                            $table->dropColumn('year');
                    });
    }
};
