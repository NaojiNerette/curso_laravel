{{-- MI COMENTARIO DE HTML --}}

@include('contacto.header', array('nombre', $nombre))

<h1>Página de contacto {{ $nombre }} - {{--isset($edad) && !is_null($edad) ? $edad : 'No existe edad' --}}</h1>

@if(is_null($edad))
    No existe la edad
@else
    si existe la edad: {{$edad}}
@endif

<p>
    <?php $numero = 8; ?>
Tabla del {{$numero}}
</p>

@for ($i = 0; $i <= 10; $i++)
    {{$i.' x '.$numero.' = '.($i*$numero)}} <br>
@endfor

<?php $f = 1; ?>
@while($f<=7)
    <p>{{'Hola mundo '.$f}}</p>
    <?php $f++; ?>
@endwhile

@foreach ($frutas as $fruta)
    {{$fruta}}
@endforeach