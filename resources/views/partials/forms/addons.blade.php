<div class="form-group">
    @foreach($addons as $addon)
        <label class="checkbox-inline">
            @if(isset($location_addons) && $location_addons->contains($addon->id))
                <input type="checkbox" name="{{ $addon->name }}" value="{{ $addon->id }}" checked>{{ $addon->name }}
            @else
                <input type="checkbox" name="{{ $addon->name }}" value="{{ $addon->id }}" >{{ $addon->name }}
            @endif
        </label>
    @endforeach
</div>
