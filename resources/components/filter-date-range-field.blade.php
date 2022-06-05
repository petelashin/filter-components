 <div class="form-group">
    <label class="col-sm-4 control-label">
        {{ $name }}
    </label>
    <div class="col-sm-2">
        {!! Form::date('filter[' . $field . '][]', $currentSearchQuery[0] ?? null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-sm-2">
        {!! Form::date('filter[' . $field . '][]', $currentSearchQuery[1] ?? null, ['class' => 'form-control']) !!}
    </div>
</div>
                   
                       
