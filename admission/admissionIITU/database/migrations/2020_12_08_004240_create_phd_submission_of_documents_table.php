<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhdSubmissionOfDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phd_submission_of_documents', function (Blueprint $table) {
            $table->id();
            $table->binary("prerequisites");
            $table->text("submission");
            $table->binary("tuition");
            $table->binary("diploma");
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
        Schema::dropIfExists('phd_submission_of_documents');
    }
}
