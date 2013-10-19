<?php

class ProjectStatusesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('projectstatuses')->truncate();

		$projectstatuses = array(
			['title' => 'In Progress'],
			['title' => 'Late'],
			['title' => 'Pending Approval'],
			['title' => 'Denied Approval'],
			['title' => 'Ready for Release'],
			['title' => 'Released']
		);

		// Uncomment the below to run the seeder
		DB::table('project_statuses')->insert($projectstatuses);
	}

}
