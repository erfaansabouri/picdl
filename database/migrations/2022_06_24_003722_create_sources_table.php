<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->string('website',255)->nullable();
            $table->string('name',255)->nullable();
            $table->text('api_key')->nullable();
            $table->double('credit_cost_per_image')->default(0);
            $table->double('credit_cost_per_vector')->default(0);
            $table->double('credit_cost_per_film')->default(0);
            $table->double('price_cost_per_image')->default(0);
            $table->double('price_cost_per_vector')->default(0);
            $table->double('price_cost_per_film')->default(0);
            $table->timestamps();
        });

        \App\Models\Source::query()
            ->create([
                'website' => 'شاتر استوک',
                'name' => 'shutterstock',
                'api_key' => 'v2/TGRSVTRzbWl5ZWduZ0dNQVRJY0ZFNUhBYlBzRzROdHMvMjAxNTc0MzA5L2N1c3RvbWVyLzQvQ2t6WktyZkRfeDN0V3U1QVNJa3ZOV09VdVp0Qlh6SnRPeEdNeHM0c3pLVC1NVzQybnRQMVZ6TndXV2JPbG9HMExlVWJqeUhfeFdOcm1SVF81ei1kQ3NaZ1ZWbi1oMUlCNFEyRVg1eEJDR19sdlBhNVROMnRqS294NU1VR1pyTmQ3ZEdnRHR4WTJtUEZFN29WaEtwckJyS2l2RnZZelg2UFNrbDlRNFhCcC12SEdxWVJmSFVmbXhzcmpZV2hKcnNQWEs1SC0xY1I1LUJNdzhoUGEta0RNUS8wOUVVUUN4WkZxV1ZWSkl1OS10ZWlB',
                'credit_cost_per_image' => 1,
                'credit_cost_per_vector' => 2,
                'credit_cost_per_film' => 3,
                'price_cost_per_image' => 10000,
                'price_cost_per_vector' => 20000,
                'price_cost_per_film' => 30000,
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sources');
    }
}
