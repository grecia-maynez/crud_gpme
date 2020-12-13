<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PoetsCircle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP TABLE IF EXISTS poets");
        DB::statement("CREATE TABLE poets(
            poet_code int(11) NOT NULL AUTO_INCREMENT,
            firstname varchar(30) DEFAULT NULL,
            surname varchar(40) DEFAULT NULL,
            adress varchar(100) DEFAULT NULL,
            postcode varchar(20) DEFAULT NULL,
            telephone varchar(30) DEFAULT NULL,
            PRIMARY KEY (poet_code)
        )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TABLE IF EXISTS poets");
    }
}
