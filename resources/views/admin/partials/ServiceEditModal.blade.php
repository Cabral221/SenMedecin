<div class="modal fade" id="modal-service-{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="service-modal-labelly-{{$service->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="service-modal-labelly-{{$service->id}}">Modifier le service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.services.update',$service) }}" method="post">
        @csrf
        {{ method_field('patch') }}

        <div class="modal-body">

          <div class="form-group">
            <label for="service_libele_edit">Libellé</label>
            <input type="text" id="service_libele_edit" class="form-control @error('title') is-invalid @enderror" name="service_libele" value="{{ old('service_libele') ?? $service->libele }}" required>
            @error('service_libele')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
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