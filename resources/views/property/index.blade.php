@extends('property.master')

@section('content')

    <div class="container my-3">
        <h1>Listagem de Imoveis</h1>


        <table class="table table-striped table-hover">
            <thead class="bg-primary text-white">
                <td>Título</td>
                <td>Valor de Locação</td>
                <td>Valor de Compra</td>
                <td>Ações</td>
            </thead>
            @if(!empty($properties))
                @foreach($properties as $property)

                <tr>
                    <td>{{ $property->title }}</td>
                    <td>R$ {{ number_format($property->rental_price), 2, ",", "." }}</td>
                    <td>R$ {{  number_format($property->sale_price), 2, ",", "."  }}</td>
                    <td><a href="{{ route('property.show', [$property->name])}}">Ver Mais</a> | <a href="{{ route('property.edit', [$property->name])}}">Editar</a> | <a href="{{ route('property.destroy', [$property->name])}}">Remover</a></td>

                </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection
