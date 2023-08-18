<div class="from-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la etiqueta...']) !!}
    @error('name')
      <small class="text text-danger"> {{$message}}</small>
    @enderror
 </div>

 <div class="from-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug',null, ['class' => 'form-control','placeholder' => 'Ingrese el slug de la etiqueta...', 'readonly']) !!}

    @error('slug')
      <small class="text text-danger"> {{$message}}</small>
    @enderror
 </div>

 <div class="form-group">
   {{-- <label for="">Color</label>
     <select name="Color" id="" class="form-control">
     <option value="red">ROJO</option>
     <option value="green">VERDE</option>
     <option value="blue" selected>AZUL</option>
    </select>--}}
    {!! Form::label('color','Color') !!}
        {!! Form::select('color',$colors,null, ['class' => 'form-control']) !!}
        
        @error('color')
      <small class="text text-danger"> {{$message}}</small>

    @enderror
 </div>