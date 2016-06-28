<div class="col-md-4">
    <h5>Catégorie :</h5>
    @for($i = 0; $i < count($categories); $i++)
        <label class="checkbox-inline">
            <input class="category_filter" type="checkbox" name="{{ $categories[$i] }}" value="{{ $i }}">{{ $categories[$i] }}
        </label>
    @endfor
</div>

@section('scripts')
    @parent
    <script type="text/javascript">
        function getCategories(){
            var categories = [];
            $('input:checked').each(function(){
                categories.push($(this).val());
            });
            return categories;
        }

    	$('.category_filter').click(function() {
            var _type = $(this).val();
            _categories = getCategories();
    		$.post("robe/filter", {categories:_categories})
    		.done(function(html){
                console.log(html);
    			$('#list').html(html);
    		});
    	});
    </script>
@stop
