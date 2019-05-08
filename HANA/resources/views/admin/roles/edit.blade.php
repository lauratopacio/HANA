@extends('admin.layouts.layout_admin')
@section('content')
<div class="container">
		<div class="graph-visual tables-main">
			<h2 class="inner-tittle">Edit Role</h2>
			
					<form method="post" action="{{ route('roles.update',  $role->id) }}">
					        @method('PATCH')
					        @csrf
							<div class="form-group">
								<label class="col-md-1 control-label">Name</label>
								<div class="col-md-5">
									<div class="input-group">							
										<input type="text" class="form-control1 icon" name="name" value="{{ old('name', $role->name) }}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-1 control-label">Guard</label>
								<div class="col-md-5">
									<div class="input-group">							
										<input type="text" class="form-control1 icon" name="guard_name" value="{{ old('guard_name', $role->guard_name) }}" placeholder="Guard Name">
									</div>
								</div>
							</div>
					        <button type="submit" class="btn btn-primary btn-lg">Save</button>
					</form>
		</div>
	</div>
</div>
@stop