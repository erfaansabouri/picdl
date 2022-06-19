<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DynamicSetting;

class CreateDynamicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_settings', function (Blueprint $table) {
            $table->id();
            $table->text('about_us')->nullable()->comment('درباره ما');
            $table->text('phone_prefix')->nullable()->comment('پیش شماره');
            $table->text('phone')->nullable()->comment('شماره تماس');
            $table->text('email')->nullable()->comment('ایمیل');
            $table->text('instagram')->nullable()->comment('اینستاگرام');
            $table->text('telegram')->nullable()->comment('تلگرام');
            $table->text('aparat')->nullable()->comment('توییتر');
            $table->text('twitter')->nullable()->comment('توییتر');
            $table->text('youtube')->nullable()->comment('یوتوب');
            $table->text('facebook')->nullable()->comment('فیسبوک');
            $table->text('contact_us')->nullable()->comment('تماس با ما');
            $table->text('footer')->nullable()->comment('متن فوتر');
            $table->timestamps();
        });

        DynamicSetting::setData('about_us', longText());
        DynamicSetting::setData('phone_prefix', '021');
        DynamicSetting::setData('phone', '45682497');
        DynamicSetting::setData('email', 'info@picdl.ir');
        DynamicSetting::setData('instagram', 'https://instagram.com/picdl');
        DynamicSetting::setData('telegram', 'https://telegram.com/picdl');
        DynamicSetting::setData('aparat', 'https://aparat.com/picdl');
        DynamicSetting::setData('twitter', 'https://twitter.com/picdl');
        DynamicSetting::setData('youtube', 'https://youtube.com/picdl');
        DynamicSetting::setData('facebook', 'https://facebook.com/picdl');
        DynamicSetting::setData('contact_us', longText());
        DynamicSetting::setData('footer', mediumText());

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_settings');
    }
}
