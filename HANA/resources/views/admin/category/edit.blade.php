@extends('admin.layouts.layout_admin')
@section('content')
<div class="container">
		<div class="graph-visual tables-main">
			<h2 class="inner-tittle">Editar categoría</h2>
			
					<form method="post" action="{{ route('category.update',  $category->id) }}">
					        @method('PATCH')
					        @csrf
					        <div class="form-group">
					          <label for="name">Tipo:</label>
					          <input type="text" class="form-control" name="type" readonly="readonly" value={{ $category->type }} />
					        </div>
					        <div class="form-group">
					          <label for="price">Nombre:</label>
					          <input type="text" class="form-control" name="category"  value={{ $category->category }} />
					        </div>
					        <div class="form-group">
					          <label for="price">Banner:</label>
					         <img src="{{$category->path}}"  width="100px" height="50px" alt="Photo of perfil">
					        </div>
					        <button type="submit" class="btn btn-primary">Update</button>
					</form>
		</div>
	</div>
</div>
@stop