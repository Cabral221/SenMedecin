@extends('layouts.app', ['title' => auth('patient')->user()->fullName . ' - Mon compte'])

@section('breadcrumb')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="left-content">
		<h4 class="content-title mb-2">Mon compte</h4>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('patient.home') }}">Tableau de bord</a></li>
				<li class="breadcrumb-item active" aria-current="page">Profil</li>
			</ol>
		</nav>
	</div>
</div>
<!-- breadcrumb -->
@endsection

@section('main-content')
<div class="row">
	<div class="col-lg-12">
		<div class="card mg-b-20">
			<div class="card-body">
				<div class="">
					<div class="main-profile-overview">
						<div class="">
							<div class="profile-content d-sm-flex">
								<div class="main-img-user profile-user mb-0">
									<img alt="profil" src="{{ asset(auth('patient')->user()->avatar) }}">
									<a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
									<form action="{{ route('patient.account.avatar') }}" method="post" class="d-none" id="form-edit-avatar" enctype="multipart/form-data">
										@csrf
										@method('PATCH')
										<input type="file" name="avatar" id="input-avatar">
									</form>
								</div>
								<div class="mg-t-10 mg-sm-t-60 mg-l-10">
									<div>
										<h5 class="main-profile-name">{{ auth('patient')->user()->fullName }}</h5>
										<p class="main-profile-name-text">Patiente</p>
										@error('avatar')
											<span class="text-danger small">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="profile-buttons">
								<a class="btn btn-success" href="{{ route('patient.account.edit') }}"><i class="fe fe-edit"></i> Modifier Profil</a>
							</div>
						</div>
						
						<div class="tab-menu-heading mg-t-10">
							<nav class="nav main-nav-line tabs-menu profile-nav-line bg-gray-100 rounded-10">
								<a class="nav-link active" data-toggle="tab" href="#about">A propos</a>
								<a class="nav-link" data-toggle="tab" href="#timeline">Historique</a>
							</nav>
						</div>
						<div class="tab-content">
							<div class="main-content-body tab-pane border-top-0 active" id="about">
								<div class="card-body border rounded-10">
									<div class="row">
										<div class="col-md-6">
											<h6>Information personnelle</h6>
											<span class="d-block">ID : <span class="text-primary tx-15">{{ auth('patient')->user()->referential }}</span></span>
											<span class="d-block">Nom : <span class="text-primary tx-15">{{ auth('patient')->user()->last_name }}</span></span>
											<span class="d-block">Prénom : <span class="text-primary tx-15">{{ auth('patient')->user()->first_name }}</span></span>
											<span class="d-block">Date de naissance : <span class="text-primary tx-15">{{ auth('patient')->user()->birthday->format('d M Y') }}</span></span>
										</div>
										<div class="col-md-6">
											<h6>Spécialiste souscrit</h6>
											<span class="d-block">Spécialiste : <span class="text-primary tx-15">{{ auth('patient')->user()->medecin->fullName }}</span></span>
											<span class="d-block">Service : <span class="text-primary tx-15">{{ auth('patient')->user()->medecin->service->libele }}</span></span>
											<span class="d-block">Télephone : <span class="text-primary tx-15">{{ auth('patient')->user()->medecin->phone }}</span></span>
											<span class="d-block">E-mail : <span class="text-primary tx-15">{{ auth('patient')->user()->medecin->email }}</span></span>
										</div>
									</div>
									<hr class="mg-y-30">
									<label class="main-content-label tx-13 mg-b-20">Contact</label>
									<div class="d-sm-flex">
										<div class="mg-sm-r-20 mg-b-10">
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
											</div>
										</div>
										<div class="mg-sm-r-20 mg-b-10">
											<div class="main-profile-contact-list">
												<div class="media">
													<div class="media-icon bg-success-transparent text-success">
														<i class="fa fa-envelope"></i>
													</div>
													<div class="media-body">
														<span>E-mail</span>
														<div>
															{{ auth('patient')->user()->email }}
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="">
											<div class="main-profile-contact-list">
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
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="main-content-body tab-pane border-top-0" id="timeline">
								<div class="">
									<div class="main-content-body main-content-body-profile">
										<div class="main-profile-body p-0">
											<div class="row row-sm">
												<div class="col-12">
													<div class="card mg-b-20 border">
														<div class="card-body">
															Liste des rvs en mode historique
														</div>
													</div>
												</div>
											</div>
										</div><!-- main-profile-body -->
									</div>
								</div>
							</div>
						</div>
						
						<!-- main-profile-overview -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('own-js')
<script>
	$(document).ready(function() {
		$("a.profile-edit").click(function(e) {
			e.preventDefault()
			// Demarre loader
			$("#global-loader").fadeIn("slow")

			$("#input-avatar").click()
		})
		
		$('#input-avatar').change(function (e) {
			$("#global-loader").fadeOut("slow")
			$("#form-edit-avatar").submit()
		});
	})
</script>
@endsection