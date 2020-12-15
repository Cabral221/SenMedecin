
<form action="{{ $action }}" method="POST" class="form">
    @csrf
    @method($method ?? 'POST')
    <div class="form-group row">
        <label class="col-md-3 col-form-label text-right font-weight-bold">Pére</label>
        <div class="col-md-9">
            <textarea name="antecedent_father" rows="10" class="form-control shadow @error('antecedent_father') is-invalid @enderror">{{ old('antecedent_father') ?? $antecedent->father }}</textarea>
            @error('antecedent_father')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label text-right font-weight-bold">Mére</label>
        <div class="col-md-9">
            <textarea name="antecedent_mother" rows="10" class="form-control shadow @error('antecedent_mother') is-invalid @enderror">{{ old('antecedent_mother') ?? $antecedent->mother }}</textarea>
            @error('antecedent_mother')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label text-right font-weight-bold">Famille</label>
        <div class="col-md-9">
            <textarea name="antecedent_family" rows="10" class="form-control shadow @error('antecedent_family') is-invalid @enderror">{{ old('antecedent_family') ?? $antecedent->family }}</textarea>
            @error('antecedent_family')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label text-right font-weight-bold">Autres Examens</label>
        <div class="col-md-9">
            <textarea name="antecedent_other_exam" rows="10" class="form-control shadow @error('antecedent_other_exam') is-invalid @enderror">{{ old('antecedent_other_exam') ?? $antecedent->other_exam }}</textarea>
            @error('antecedent_other_exam')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label text-right font-weight-bold">Traitement en cours</label>
        <div class="col-md-9">
            <textarea name="antecedent_treating" rows="10" class="form-control shadow @error('antecedent_treating') is-invalid @enderror">{{ old('antecedent_treating') ?? $antecedent->treating }}</textarea>
            @error('antecedent_treating')
                @error('antecedent_treating')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            @enderror
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-success">Enregistrer</button>
    </div>
</form>