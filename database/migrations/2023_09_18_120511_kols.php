<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('channel_name');
            $table->string('channel_url');
            $table->string('followers_number');
            $table->string('description');
            $table->softDeletes();
        });

        DB::table('kols')->insert(
            [
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'channel_name' => 'Chúng ta của sau này',
                    'channel_url' => '#',
                    'followers_number' => '1000',
                    'description' => 'Chúng ta của sau này',
                ],
            ]
        );
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
