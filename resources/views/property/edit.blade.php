@extends('property.master')


@section('content')

    <div class="container my-3">
        <h1>Formulário de edição</h1>
            @if(!empty($property))
                @foreach($property as $prop)
                    <form action="{{ route('property.update', ['id'=>$prop->id]) }}" method="post">
                    @csrf
                    @method('put')
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" name="title" id="title" value="{{$prop->title}} "class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea type="text" name="description" id="description" cols="30" rows="10"class="form-control">{{ $prop->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="rental_price">Valor de locação</label>
                                <input type="text" name="rental_price" id="rental_price" value="{{$prop->rental_price}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="sale_price">Valor de compra</label>
                                <input type="text" name="sale_price" id="sale_price" value="{{$prop->sale_price}}"class="form-control">
                            </div>


                            <button type="submit" class="btn btn-primary">Atualizar Imóvel</button>
                        @endforeach
                    @endif


                </form>
    </div>

@endsection
