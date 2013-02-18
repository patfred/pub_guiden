<?php

class Add_Comments {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table("comments")->insert(
        array(
            'pub_id' => '1',
            'user_id' => '1',
            'comment' => 'Hej detta är en kommentar ifrån user nr uno',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("comments")->insert(
        array(
            'pub_id' => '2',
            'user_id' => '1',
            'comment' => 'Hej detta är en kommentar ifrån user nr ett',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("comments")->insert(
        array(
            'pub_id' => '3',
            'user_id' => '1',
            'comment' => 'Hej detta är en kommentar ifrån user nr ett',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("comments")->insert(
        array(
            'pub_id' => '4',
            'user_id' => '1',
            'comment' => 'Hej detta är en kommentar ifrån user nr ett',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("comments")->insert(
        array(
            'pub_id' => '5',
            'user_id' => '1',
            'comment' => 'Hej detta är en kommentar ifrån user nr ett',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('comments')->where('id', '=', '1')->delete();
		DB::table('comments')->where('id', '=', '2')->delete();
		DB::table('comments')->where('id', '=', '3')->delete();
		DB::table('comments')->where('id', '=', '4')->delete();
		DB::table('comments')->where('id', '=', '5')->delete();
	}

}