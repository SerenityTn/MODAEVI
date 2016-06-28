<div class="col-md-12 robes-stats">
    Robes en totale : {{ count($robes) }}
</div>

@foreach($robes as $robe)
    <div class="col-md-2 robe_preview">
        <button type="button" class="delete-robe img-control" value="{{ $robe->id }}">
            <span class="glyphicon glyphicon-remove"></span>
        </button>
        <a href="{{ route('admin.robe.edit', [$robe->id]) }}">
            <img class="img-responsive" src='{{ URL::asset("imgs/robes/$robe->img_name") }}' with="200">
        </a>
        <h5>Référence : <b>{{ $robe->ref }}</b></h5>
        <h5>Catégorie : <b>{{ $robe->getCategoryName() }}</b></h5>
        <h5>Prix : <b>{{ $robe->price }}</b></h5>
        <a href="{{ route('admin.location.robe.create', $robe->id) }}" class="btn btn-success">Louer cette robe</a>
    </div>
@endforeach

@section('scripts')
    @parent
    <script type="text/javascript">
        $(document).on('click', '.delete-robe', function(){
            var btn = this;
            $.ajax({
                url:'robe/' + $(this).val(),
                type: 'DELETE',
                success: function(result){
                    $(btn).parent().remove();
                    console.log(result);
                }
            });
        });
    </script>
@stop
