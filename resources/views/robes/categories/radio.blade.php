<div class="form-group">
    @foreach ($categories as $id => $categorie)
        @if(isset($robe) && $id == $robe->id)
            <label class="radio-inline"><input type="radio" value="{{ $id }}" name="category">{{ $categorie }}</label>
        @else
            <label class="radio-inline"><input type="radio" value="{{ $id }}" checked name="category">{{ $categorie }}</label>
        @endif
    @endforeach
</div>
<div class="form-group" id="robes_by_list">
    {!! Form::label('robe_id', 'Robe') !!}
    {!! Form::select('robe_id', $robes_list, isset($robe) ? $robe->id:null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>
@section('scripts')
    @parent
    <script type="text/javascript">
        $('input[type=radio][name=category]').change(function(){
            var _category_id = this.value;
            console.log($('#robes_by_list'));
            $.post('/admin/robes/filter_list', {category_id: _category_id}).done(function(html){
                $('#robes_by_list').html(html);
            });
        });
    </script>
@stop
