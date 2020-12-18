<div class="modal fade" id="modal-child-{{$children->id}}" tabindex="-1" role="dialog" aria-labelledby="child-modal-labelly-{{$children->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="child-modal-labelly-{{$children->id}}">Modifier les informations de l'enfant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('medecin.patients.childs.update', [
        'patient' => $patient, 
        'children' => $children
        ]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">

          <div class="form-group">
            <label for="children_first_name">Prénom</label>
            <input type="text" id="children_first_name" class="form-control @error('children_first_name') is-invalid @enderror" name="children_first_name" value="{{ old('children_first_name') ?? $children->first_name }}" required>
            @error('children_first_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="children_last_name">Nom</label>
            <input type="text" id="children_last_name" class="form-control @error('children_last_name') is-invalid @enderror" name="children_last_name" value="{{ old('children_last_name') ?? $children->last_name }}" required>
            @error('children_last_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
              <label for="children_birthday">Date de naissance</label>
              <input type="date" name="children_birthday" id="children_birthday" class="form-control @error('children_birthday') is-invalid @enderror" value="{{ old('children_birthday') ?? $children->birthday->format('Y-m-d') }}" required>
              @error('children_birthday')
                  <span class="invalid-feedback">{{ $message }}</span>
              @enderror
          </div>
          
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Mise à jour</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>