@extends('layouts.app')
@section('title', 'Etudiants List')
@section('content')

<div class="container">

<div class="row">
    <div class="col-12 text-center pt-5">
        <h1 class="display-one mt-5">{{ config ('app.name')}}</h1>
        <div class="row">
            <div class="col-8">
                <p>Bonne lecture de nos articles.</p>
            </div>
            <div class="col-4">
                <a href="{{ route('etudiant.create')}}" class="btn btn-outline-primary">Ajouter un article</a>
            </div>
        </div>
        <!-- <a class="btn btn-outline-primary" href="/etudiant">Afficher Etudiant</a> -->
    </div>
</div>



<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Liste des article</div>
            <div class="card-body">
                <ul>
                    @forelse ($etudiants as $etudiant)
                    <li>
                    <a href="{{ route('etudiant.show', $etudiant->id)}}">{{ $etudiant->nom }}</a>
                    </li>
                    @empty
                    <li class="text-danger"> Rien </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
</div>


@endsection