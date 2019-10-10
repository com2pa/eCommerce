@extends('store.template')
@section('content')

    <section class="main-Product">
        {{-- recorriendo el arreglo que contiene todo el producto --}}
        @foreach ($products as $product)
            <div class="main-Product__catalogo">
                {{-- mostrando el nombre del producto --}}
                <h3>{{$product->name}}</h3>
                {{-- mostrando las imagen de cada producto --}}
                <img  class=""src="{{ $product->image}}" alt="productos" width="200px">
                <div class="product-Info">
                    <p>{{$product->extract}}</p>
                    {{-- mostrando precio  con dos decimales --}}
                    <p>Precio: ${{ number_format($product->prince,2)}}</p>
                    <p>
                        <a class="produc-boton__link"href=""> La Quiero</a>
                        <a class="produc-boton__link"href="">Leer Más</a>

                    </p>
                </div>
            </div>
        @endforeach

    </section>

@endsection
