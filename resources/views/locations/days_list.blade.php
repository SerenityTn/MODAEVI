<div class="form-group">
    <select name="days" class="form-control">
        @for($i = 0; $i < 7; $i++)
            <option value="{{ $i }}"> {{ $i == 0 ? "Aujourd'hui":$i }}</option>
        @endfor
    </select>
</div>
