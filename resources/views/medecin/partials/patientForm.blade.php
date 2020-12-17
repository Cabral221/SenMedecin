<form action="{{ $route }}" method="post" class="form">
    @csrf
    @method($method ?? 'POST')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="patient_first_name">Prénom</label>
                <input type="text" name="patient_first_name" id="patient_first_name" class="form-control @error('patient_first_name') is-invalid @enderror" placeholder="Prénom" value="{{ old('patient_first_name') ?? $patient->first_name }}">
                @error('patient_first_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="patient_last_name">Nom</label>
                <input type="text" name="patient_last_name" id="patient_last_name" class="form-control @error('patient_last_name') is-invalid @enderror" placeholder="Nom" value="{{ old('patient_last_name') ?? $patient->last_name }}">
                @error('patient_last_name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="patient_birthday">Date de naissance</label>
                <input type="date" name="patient_birthday" id="patient_birthday" class="form-control @error('patient_birthday') is-invalid @enderror" value="{{ old('patient_birthday') ?? ($patient->birthday != null ? $patient->birthday->format('Y-m-d') : '') }}">
                @error('patient_birthday')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="patient_address">Adresse physique</label>
                <input type="text" name="patient_address" id="patient_address" class="form-control @error('patient_address') is-invalid @enderror" placeholder="Adresse physique" value="{{ old('patient_address') ?? $patient->address }}">
                @error('patient_address')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            @if ($formType ==  'update')
                <h4 class="card-title text-danger">OUPS !</h4>
                <p><i class="mdi mdi-alert text-danger"></i> Les informations liées au connexion de patiente ne peut être changer !</p>
                  
            @else
                <div class="form-group">
                    <label for="patient_phone">Téléphone</label>
                    <input type="number" name="patient_phone" id="patient_phone" class="form-control @error('patient_phone') is-invalid @enderror" placeholder="Numéro de Téléphone" value="{{ old('patient_phone') }}">
                    @error('patient_phone')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="patient_email">Adresse Email</label>
                    <input type="email" name="patient_email" id="patient_email" class="form-control @error('patient_email') is-invalid @enderror" placeholder="Email" value="{{ old('patient_email') }}">
                    @error('patient_email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="patient_password">Mot de passe</label>
                    <input type="password" name="patient_password" id="patient_password" class="form-control @error('patient_password') is-invalid @enderror" placeholder="Mot de passe">
                    @error('patient_password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="patient_password_confirmation">Confirmer mot de passe</label>
                    <input type="password" name="patient_password_confirmation" id="patient_password_confirmation" class="form-control @error('patient_password_confirmation') is-invalid @enderror" placeholder="Reécrire le Mot de passe">
                    @error('patient_password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            @endif
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-success">Enregistrer</button>
    </div>
</form>