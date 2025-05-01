@extends('layouts.master')

@section('title', 'Vigilium - Créer une projet')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="breadcrumb-path mb-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Projets</li>
                    </ul>
                    <h3>Créer un projet</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('projets.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="title">Nom *</label>
                                        <input type="text" id="title" placeholder="Nom" name="name" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="project_id">Projet *</label>
                                    <select id="project_id" name="departement_id" required class="form-control">
                                        @foreach ($Departements as $Departement)
                                            <option value="{{ $Departement->id }}">{{ $Departement->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="start_date">Date de début *</label>
                                    <input type="datetime-local" id="start_date" name="start_date" required class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="due_date">Date d'échéance *</label>
                                    <input type="datetime-local" id="end_date" name="end_date" required class="form-control">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="form-btn">
                            <button type="submit" class="btn btn-apply w-auto">Soumettre</button>
                            <a href="#" class="btn btn-secondary">Annuler</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
