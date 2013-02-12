<?php

class Add_Ratings {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table("ratings")->insert(
        array(
            'service' => '5',
            'atmosphere' => '5',
            'food' => '5',
            'place' => '5',
            'assortments' => '5',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("ratings")->insert(
        array(
            'service' => '2',
            'atmosphere' => '2',
            'food' => '2',
            'place' => '2',
            'assortments' => '2',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("ratings")->insert(
        array(
            'service' => '4',
            'atmosphere' => '4',
            'food' => '4',
            'place' => '4',
            'assortments' => '4',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("ratings")->insert(
        array(
            'service' => '3',
            'atmosphere' => '3',
            'food' => '3',
            'place' => '3',
            'assortments' => '3',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("ratings")->insert(
        array(
            'service' => '1',
            'atmosphere' => '1',
            'food' => '1',
            'place' => '1',
            'assortments' => '1',
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
		DB::table('ratings')->where('id', '=', '1')->delete();
		DB::table('ratings')->where('id', '=', '2')->delete();
		DB::table('ratings')->where('id', '=', '3')->delete();
		DB::table('ratings')->where('id', '=', '4')->delete();
		DB::table('ratings')->where('id', '=', '5')->delete();
	}

}