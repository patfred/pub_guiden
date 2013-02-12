<?php

class Add_Pubs {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table("pubs")->insert(
        array(
            'name' => 'The pub',
            'description' => 'Detta är en pub',
            'quiz' => true,
            'after_work' => false,
            'lowest_price' => '35',
            'address' => 'The pubgatan 4',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("pubs")->insert(
        array(
            'name' => 'Sejdeln',
            'description' => 'Detta är en sejdeln',
            'quiz' => true,
            'after_work' => true,
            'lowest_price' => '25',
            'address' => 'The pubgatan 8',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("pubs")->insert(
        array(
            'name' => 'Bishop arms',
            'description' => 'Detta är en BA',
            'quiz' => true,
            'after_work' => true,
            'lowest_price' => '55',
            'address' => 'The pubgatan 1',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("pubs")->insert(
        array(
            'name' => 'Kellys',
            'description' => 'Detta är Kellys fräsiga pub',
            'quiz' => false,
            'after_work' => false,
            'lowest_price' => '41',
            'address' => 'The pubgatan 11',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        	)
    	);

    	DB::table("pubs")->insert(
        array(
            'name' => 'Kings head',
            'description' => 'Detta är Kings heads ofräsiga pub',
            'quiz' => false,
            'after_work' => true,
            'lowest_price' => '11',
            'address' => 'The pubgatan 13',
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
		DB::table('pubs')->where('name', '=', 'The pub')->delete();
		DB::table('pubs')->where('name', '=', 'Sejdeln')->delete();
		DB::table('pubs')->where('name', '=', 'Bishop arms')->delete();
		DB::table('pubs')->where('name', '=', 'Kellys')->delete();
		DB::table('pubs')->where('name', '=', 'Kings head')->delete();
	}

}