<?php

class Create_Pubs_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::table("pubs", function($table) {
            $table->create();
            $table->increments("id");
            $table->string("name", 45);
            $table->text("description");
            $table->boolean("quiz");
            $table->boolean("after_work");
            $table->integer("lowest_price");
            $table->string("address", 45);
            $table->timestamps();
            $table->decimal("latitude", 8, 6);
            $table->decimal("longitude", 8, 6);
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("pubs");

	}

}