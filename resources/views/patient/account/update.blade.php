@extends('layouts.app', ['title' => 'Modification' . ' - Mon compte'])

@section('breadcrumb')
    <!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content">
			<h4 class="content-title mb-2">Modifier mon compte</h4>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('patient.home') }}">Tableau de bord</a></li>
					<li class="breadcrumb-item"><a href="{{ route('patient.account') }}">Mon Compte</a></li>
					<li class="breadcrumb-item active" aria-current="page">Modification</li>
				</ol>
			</nav>
		</div>
	</div>
	<!-- breadcrumb -->
@endsection

@section('main-content')
<!-- row -->
<div class="row row-sm">
	<!-- Col -->
	<div class="col-lg-4 col-xl-3">
		<div class="card mg-b-20">
			<div class="card-body">
				<div class="pl-0">
					<div class="main-profile-overview">
						<div class="main-img-user profile-user"><img alt="Profile" src="{{ asset(auth('patient')->user()->avatar) }}"><a href="JavaScript:void(0);" class="fas fa-camera profile-edit"></a></div>
						<div class="d-flex justify-content-between mg-b-20">
							<div>
								<h5 class="main-profile-name">{{ auth('patient')->user()->fullName }}</h5>
								<p class="main-profile-name-text">Patiente</p>
							</div>
						</div>
					</div><!-- main-profile-overview -->
				</div>
			</div>
		</div>
		<div class="card mg-b-20">
			<div class="card-body">
				<div class="main-content-label tx-13 mg-b-25">
					Conatct
				</div>
				<div class="main-profile-contact-list">
					<div class="media">
						<div class="media-icon bg-primary-transparent text-primary">
							<i class="fa fa-phone"></i>
						</div>
						<div class="media-body">
							<span>Téléphone</span>
							<div>
								{{ auth('patient')->user()->phone }}
							</div>
						</div>
					</div>
					<div class="media">
						<div class="media-icon bg-success-transparent text-success">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="media-body">
							<span>Email</span>
							<div>
								{{ auth('patient')->user()->email }}
							</div>
						</div>
					</div>
					<div class="media">
						<div class="media-icon bg-info-transparent text-info">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="media-body">
							<span>Adresse</span>
							<div>
								{{ auth('patient')->user()->address }}
							</div>
						</div>
					</div>
				</div><!-- main-profile-contact-list -->
			</div>
		</div>
	</div>
	<!-- /Col -->

	<!-- Col -->
	<div class="col-lg-8 col-xl-9">
		<div class="card">
			<div class="card-body">
				<div class="mb-4 main-content-label">Information personnelle</div>
				<form class="form-horizontal" method="POST" action="{{ route('patient.account.update') }}">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Prénom</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control @error('first_name') is-invalid @enderror"  placeholder="Prénom" name="first_name" value="{{ old('first_name') ?? auth('patient')->user()->first_name }}">
								@error('first_name')
									<span class="invalid-feedback">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">last Name</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control @error('last_name') is-invalid @enderror"  placeholder="Nom" name="last_name" value="{{  old('last_name') ?? auth('patient')->user()->last_name }}">
								@error('last_name') 
									<span class="invalid-feedback">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Date de naissance</label>
							</div>
							<div class="col-md-9">
								<input type="date" class="form-control @error('birthday') is-invalid @enderror"  placeholder="Date de naissance" name="birthday" value="{{ old('birthday') ?? auth('patient')->user()->birthday->toDateString() }}">
								@error('birthday') 
									<span class="invalid-feedback">{{ $mesaage }}</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Adresse</label>
							</div>
							<div class="col-md-9">
								<textarea row="2" type="text" class="form-control @error('address') is-invalid @enderror"  placeholder="Adresse" name="address" value="Redashna">{{ old('address') ?? auth('patient')->user()->address }}</textarea>
								@error('address')
									<span class="invalid-feedback">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> Enregister</button>
					</div>
				</form>

				<div class="mb-4 main-content-label">Email</div>
				<form class="form-horizontal" method="POST" action="{{ route('patient.account.email') }}">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Email</label>
							</div>
							<div class="col-md-9">
								<input type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') ?? auth('patient')->user()->email }}">
								@error('email')
									<span class="invalid-feedback">{{ $message }}</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Modifier l'Email</button>
					</div>
				</form>

				<div class="mb-4 main-content-label">Numéro de téléphone</div>
				<form class="form-horizontal" method="POST" action="{{ route('patient.account.phone') }}">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Téléphone</label>
							</div>
							<div class="col-md-9">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary" id="input-phone">+221</span>
									</div>
									<input type="number" class="form-control @error('phone') is-invalid @enderror" aria-describedby="input-phone"  placeholder="Téléphone" name="phone" value="{{ old('phone') ?? auth('patient')->user()->getRawOriginal('phone') }}">
									@error('phone')
										<span class="invalid-feedback">{{ $message }}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Modifier le numéro</button>
					</div>
				</form>

				<form class="form-horizontal">
					
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Nick Name</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="Nick Name" value="Redash">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Designation</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="Designation" value="Web Designer">
							</div>
						</div>
					</div>
					<div class="mb-4 main-content-label">Contact Info</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Email<i>(required)</i></label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="Email" value="info@redash.in">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Website</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Phone</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="phone number" value="+245 354 654">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Address</label>
							</div>
							<div class="col-md-9">
								<textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
							</div>
						</div>
					</div>
					<div class="mb-4 main-content-label">Social Info</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Twitter</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="twitter" value="twitter.com/spruko.html">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Facebook</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="facebook" value="https://www.facebook.com/Redash">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Google+</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="google" value="spruko.com">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Linked in</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com/in/spruko">
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Github</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
							</div>
						</div>
					</div>
					<div class="mb-4 main-content-label">About Yourself</div>
					<div class="form-group ">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Biographical Info</label>
							</div>
							<div class="col-md-9">
								<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
							</div>
						</div>
					</div>
					<div class="mb-4 main-content-label">Email Preferences</div>
					<div class="form-group mb-0">
						<div class="row">
							<div class="col-md-3">
								<label class="form-label">Verified User</label>
							</div>
							<div class="col-md-9">
								<div class="custom-controls-stacked">
									<label class="ckbox mg-b-10"><input checked="" type="checkbox"><span> Accept to receive post or page notification emails</span></label>
									<label class="ckbox"><input checked="" type="checkbox"><span> Accept to receive email sent to multiple recipients</span></label>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
			</div>
		</div>
	</div>
	<!-- /Col -->
</div>
<!-- row closed -->
@endsection