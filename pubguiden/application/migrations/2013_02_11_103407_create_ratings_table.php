<?php

class Create_Ratings_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("ratings", function($table) {
            $table->create();
            $table->increments("id");
            $table->integer("pub_id");
            $table->integer("user_id");
            $table->integer("service");
            $table->integer("atmosphere");
            $table->integer("food");
            $table->integer("place");
            $table->integer("assortments");
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
		Schema::drop("ratings");
	}

}