@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    @foreach ($typedocument as $vtypedocument)
    <div class="col-md-4">
        <a href="{{route('anne.show', ['DepartementId'=> $idDepartement, 'TypeDocumentId'=>$vtypedocument->id])}}">{{$vtypedocument->libelle}}</a>

    </div>
    @endforeach

</div>

@endsection
