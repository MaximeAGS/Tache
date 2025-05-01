@extends('layouts.master')

@section('title', 'Vigilium - Créer une tâche')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="breadcrumb-path mb-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Tâches</li>
                    </ul>
                    <h3>Créer une tâche</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tasks.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="title">Titre *</label>
                                        <input type="text" id="title" placeholder="Titre" name="title" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="priority">Priorité *</label>
                                        <select id="priority" name="priority" required class="form-control">
                                            <option value="1">Faible</option>
                                            <option value="2">Moyenne</option>
                                            <option value="3">Haute</option>
                                            <option value="4">Urgente</option>
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
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="due_date">Date d'échéance *</label>
                                    <input type="datetime-local" id="due_date" name="due_date" required class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="project_id">Projet *</label>
                                    <select id="project_id" name="project_id" required class="form-control">
                                        @foreach ($Projets as $projet)
                                            <option value="{{ $projet->id }}">{{ $projet->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="assigned_to">Assigné à *</label>
                                    <select id="assigned_to" name="assigned_to" required class="form-control">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12" style="display: none">
                                <div class="form-group">
                                    <label for="created_by">Créateur *</label>
                                    <select id="created_by" name="created_by" required disabled class="form-control">
                                        <option value="{{ auth()->user()->id }}" selected>{{ auth()->user()->name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="status_id">Statut *</label>
                                    <select id="status_id" name="status_id" required class="form-control">
                                        @foreach ($status as $statu)
                                            <option value="{{ $statu->id }}">{{ $statu->name }}</option>
                                        @endforeach
                                    </select>
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
