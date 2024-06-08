@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    @foreach ($anne as $vanne)
    <div class="col-md-4">
        <a href="{{route('folder.explore',[
                                        'DepartementId' =>$DepartementId,
                                       'TypeDocumentId'=> $TypeDocumentId,
                                       'AnnneId'=> $vanne->id
                                        ])}}">{{$vanne->libelle}}</a>
    </div>
        @endforeach

</div>


@endsection
