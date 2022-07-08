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
