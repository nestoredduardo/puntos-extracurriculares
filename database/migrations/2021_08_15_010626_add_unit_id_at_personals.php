<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnitIdAtPersonals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personals', function (Blueprint $table) {
            $table->bigInteger('unit_id')->unsigned()->nullable()->after('id');

            $table->foreign('unit_id')->references('id')->on('units')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->bigInteger('personal_id')->unsigned()->nullable()->after('id');

            $table->foreign('personal_id')->references('id')->on('personals')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->bigInteger('director_id')->unsigned()->nullable()->after('id');

            $table->foreign('director_id')->references('id')->on('directors')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });

        Schema::table('participations', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->nullable()->after('id');

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->bigInteger('event_id')->unsigned()->nullable()->after('id');

            $table->foreign('event_id')->references('id')->on('events')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->bigInteger('type_id')->unsigned()->nullable()->after('id');

            $table->foreign('type_id')->references('id')->on('types')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
