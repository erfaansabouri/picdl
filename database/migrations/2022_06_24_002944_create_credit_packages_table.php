<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_packages', function (Blueprint $table) {
            $table->id();
            $table->integer('count')->default(0);
            $table->double('price')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        $data = [
            [
                'count' => 10,
                'price' => 100000,
            ],
            [
                'count' => 20,
                'price' => 180000,
            ],
            [
                'count' => 50,
                'price' => 390000,
            ],
            [
                'count' => 100,
                'price' => 850000,
            ],
        ];

        foreach ($data as $item)
        {
            \App\Models\CreditPackage::query()
                ->create([
                    'count' => $item['count'],
                    'price' => $item['price'],
                ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_packages');
    }
}
