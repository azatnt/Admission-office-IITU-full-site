<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachelorSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachelor_submissions', function (Blueprint $table) {
            $table->id();
            $table->longText("admission_regulations");
            $table->longText("submission_documents");
            $table->longText("olympiad");
            $table->binary("guidebook");
            $table->binary("tuition_fee");
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
        Schema::dropIfExists('bachelor_submissions');
    }
}
