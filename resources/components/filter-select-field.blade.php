<div class="form-group">
    <label class="col-sm-4 control-label">
        {{ $name }}
    </label>
    <div class="col-sm-4">
        {!! Form::select('filter[' . $field . ']', 
        $options, 
        $currentSearchQuery, 
        ['placeholder' => 'Not selected', 'class' => 'form-control']) !!}
    </div>
</div>


                   
                       
