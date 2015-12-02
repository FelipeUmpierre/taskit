<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTaskChecklistItemTableAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_checklist_items', function (Blueprint $table) {
            $table->foreign('task_checklist_id')->references('id')->on('task_checklists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_checklist_items', function (Blueprint $table) {
            $table->dropForeign('task_checklist_items_task_checklist_id_foreign');
            $table->dropColumn('task_checklist_id');
        });
    }
}
