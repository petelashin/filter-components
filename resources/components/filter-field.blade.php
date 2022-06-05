 <div class="form-group">
    <label class="col-sm-4 control-label">
        {{ $name }}
    </label>
    <div class="col-sm-4">
        {!! Form::text('filter[' . $field . ']', $currentSearchQuery, ['class' => 'form-control']) !!}
    </div>
</div>
                   
                       
