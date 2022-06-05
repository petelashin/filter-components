<div class="form-group">
    <label class="col-sm-4 control-label">
        {{ $name }}
    </label>
    <div class="col-sm-4">
        {!! Form::select('filter[' . $field . ']',
            ['No', 'Yes'], 
            $currentSearchQuery, [ 'class' => 'form-control', 'placeholder' => 'None'])
        !!}
    </div>
</div>

