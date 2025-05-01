@extends('layouts.master')
@section('title', 'Vigilium - Taches')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="breadcrumb-path">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}"><img src="{{ asset('img/dash.png') }}" class="mr-2" alt="breadcrumb">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Tâches</li>
                    </ul>
                    <h3>Tâches</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="head-link-set">
                    <ul>
                        {{-- <li><a class="active" href="#">Overview</a></li> --}}
                    </ul>
                    <a class="btn-add"href="{{ route('taches.create') }}">Créer une tache</a>
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
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Projet</th>
                                    <th>Date d'échéance</th>
                                    <th>Assignée à</th>
                                    <th>Crée par</th>
                                    <th>Priorité</th>
                                    <th>Statut</th> 
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1; @endphp
                                @foreach($Taches as $task)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td><label>{{ $task->title }}</label></td>
                                        <td><label>{{ $task->description }}</label></td>
                                       <td><label>{{ $task->Project->name ?? 'NA' }}</label></td>
                                        <td><label>{{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</label></td> 
                                        <td>
                                            <div class="table-img">
                                                <div class="table-img">
                                                    @if($task->assignee) <!-- Vérifie si un utilisateur est assigné à la tâche -->
                                                        <div class="assignee-info">
                                                            @if($task->assignee->profile_photo) <!-- Vérifie si l'assignee a une photo de profil -->
                                                                <img src="{{ asset('storage/profile/' . $task->assignee->profile_photo) }}" alt="profile" class="img-table" />
                                                            @else
                                                                <i class="fas fa-user-circle fa-2x"></i> <!-- Icône par défaut si pas de photo -->
                                                            @endif
                                                            <label>{{ $task->assignee->firstname }} {{ $task->assignee->lastname }} ({{ $task->assignee->username }})</label>
                                                        </div>
                                                    @else
                                                        <label>No assignee</label> <!-- Message quand aucun assignee n'est assigné -->
                                                    @endif 
                                                </div>
                                             </div>                                            
                                        </td>
                                        <td>
                                            <div class="table-img">
                                                <div class="table-img">
                                                   @if($task->creator) <!-- Vérifie si un utilisateur est assigné à la tâche -->
                                                        <div class="creator-info">
                                                            @if($task->creator->profile_photo) <!-- Vérifie si le créateur a une photo de profil -->
                                                                <img src="{{ asset('storage/profile/' . $task->creator->profile_photo) }}" alt="profile" class="img-table" />
                                                            @else
                                                                <i class="fas fa-user-circle fa-2x"></i> <!-- Icône par défaut si pas de photo -->
                                                            @endif
                                                            <label>{{ $task->creator->firstname }} {{ $task->creator->lastname }} ({{ $task->creator->username }})</label>
                                                        </div>
                                                    @else
                                                        <label>Créateur inconnu</label>
                                                    @endif
                                                </div>
                                            </div>                                            
                                        </td>  
                                       <td class="tab-select">
                                            <!-- Affichage de la priorité avec un design spécifique, style intégré -->
                                            <label style="background-color: {{ $task->priority == 1 ? '#e0e0e0' : ($task->priority == 2 ? '#ffeb3b' : ($task->priority == 3 ? '#4caf50' : '#f44336')) }}; color: {{ $task->priority == 1 ? '#757575' : ($task->priority == 2 ? '#f57c00' : ($task->priority == 3 ? 'white' : 'white')) }}; padding: 4px 8px; border-radius: 5px; font-weight: bold;">
                                                @switch($task->priority)
                                                    @case(1)
                                                        Faible
                                                        @break
                                                    @case(2)
                                                        Moyenne
                                                        @break
                                                    @case(3)
                                                        Haute
                                                        @break
                                                    @case(4)
                                                        Urgente
                                                        @break
                                                    @default
                                                        Non définie
                                                @endswitch
                                            </label>
                                        </td>
                                        <td class="tab-select">
                                            <!-- Affichage du statut avec un design spécifique, style intégré -->
                                            <label style="background-color: {{ $task->status->name === 'terminé' ? '#a8e1a8' : ($task->status->name === 'en cours' ? '#3fa286' : ($task->status->name === 'bloqué' ? '#f5a6a6' : '#f0f0f0')) }}; color: {{ $task->status->name === 'terminé' ? '#4caf50' : ($task->status->name === 'en cours' ? '#bf9d3b' : ($task->status->name === 'bloqué' ? '#e53935' : '#555')) }}; padding: 4px 8px; border-radius: 5px; font-weight: bold;">
                                                {{ $task->status ? $task->status->name : 'Statut non défini' }}
                                            </label>
                                        </td> 
                                        <td>
                                            <div class="actionset">
                                                {{-- <label><a class="action_label5" href="{{ route('task.edit', $task->id) }}">Edit <i data-feather="edit"></i></a></label> --}}
                                               <label>
                                                    <a class="action_label5" href="#" 
                                                       data-toggle="modal" 
                                                       data-target="#editTaskModal" 
                                                       data-id="{{ $task->id }}" 
                                                       data-title="{{ $task->title }}" 
                                                       data-description="{{ $task->description }}" 
                                                       data-due_date="{{ $task->due_date }}" 
                                                       data-priority="{{ $task->priority }}"
                                                       data-status="{{ $task->status_id }}"
                                                       data-project="{{ $task->project_id }}"
                                                       data-assignee="{{ $task->assignee_id }}">
                                                        Modifier <i data-feather="edit"></i>
                                                    </a>
                                                </label> 
                                                <label>
                                                    <a href="#" class="action_label4 delete-btn" data-id="{{ $task->id }}" data-toggle="modal" data-target="#deleteModal">
                                                        Supprimer <i data-feather="trash-2"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <div style="display: flex; justify-content: flex-end; margin-top: 20px;">
                                {{ $Taches->withQueryString()->links() }}
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
                       Êtes-vous sûr de vouloir supprimer cette tâche ?
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
            <h5 class="modal-title">Modifier la tâche</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row">
            <!-- Champs de formulaire (comme title, description, etc.) -->
            <div class="form-group col-md-6">
                <label>Titre</label>
                <input type="text" name="title" class="form-control" id="edit-title">
            </div>
            <div class="form-group col-md-6">
                <label>Date d'échéance</label>
                <input type="date" name="due_date" class="form-control" id="edit-due_date">
            </div>
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="description" class="form-control" id="edit-description"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Projet</label>
                <select name="project_id" class="form-control" id="edit-project">
                    @foreach($Projets as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Assigné à</label>
                <select name="assignee_id" class="form-control" id="edit-assignee">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }} ({{ $user->username }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Priorité</label>
                <select name="priority" class="form-control" id="edit-priority">
                    <option value="1">Faible</option>
                    <option value="2">Moyenne</option>
                    <option value="3">Haute</option>
                    <option value="4">Urgente</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Statut</label>
                <select name="status_id" class="form-control" id="edit-status">
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
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
        var taskId = $(this).data('id');
        var title = $(this).data('title');
        var description = $(this).data('description');
        var dueDate = $(this).data('due_date');
        var priority = $(this).data('priority');
        var statusId = $(this).data('status');
        var projectId = $(this).data('project');
        var assigneeId = $(this).data('assignee');

        // Mettre à jour l'URL du formulaire pour inclure l'ID de la tâche
        $('#editTaskForm').attr('action', '/admin/taches/' + taskId); 

        // Remplir les champs du modal avec les données
        $('#edit-title').val(title);
        $('#edit-description').val(description);
        $('#edit-due_date').val(dueDate);
        $('#edit-priority').val(priority);
        $('#edit-status').val(statusId);
        $('#edit-project').val(projectId);
        $('#edit-assignee').val(assigneeId);
    });

</script>


<script>
    $(document).ready(function () {
        $('.delete-btn').on('click', function () {
            var taskId = $(this).data('id');
            var actionUrl = '/admin/taches/' + taskId;
            $('#deleteForm').attr('action', actionUrl);
        });
    });
</script>
 


@endsection





