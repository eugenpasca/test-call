<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('wheels', 'wheel_id')) {
            Schema::table('wheels', function (Blueprint $table) {
                $table
                                            ->foreignId('wheel_id')
                        ->nullable()
                        ->constrained('cars', 'id')
                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('wheels', function (Blueprint $table) {
                            $table->dropConstrainedForeignId('wheel_id');
                    });
    }
};
