<form action="{{ $route }}" method="post">
    @csrf
    @method($method ?? 'POST' )
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="medecin_first_name">Prénom (s)</label>
                <input type="text" name="medecin_first_name" id="medecin_first_name" class="form-control @error('medecin_first_name') is-invalid @enderror" placeholder="Prénom (s)" value="{{ old('medecin_first_name') ?? $medecin->first_name }}">
                @error('medecin_first_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="medecin_last_name">Nom</label>
                <input type="text" name="medecin_last_name" id="medecin_last_name" class="form-control @error('medecin_last_name') is-invalid @enderror" placeholder="nom" value="{{ old('medecin_last_name') ?? $medecin->last_name }}">
                @error('medecin_last_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="medecin_phone">Téléphone</label>
                <input type="number" name="medecin_phone" id="medecin_phone" class="form-control @error('medecin_phone') is-invalid @enderror" placeholder="Téléphone" value="{{ old('medecin_phone') ?? $medecin->phone }}">
                @error('medecin_phone')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            @if ($formType === 'update')
                <p class="text-danger"><i class="mdi mdi-alert"></i> Les informations liées au connexion d'un agent ne peut être changer !</p>                
            @else
                <div class="form-group">
                    <label for="medecin_email">Adresse email de l'agent</label>
                    <input type="email" name="medecin_email" id="medecin_email" class="form-control @error('medecin_email') is-invalid @enderror" placeholder="Adresse email" value="{{ old('medecin_email') ?? $medecin->email }}">
                    @error('medecin_email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="medecin_password">Mot de passe de l'agent</label>
                    <input type="password" name="medecin_password" id="medecin_password" class="form-control @error('medecin_password') is-invalid @enderror" placeholder="Mot de passe">
                    @error('medecin_password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="medecin_gen_password">Mot de passe généric pour ses patients</label>
                    <input type="password" name="medecin_gen_password" id="medecin_gen_password" class="form-control @error('medecin_gen_password') is-invalid @enderror" placeholder="Mot de passe">
                    @error('medecin_gen_password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 col-form-label">Service  </label>
        @foreach ($services as $service)
        <div class="col-md-2">
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="medecin_service" id="medecin_service_{{ $service->id }}" value="{{ $service->id }}" 
                @if(
                    old('medecin_service') == $service->id || 
                    ($medecin->service != null && $medecin->service->id == $service->id)
                ) checked @endif> {{ $service->libele }} </label>
            </div>
        </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
</form>