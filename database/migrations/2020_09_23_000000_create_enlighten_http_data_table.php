<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnlightenHttpDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::connection('enlighten')->hasTable('enlighten_http_data')) {
            return;
        }

        Schema::connection('enlighten')->create('enlighten_http_data', function (Blueprint $table) {
            $table->id();

            $table->foreignId('example_id')
                ->unique()
                ->references('id')
                ->on('enlighten_examples');

            $table->json('request_headers');
            $table->string('request_method');
            $table->string('request_path');
            $table->json('request_query_parameters');
            $table->json('request_input');
            $table->string('route');
            $table->json('route_parameters');
            $table->char('response_status', 3);
            $table->json('response_headers');
            $table->text('response_body');
            $table->text('response_template')->nullable();

            $table->text('session_data')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('enlighten')->dropIfExists('enlighten_http_data');
    }
}
