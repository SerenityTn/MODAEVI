{{ Form::open(['route' => ["admin.".strtolower(class_basename($model)).".destroy", $model->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'display:inline']) }}
<a href="{{ route("admin.".strtolower(class_basename($model)).".edit", $model->id) }}" class="model-control"><span class="glyphicon glyphicon-pencil"></a>
<button type="submit" class="model-control"><span class="glyphicon glyphicon-remove"></span></button>
{{ Form::close() }}
