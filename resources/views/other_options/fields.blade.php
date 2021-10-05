<!-- Spot Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Spot_name', 'Spot Name:') !!}
    {!! Form::text('Spot_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Payment', 'Payment:') !!}
    {!! Form::number('Payment', null, ['class' => 'form-control']) !!}
</div>