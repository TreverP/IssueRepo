@extends('templates.master')


@section('header')
	<link type="text/css" rel="stylesheet" href="./styles/css/projects.css">
	{{ HTML::script('./js/jquery-2.0.3.js') }}
@stop

@section('content')

<a data-toggle="modal" href="#myModal" class="btn btn-default pull-right" id="addBtn" type="button">Create Project</a>

<table class="table table-striped table-hover" id="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>New Task</th>
			<th>Outstanding Issues</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		
		@foreach(Project::all() as $project)
			<tr>
				<td>{{ $project->id }}</td>
				<td>{{ $project->title }}</td>
				<td>{{ $project->newTask }}</td>
				<td>{{ $project->outstandingIssues }}</td>	
				@if($project->status == '1')
				<td id="tag"><span class="label label-primary">{{ ProjectStatuses::getStatusTitle($project->status) }}</span></td>
				@elseif($project->status == '3')
				<td id="tag"><span class="label label-warning">{{ ProjectStatuses::getStatusTitle($project->status) }}</span></td>
				@elseif($project->status == '4')
				<td id="tag"><span class="label label-danger">{{ ProjectStatuses::getStatusTitle($project->status) }}</span></td>
				@elseif($project->status == '5')
				<td id="tag"><span class="label label-info">{{ ProjectStatuses::getStatusTitle($project->status) }}</span></td>
				@elseif($project->status == '6')
				<td id="tag"><span class="label label-success">{{ ProjectStatuses::getStatusTitle($project->status) }}</span></td>
				@endif
			</tr>
		@endforeach	
		
	</tbody>
</table>	


<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Create New Project</h4>
        </div>
        <div class="modal-body">
        	{{ Form::open(array('url' => 'projects/createNew', 'method' => 'post', 'class' => 'form-horizontal')) }}
			
			<div class="form-group">
				{{ Form::label('name', 'Name', array('id' => 'nameLabel', 'class' => 'col-lg-2 control-label')) }}
				<div class="col-md-4"> {{ Form::text('name') }} </div>
			</div> <!-- /.form-group -->
			<div class="description" id="nameDesc">Max. 80 characters.</div>
			
			<div class="form-group">
				{{ Form::label('key', 'Key', array('id' => 'keyLabel', 'class' => 'col-lg-2 control-label')) }}
				<div class="col-lg-10"> {{ Form::text('key') }} </div>
			</div>
			<div class="description">Max. 5 characters.</div>
			
        	{{ Form::close() }}
        	<div id ="project-description-wrapper">
	        	<div id ="project-template-title">
	        		<h3>Project Management</h3>
	        	</div>
	        	<div id ="project-template-description">
	        		"Specify a descriptive name and key for your project."
	        		<br>
	        		<br>
	        		"You also need to choose a project lead, if you have more than one user. This should the project manager."
	        	</div>
        	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Create Project</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@stop

@section('scripts')
{{ HTML::script('./js/bootstrap.min.js') }}

@stop