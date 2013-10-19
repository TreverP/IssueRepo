<?php

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('projects')->truncate();

		$projects = array(
			['title' => 'Ride Hard Rentals', 'newTask' => '3', 'outstandingIssues' => '5', 'status' => '1'],
			['title' => 'Trever Pehrson Site', 'newTask' => '10', 'outstandingIssues' => '2', 'status' => '2']
		);

		// Uncomment the below to run the seeder
		DB::table('projects')->insert($projects);
	}

}
