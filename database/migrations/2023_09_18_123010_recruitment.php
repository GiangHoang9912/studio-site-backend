<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recruitment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recruitment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('expried_date');
            $table->string('location');
            $table->string('description');
            $table->softDeletes();
        });

        DB::table('recruitment')->insert(
            [
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ],
                [
                    'position' => 'Senior Social/Community Leader',
                    'expried_date' => '2023-10-31 23:55:56',
                    'location' => '19 Thân Văn Nhiếp, P. An Phú, TP. Thủ Đức, TP.HCM',
                    'description' => 'Chúng ta của sau này',
                ]
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
