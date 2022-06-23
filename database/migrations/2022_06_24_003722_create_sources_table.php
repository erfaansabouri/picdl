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
            $table->integer('cost_per_image')->default(0);
            $table->integer('cost_per_vector')->default(0);
            $table->integer('cost_per_film')->default(0);
            $table->timestamps();
        });

        \App\Models\Source::query()
            ->create([
                'website' => 'شاتر استوک',
                'cost_per_image' => 1,
                'cost_per_vector' => 2,
                'cost_per_film' => 3,
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
