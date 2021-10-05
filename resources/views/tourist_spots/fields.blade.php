<!-- Tourist Spot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tourist_spot', 'Tourist Spot:') !!}
    {!! Form::text('Tourist_spot', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Expenses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Expenses', 'Expenses:') !!}
    {!! Form::number('Expenses', null, ['class' => 'form-control']) !!}
</div>