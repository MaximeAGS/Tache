@extends('layouts.master')
@section('title', 'Vigilium - Projets')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="breadcrumb-path">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}"><img src="{{ asset('img/dash.png') }}" class="mr-2" alt="breadcrumb">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Projets</li>
                    </ul>
                    <h3>Projets</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="head-link-set">
                    <ul>
                        {{-- <li><a class="active" href="#">Overview</a></li> --}}
                    </ul>
                    <a class="btn-add"href="{{ route('projets.create') }}">Créer un projet</a>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-titles">Task Details</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table custom-table no-footer">
                            <thead> 
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Département</th>
                                    <th>Date début</th>
                                    <th>Date fin</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1; @endphp
                                @forelse($projects as $project)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td><label>{{ $project->name }}</label></td>
                                        <td><label>{{ $project->description }}</label></td> 
                                        <td><label>{{ $project->department->name ?? 'N/A' }}</label></td>
                                        <td><label>{{ \Carbon\Carbon::parse($project->start_date)->format('d/m/Y') }}</label></td>
                                        <td><label>{{ \Carbon\Carbon::parse($project->end_date)->format('d/m/Y') }}</label></td>  
                                        <td class="tab-select">
                                            <!-- Affichage du statut avec un design spécifique, style intégré -->
                                            <label style="
                                                background-color: {{
                                                    $project->status === 'completed' ? '#a8e1a8' :
                                                    ($project->status === 'on_hold' ? '#a8e1a8' :
                                                    ($project->status === 'in_progress' ? '#3fa286' :
                                                    ($project->status === 'not_started' ? '#f5a6a6' : '#f0f0f0')))
                                                }};
                                                color: {{
                                                    $project->status === 'completed' ? '#4caf50' :
                                                    ($project->status === 'on_hold' ? '#4caf50' :
                                                    ($project->status === 'in_progress' ? '#bf9d3b' :
                                                    ($project->status === 'not_started' ? '#e53935' : '#555')))
                                                }};
                                                padding: 4px 8px; border-radius: 5px; font-weight: bold;
                                            ">
                                                @switch($project->status)
                                                    @case('not_started') Non démarré @break
                                                    @case('in_progress') En cours @break
                                                    @case('on_hold') En pause @break
                                                    @case('completed') Terminé @break
                                                    @default {{ ucfirst($project->status) }}
                                                @endswitch
                                            </label> 
                                        </td> 
                                        <td>
                                            <div class="actionset"> 
                                                <label>
                                                    <a class="action_label5" href="#" 
                                                       data-toggle="modal" 
                                                       data-target="#editTaskModal" 
                                                       data-id="{{ $project->id }}" 
                                                       data-name="{{ $project->name }}" 
                                                       data-description="{{ $project->description }}" 
                                                       data-department="{{ $project->department_id }}"
                                                       data-start_date="{{ $project->start_date }}" 
                                                       data-end_date="{{ $project->end_date }}"
                                                       data-status="{{ $project->status}}">
                                                        Modifier <i data-feather="edit"></i>
                                                    </a>
                                                </label> 
                                                <label>
                                                    <a href="#" class="action_label4 delete-btn" data-id="{{ $project->id }}" data-toggle="modal" data-target="#deleteModal">
                                                        Supprimer <i data-feather="trash-2"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">Aucun projet trouvé.</td>
                                        </tr>
                                    @endforelse 
                            </tbody>
                        </table>
                        <div>
                            {{ $projects->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Delete Confirmation -->
<div class="customize_popup">
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title w-100 text-center" id="deleteModalLabel">
                       Êtes-vous sûr de vouloir supprimer ce projet ?
                    </h5>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" form="deleteForm" class="btn btn-success">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Formulaire de suppression -->
<form id="deleteForm" method="POST" action="">
    @csrf
    @method('DELETE')
</form>


<!-- Modal d'édition -->
<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <form method="POST" action="" id="editTaskForm">
    @csrf
    @method('PUT')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modifier le projet</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row">
            <!-- Champs de formulaire (comme title, description, etc.) -->
            <div class="form-group col-md-12">
                <label>Nom</label>
                <input type="text" name="name" class="form-control" id="edit-name">
            </div>
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="description" class="form-control" id="edit-description"></textarea>
            </div> 
            <div class="form-group col-md-6">
                <label>Département</label>
                <select name="department" class="form-control" id="edit-department">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div> 
            <div class="form-group col-md-6">
                <label>Statut</label>
                <select name="status" class="form-control" id="edit-status">
                    <option value="not_started" {{ old('status', $project->status ?? '') === 'not_started' ? 'selected' : '' }}>Non démarré</option>
                    <option value="in_progress" {{ old('status', $project->status ?? '') === 'in_progress' ? 'selected' : '' }}>En cours</option>
                    <option value="on_hold" {{ old('status', $project->status ?? '') === 'on_hold' ? 'selected' : '' }}>En pause</option>
                    <option value="completed" {{ old('status', $project->status ?? '') === 'completed' ? 'selected' : '' }}>Terminé</option>
                </select>
            </div>
             <div class="form-group col-md-6">
                <label>Date de début</label>
                <input type="date" name="start_date" class="form-control" id="edit-start_date">
            </div>
            <div class="form-group col-md-6">
                <label>Date d'échéance</label>
                <input type="date" name="end_date" class="form-control" id="edit-end_date">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>
    </div>
    </form>
  </div>
</div>



<script>
       $(document).on('click', '.action_label5', function() {
        // Récupérer les données depuis les attributs data-*
        var projetId = $(this).data('id');
        var name = $(this).data('name');
        var description = $(this).data('description');
        var end_Date = $(this).data('end_date');
        var start_Date = $(this).data('start_date');
        var status = $(this).data('status');
        var departmentId = $(this).data('department'); 

        // Mettre à jour l'URL du formulaire pour inclure l'ID de la tâche
        $('#editTaskForm').attr('action', '/admin/projets/' + projetId); 

        // Remplir les champs du modal avec les données
        $('#edit-name').val(name);
        $('#edit-description').val(description);
        $('#edit-end_date').val(end_Date);
        $('#edit-start_date').val(start_Date);
        $('#edit-status').val(status);
        $('#edit-department').val(departmentId);
    });

</script>


<script>
    $(document).ready(function () {
        $('.delete-btn').on('click', function () {
            var projetId = $(this).data('id');
            var actionUrl = '/admin/projets/' + projetId;
            $('#deleteForm').attr('action', actionUrl);
        });
    });
</script> 
@endsection





