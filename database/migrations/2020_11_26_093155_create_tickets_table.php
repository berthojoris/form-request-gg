<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->enum('status', ["OPEN","CLOSE"]);
            $table->string('project_id');
            $table->string('project_name');
            $table->string('departemen_request');
            $table->unsignedBigInteger('user_destination');
            $table->string('username_submited');
            $table->string('email_submited');
            $table->string('digital_asset');
            $table->text('background');
            $table->text('objective');
            $table->string('target_audience');
            $table->text('creatif_consideration');
            $table->string('support_other_channel');
            $table->string('kpi');
            $table->string('requirement_rules');
            $table->string('reference');
            $table->string('project_brief');
            $table->date('campaign_period_start');
            $table->date('campaign_period_end');
            $table->double('estimated_budget', 12, 0);
            $table->string('document_upload')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tickets');
    }
}
