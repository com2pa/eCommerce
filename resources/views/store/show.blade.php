@extends('store.template')
@section('Title','read more ')
@section('content')
    <h1> detale del producto</h1>
    <section>
        {{-- imagen de producto --}}
        <div class="">
            <img src="{{ $product->image}}" alt="producto" width="200px">
        </div>
        {{-- descripcion y precio del producto --}}
        <div class="">
            <p>{{$product->description}}</p>
            <p>Precio: ${{ number_format($product->prince,2)}}</p>
        {{-- botones --}}
            <p>
                <a href="" class="">La Quiero</a>

            </p>
        </div>
    </section>
    {{-- regresar a inicio --}}
    <a href="{{route('home')}}" class="">ir al inicio</a>

@endsection
