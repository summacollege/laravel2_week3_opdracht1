<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('achternaam');
            $table->unsignedBigInteger('woonplaats_id');
            $table->timestamps();
            $table->foreign('woonplaats_id')->references('id')->on('woonplaats');
        });


        $data = [
            [
                'voornaam' => 'Sven',
                'achternaam' => 'Evers',
                'woonplaats_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],[
                'voornaam' => 'Mehmet',
                'achternaam' => 'Yıldırım',
                'woonplaats_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'voornaam' => 'Sem',
                'achternaam' => 'Bakker',
                'woonplaats_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'voornaam' => 'Lotte',
                'achternaam' => 'Verbeek',
                'woonplaats_id' => 3,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'voornaam' => 'Britt',
                'achternaam' => 'Sanders',
                'woonplaats_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'voornaam' => 'Abad',
                'achternaam' => 'Bennani',
                'woonplaats_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('student')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
