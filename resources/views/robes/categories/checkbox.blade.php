@for($i = 0; $i < count($categories); $i++)
    <label class="checkbox-inline">
        <input class="category_filter" type="checkbox" name="{{ $categories[$i] }}" value="{{ $i }}">{{ $categories[$i] }}
    </label>
@endfor
