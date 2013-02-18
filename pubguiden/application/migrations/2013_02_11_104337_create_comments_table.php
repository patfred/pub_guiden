<?php

class Create_Comments_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("comments", function($table) {
            $table->create();
            $table->increments("id");
            $table->integer("pub_id");
            $table->integer("user_id");
            $table->string("comment", 300);
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("comments");
	}

}