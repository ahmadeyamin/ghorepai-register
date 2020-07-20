<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryMenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_men', function (Blueprint $table) {
            $table->id();
            $table->integer('badge_id')->nullable();
            $table->uuid('uuid')->index()->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique()->nullable();
            $table->string('father_name');
            $table->string('father_phone');
            $table->integer('balance')->default(0);
            $table->string('email');
            $table->string('phone');
            $table->string('nid');
            $table->text('bio');
            $table->string('document')->nullable();
            $table->string('nid_image')->nullable();
            $table->json('location')->nullable();
            $table->json('device_location')->nullable();
            $table->string('address');
            $table->json('last_location')->nullable();
            $table->boolean('is_active')->default(0);
            $table->string('reference_by')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_verified')->default(0);
            $table->string('avatar');
            $table->string('webpush')->nullable();
            $table->string('login_ip')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_seen')->nullable();
            $table->string('facebook')->nullable();
            $table->string('password')->nullable();
            $table->string('auth_provider')->nullable();
            $table->string('auth_token')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->json('extra')->nullable();

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
        Schema::dropIfExists('delivery_men');
    }
}
