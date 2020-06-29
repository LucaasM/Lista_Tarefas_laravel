@extends('property.master')

@section('content')
    <div class="container my-3">
        <h1>Formulário de cadastro :: Imoveis</h1>

        <form action="{{ route('property.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control">

            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="rental_price">Valor de locação</label>
                <input type="text" name="rental_price" id="rental_price" class="form-control">
            </div>

            <div class="form-group">
                <label for="sale_price">Valor de compra</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control">
            </div>


            <button class="btn btn-primary" type="submit">Cadastra Imóvel</button>


        </form>
    </div>
@endsection
