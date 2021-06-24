<!-- Fac Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_id', 'Fac Id:') !!}
    {!! Form::number('fac_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fac Tipo Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_tipo_pago', 'Fac Tipo Pago:') !!}
    {!! Form::text('fac_tipo_pago', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Fac Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_descripcion', 'Fac Descripcion:') !!}
    {!! Form::text('fac_descripcion', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Fac Iva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_iva', 'Fac Iva:') !!}
    {!! Form::number('fac_iva', null, ['class' => 'form-control']) !!}
</div>

<!-- Fac Descuento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_descuento', 'Fac Descuento:') !!}
    {!! Form::number('fac_descuento', null, ['class' => 'form-control']) !!}
</div>

<!-- Fac Valor Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_valor_total', 'Fac Valor Total:') !!}
    {!! Form::number('fac_valor_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturaDetalles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
