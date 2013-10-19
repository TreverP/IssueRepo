<?php

class ProjectStatuses extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function getStatusTitle($status)
	{
		$statuses = ProjectStatuses::all();

		foreach ($statuses as $s) {
			if ($s->id == $status) {
			return $s->title;
		}
		}

		
	}
}
