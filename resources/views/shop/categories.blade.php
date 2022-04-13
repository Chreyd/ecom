@extends('shop')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if ($category->parent_id !==null)
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produit_par_categories',['id'=>$category->parent->id])}}">{{$category->parent->name}}</a></li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>

            @foreach ($category->childrens as $children)
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('voir_produit_par_categories',['id'=>$children->id])}}">{{$children->name}}</a></li>
            @endforeach

        </ol>
    </nav>
<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">

                @foreach ($produits as $produit)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset($produit->photo_principale)}}" class="card-img-top img-fluid" alt="{{$produit->nom}}">
                            <div class="card-body">
                                <p class="card-text">{{$produit->nom}}<br>{{$produit->description}} <br/>
                                    <span class="badge badge-info"><a class="text-white" href="{{route('voir_produit_par_categories',['id'=>$produit->catagory->id])}}"> {{$produit->catagory->name}} </a></span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{number_format($produit->prix_ht,2)}} €</span>
                                    <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</main>
@endsection