
<form action="{{ $route }}" method="POST" class="w-100" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Informations générales </h4>
            @csrf
            @method($method ?? 'POST')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('partener_name') is-invalid @enderror" name="partener_name" id="name" placeholder="Nom" required value="{{ old('partener_name') ?? $partener->name }}">
                        @error('partener_name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="partener_email">Adresse email</label>
                        <input type="email" class="form-control @error('partener_email') is-invalid @enderror" name="partener_email" id="partener_email" placeholder="Email" required value="{{ old('partener_email') ?? $partener->email }}">
                        @error('partener_email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white">(+221)</span>
                            </div>
                            <input type="number" class="form-control @error('partener_phone') is-invalid @enderror" name="partener_phone" id="phone" placeholder="Numéro de téléphone" required value="{{ old('partener_phone') ?? $partener->phone }}">
                            @error('partener_phone')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="partener_address">Adresse physique</label>
                        <input type="text" class="form-control @error('partener_address') is-invalid @enderror" name="partener_address" id="partener_address" placeholder="Addresse physique" required value="{{ old('partener_address') ?? $partener->address }}">
                        @error('partener_address')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image représentative ou LOGO</label>
                        <input type="file" name="partener_image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info @error('partener_image') is-invalid @enderror" disabled placeholder="charger une image représentative pour ce partenaire">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Charger</button>
                            </span>
                            @error('partener_image')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="card-title">Services</h5>
                    <div class="form-group row">
                        @foreach ($services as $service)
                            <div class="col-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="services[]" class="form-check-input" value="{{ $service->id }}" 
                                        @foreach ($partener->services as $s) 
                                        @if($s->id == $service->id) checked @endif 
                                        @endforeach
                                        > {{ $service->libele }} 
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @if ($formType === 'edit')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Le responsable associé</h4>
            <p><i class="mdi mdi-alert text-danger"></i> Les informations liées au compte du responsable ne peut être changer !</p>
        </div>
    </div>
    @elseif($formType === 'create')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Le responsable associé</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="responsable_first_name">Prénom</label>
                        <input type="text" class="form-control @error('responsable_first_name') is-invalid @enderror" name="responsable_first_name" id="responsable_first_name" placeholder="Prénom" required value="{{ old('responsable_first_name') ?? $partener->responsable->first_name ?? '' }}">
                        @error('responsable_first_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nom</label>
                        <input type="text" class="form-control @error('responsable_last_name') is-invalid @enderror" name="responsable_last_name" id="last_name" placeholder="Nom" required value="{{ old('responsable_last_name') ?? $partener->responsable->last_name ?? '' }}">
                        @error('responsable_last_name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="responsable_email">Adresse Email</label>
                        <input type="email" class="form-control @error('responsable_email') is-invalid @enderror" name="responsable_email" id="responsable_email" placeholder="Adresse email" required value="{{ old('responsable_email') ?? $partener->responsable->email ?? '' }}">
                        @error('responsable_email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="responsable_phone">Téléphone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white">(+221)</span>
                            </div>
                            <input type="number" class="form-control @error('responsable_phone') is-invalid @enderror" name="responsable_phone" id="responsable_phone" aria-label="Numéro de téléphone" placeholder="Numéro de téléphone" required value="{{ old('responsable_phone') ?? $partener->responsable->phone ?? '' }}">
                            @error('responsable_phone')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="responsable_password" class="form-control @error('responsable_password') is-invalid @enderror" id="password" placeholder="Mot de passe par défaut" required>
                        @error('responsable_password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="responsable_password_confirmation">Confirmer le mot de passe</label>
                        <input type="password" name="responsable_password_confirmation" class="form-control @error('responsable_password_confirmation') is-invalid @enderror" id="responsable_password_confirmation" placeholder="MDP par défaut de ses agents" required>
                        @error('responsable_password_confirmation')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <button class="btn btn-gradient-success btn-lg btn-block mt-3">Enregistrer</button>
</form>