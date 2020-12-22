@extends('user.layouts.app')
@section('headsection')

@endsection
@section('main-content')




<!-- Premiere section -->
   <section>
	@include('patient.sidebare.sidebare')
	   <div class="profile-right">
		   <!-- La Partie de l'identification -->
				<h3>IDENTIFICATION</h3>
				<div class="identification">
					<p>Prenom de l'enfant : <span>Amadou mjdjje jedujuejdfj  ffkfke</span> </p>
					<p >Nom : <span>Diop</span></p>
					<p>Date de naissance : <span>19/12/2019</span></p>
					<p>Lieu de naissance <i style="font-size:10px;">(Nom de la structure sanitaire)</i> : <span>Hopital de  Fann</span></p>
					<p>Prenom de la mere : <span>Mariama Ka</span></p>
					<p>Age : <span> 29 ans</span></p>
					<p>Adresse : <span> Petit Mbao </span></p>
					<hr style="border:1px dotted black;">
					<p>Profession : <span> Menagere </span> Tel :  <span> 778768909 </span></p>
					<p>Employeur : <span> Moussa Ba </span></p>
					<p>Prenom et nom du pere : <span> Abdourahmane Diop </span></p>
					<p>Date de naissance : <span> 12/12/1212 </span></p>
					<p>Adresse : <span> Petit Mbao </span></p>
					<p>Profession : <span> Commercant </span> Tel :  <span> 776548909 </span> </p>
					<p>Employeur : <span> Ousmane Diallo </span></p>
				</div>

				<div class="identification">
					<div class="footer-id">
						<div class="acte">
							<p>N d'acte de naissance :
								<p class="acte-p">00465-456</p>
							</p>
						</div>
						<div class="allocation">
							<p>N Allocation familiale :
								<p class="acte-p">Nous sommes contants</p>
							</p>
						</div>
					</div>
					<p>N CMU
						<p class="cmu">7654678</p>
					</p>
				</div>
			<!-- Fin de la partie de l'identification -->
			<br>
			<hr>
			<!-- Partie des Antecedent -->
				<h3>ANTECEDENT </h3>
				<div class="antecedent">
					<h4>Antecedent Familiaux</h4>
					<div class="pere">
						<h4>Pere : </h4>
						<p> Groupe Sanguin : <span> O- </span> Facteur rhesus <span> Pas d'exemple </span></p>
						<p> Autre examens : <span> Pas d'exemple </span> </p>
						<p> Maladies a declare : <span> Pas d'exemple </span> </p>
					</div>
					<div class="mere">
						<h4>Mere : </h4>
						<p> Groupe Sanguin : <span> O+ </span> Facteur rhesus <span> Pas d'exemple </span></p>
						<p> TPHA :<span> Pas d'exemple </span> RPR : <span> Pas d'exemple </span></p>
						<p> Diabete :<span> Pas d'exemple </span> Cardiopathie : <span> Pas d'exemple </span></p>
						<p>Insuffisance Renale chronique <span> Pas d'exemple</span></p>
						<p> Asthme :<span> Pas d'exemple </span> Anemie : <span> Pas d'exemple </span> Tuberculose : <span> Pas d'exemple </span></p>
						<p> Hepatite B :<span> Pas d'exemple </span> HTA : <span> Pas d'exemple </span> Lupus Erythemateux Dissemine : <span> Pas d'exemple </span></p>
						<p> Drepanocytose :<span> Pas d'exemple </span> Autres maladies : <span> Pas d'exemple </span></p>
					</div>
					<div class="famille">
						<h4>Famille : </h4>
						<p class="fam">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident labore aperiam, dolorum cupiditate asperiores commodi animi tenetur molestiae nostrum ipsam quam sit sequi libero odit earum repellat? Natus, veritatis!</p>
					</div>
					<div class="autre">
						<h4>Autres Examens : </h4>
						<p class="at">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit minus dolor consequatur, quam aliquam beatae vel minima nam veniam repudiandae ex et? Accusantium vitae est, velit aliquam ducimus soluta eos?</p>
					</div>
					<div class="traitement">
						<h4>Traitement en cours : </h4>
						<p class="traite">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit architecto saepe, eum reprehenderit facere quod nulla mollitia repellat quasi odit enim ipsam iure autem ea velit voluptatem deserunt eos assumenda.</p>
					</div>
				</div>
			<!-- Fin de la aprtie des antecedent -->
			<br>
			<hr>
			<!-- Calandirier CPN -->
				<h3>CALANDIRIER CPN</h3>
				<div class="calandirier-cpn">
					<table class="table-cpn">
						<tr class="tr-cpn">
							<th class="th-cpn">CPN</th>
							<th class="th-cpn">Periodicite</th>
							<th class="th-cpn">Date Visite (CPN)</th>
							<th class="th-cpn">Date Rendez-vous</th>
						</tr>
						<tbody>
							<tr class="tr-cpn">
								<td class="td-cpn">CPN 1</td>
								<td class="td-cpn">1er Trimestre</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">CPN 2</td>
								<td class="td-cpn">2e Trimestre</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">CPN 3</td>
								<td class="td-cpn">3e Trimestre</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">CPN 4</td>
								<td class="td-cpn">4e Trimestre</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">Autres Consultations</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<h3>CALANDIRIER VACCINAL FEMME ENCEINTE</h3>
				<div class="calandirier-cpn">
					<table class="table-cpn">
						<tr class="tr-cpn">
							<th class="th-cpn">Vaccin</th>
							<th class="th-cpn">Periodicite</th>
							<th class="th-cpn">Date Vaccination</th>
							<th class="th-cpn">Date de Rendez-vous</th>
						</tr>
						<tbody>
							<tr class="tr-cpn">
								<td class="td-cpn">VAT 1</td>
								<td class="td-cpn">Des le premier contact</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">VAT 2</td>
								<td class="td-cpn">1er mois apres VAT 1</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">VAT 3</td>
								<td class="td-cpn"> 6 mois apres VAT 2 </td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">VAT 4</td>
								<td class="td-cpn">1 an apres VAT 3</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">VAT 5</td>
								<td class="td-cpn">1 an apres VAT 4</td>
								<td class="td-cpn"></td>
								<td class="td-cpn"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<h3>AUTRES VACCINS </h3>
				<div class="calandirier-cpn">
					<table class="table-cpn">
						<!-- <tr>
							<th>HEPATITE B 1</th>
							<th>HEPATITE B 2</th>
							<th>HEPATITE B 3</th>
						</tr> -->
						<tbody>
							<tr class="tr-cpn">
								<td class="td-cpn">HEPATITE B 1</td>
								<td class="td-cpn"></td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">HEPATITE B 2</td>
								<td class="td-cpn">1 mois apres HEPATITE 1</td>
							</tr>
							<tr class="tr-cpn">
								<td class="td-cpn">HEPATITE B 3</td>
								<td class="td-cpn">6 mois apres HEPATITE 1</td>
							</tr>
						
						</tbody>
					</table>
				</div>
			<!-- Fin Calandirier CPN -->
			<br>
			<hr>
			<!-- La partie du CPN 1 -->
				<h3>GESTATION</h3>
				<div class="cpn1">
					<div class="partie-1">
						<p>Date des dernieres regles : <span> Pas d'exemple </span> </p>
						<p>Travail prevu le : <span> Pas d'exemple </span> </p>
						<p>Conge maternite : <span> Pas d'exemple </span> </p>
						<p>Lieu CPN  : <span> Pas d'exemple </span>  Par qui : <span> Pas d'exemple </span> </p>
						<p>Qualification Prestataire :  <span> Pas d'exemple </span>  Tel: <span> Pas d'exemple </span> </p>
					</div>
					<div class="partie-2">
						<span class="cpn"> CPN1 </span>
						<span class="cpn"> CPN2 </span>
						<span class="cpn"> CPN3 </span>
						<span class="cpn"> CPN4 </span>
					</div>
					<div class="partie-3">
						<p>Date : <span> Pas d'exemple </span> Au : <span> Pas d'exemple </span> SA : <span> Pas d'exemple </span> mois : <span> Pas d'exemple </span> </p>
						<p>Plainte : <span> Pas d'exemple </span> </p>
						<p>Poids : <span> Pas d'exemple </span> Taiile : <span> Pas d'exemple </span> PB : <span> Pas d'exemple </span>  </p>
						<p>Urines : Alb : <span> Pas d'exemple </span> S : <span> Pas d'exemple </span> TA : <span> Pas d'exemple </span>  </p>
						<p>EG : <span> Pas d'exemple </span> Muqueuses : <span> Pas d'exemple </span> Mollets : <span> Pas d'exemple </span> OMI : <span> Pas d'exemple </span> </p>
						<p>Examen des seins : <span> Pas d'exemple  </span></p>
						<p>HU : <span> Pas d'exemple </span></p>
						<p>Speculum : <span> Pas d'exemple </span></p>
						<p>TV : <span> Pas d'exemple  </span></p>
					</div>

					<div class="partie-4">
						<table class="table-elements">
							<tr class="tr-element">
								<td class="td-element">Fer + ac folique :</td>
								<td class="td-element"><label for="">  <span> <input type="checkbox" name="" id="" checked> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id=""> </span> Non </label> </td>
							</tr>
							<tr class="tr-element">
								<td class="td-element">MILDA</td>
								<td class="td-element"> <label for="">  <span> <input type="checkbox" checked name="" id=""> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id=""> </span> Non </label> </td>
							</tr>
							<tr class="tr-element">
								<td class="td-element">PTME Proposition Tests :</td>
								<td class="td-element"><label for="">  <span> <input type="checkbox" name="" id=""> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id=""> </span> Non </label></td>
							</tr>
							<tr class="tr-element">
								<td class="td-element">Vaccination</td>
								<td class="td-element"><label for="">  <span> <input type="checkbox" name="" id=""> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id=""> </span> Non </label> </td>
							</tr>
							<tr class="tr-element">
								<td class="td-element">Plan d'accouchement : </td>
								<td class="td-element"><label for="">  <span> <input type="checkbox" name="" id=""> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id="" checked> </span> Non </label></td>
							</tr>
							<tr class="tr-element">
								<td class="td-element">IVA / IVL : </td>
								<td class="td-element"><label for="">  <span> <input type="checkbox" name="" id=""> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id=""> </span> Non </label></td>
							</tr>
							<tr class="tr-element">
								<td class="td-element">FCV</td>
								<td class="td-element"> <label for="">  <span> <input type="checkbox" checked name="" id=""> </span> Oui </label>  <label for=""> <span>  <input type="checkbox" name="" id=""> </span> Non </label> </td>
							</tr>
							<tr class="tr-element">
								<td class="td-element" colspan="3">Date Prochain RV : <span class="text"> Pas d'exemplePas </span></td>
							</tr>
						</table>
					
					</div>
				</div>
			<!-- Fin de la partie du CPN 1 -->
			<br>
			<hr>
			<!-- La partie de l'echographie Obstericale Premier Trimestre -->
				<h3>ECHOGRAPHIE OBSTERICAL PREMIER TRIMESTRE</h3>
				<div class="echographie_obsterical">
					<div class="partie_1">
						<p> Date : <span> Le 12/02/2020 </span> </p>
						<p> Prenom : <span> Ousmane Diallo </span> </p>
						<p> DDR : <span> Pas d'exemple </span></p>
						<p> Motif d'examen : <span> Pas d'exemple </span></p>
					</div>

					<div class="partie_2">
						<h6>Resultats</h6>
						<p>Terme echographique  <span> SA </span></p>
						<table class="table_obsterical">
							<tr class="tr_obsterical">
								<th class="th_obsterical">Uterus gravide</th>
								<th class="th_obsterical">Sac gestationenl</th>
							</tr>
							<tbody class="tbody_obsterical">
								<tr class="tr_obsterical">
									<td class="td_obsterical">Longeuer <span> 20 cm </span></td>
									<td class="td_obsterical"> Nombre : <span> 20 </span> Localisation <span> EMPRO </span> </td>
								</tr>
								<tr class="tr_obsterical">
									<td class="td_obsterical">Diametre antero-posterieur <span> 20 cm </span> </td>
									<td class="td_obsterical"> Morpologie <span> Pas d'exemple </span> </td>
								</tr>
								<tr class="tr_obsterical">
									<td class="td_obsterical"> Epaisseur <span> 30 cm </span> </td>
									<td class="td_obsterical"> Embryon <span> Pas d'exemple </span> </td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="partie_3">
						<h6>Biometrie</h6>
						<p> Diametre moyen du sac : <span> 20 mm </span> </p>
						<p> Longuer Cranio Caudale : <span> 20 mm </span> </p>
						<p> Longeur femorale : <span> 20 mm </span></p>
						<p> Diametre bi parietal : <span> 20 mm </span></p>
						<p> Circonference abdominale : <span> 20 mm </span></p>
					</div>

					<div class="partie_4">
						<h6> Vitalite Embryonaire </h6>
						<p> Mouvements Actifs : <span class="present"> <label for=""> <input type="checkbox" name="" id=""> Present </label> </span> <span class="absent"> <label for=""> <input type="checkbox" name="" id=""> Absent </label> </span> </p>
						<p> Activites cardiaque  : Battement/mm :  <span> 60pls/mm </span> </p>
					</div>

					<div class="partie_5">
						<h6> Annexe embryonaire </h6>
						<p> Trophoblaste : <span> Pas d'exemple </span> </p>
						<p> Liquide : <span> Pas d'exemple </span> </p>
						<p> Vesicule ombilicale : <span> Pas d'exemple </span> </p>
					</div>

					<div class="partie_6">
						<h4> CONCLUSION : </h4>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Id optio, illum possimus porro blanditiis pariatur earum corrupti delectus officiis accusamus. Praesentium molestias molestiae suscipit sed nemo, mollitia est deleniti eius?
						</p>
					</div>
				</div>
			<!-- Fin de la partie de l'echographie Obstericale Premier Trimestre -->
			<br>
			<hr>
			<!-- La partie du CPN2 -->
				<div class="cpn2">
					<div class="partie_1">
						<h3>CPN 2</h3>
						<p> Date : <span> Le 12/02/2020 </span> Terme : <span> Pas d'exemple  </span> SA : <span> Pas d'exemple  </span> mois <span> Pas d'exemple  </span> </p>

						<p> Lieu CPN : <span> Pas d'exemple  </span> Par Qui : <span> Pas d'exemple  </span> </p>

						<p> Qualification prestataire : <span> Pas d'exemple  </span> Tel : <span> Pas d'exemple  </span></p>

						<p> Plainte : <span> Pas d'exemple  </span> </p>

						<p> Poids : <span> Pas d'exemple  </span> PB : <span> Pas d'exemple  </span> TA : <span> Pas d'exemple  </span> </p>

						<p> Urines : <span> Pas d'exemple  </span> Alb : <span> Pas d'exemple  </span> Sucre : <span> Pas d'exemple  </span> </p>
						<p> EG : <span> Pas d'exemple  </span> Muqueuse : <span> Pas d'exemple  </span> Mollets : <span> Pas d'exemple  </span> OMI :  <span> Pas d'exemple  </span> </p>
						<p> Examen des seins : <span> Pas d'exemple </span> </p>
						<p> HU : <span> Pas d'exemple </span> MAF <span> Pas d'exemple </span> BDC <span> Pas d'exemple </span></p>
						<p> TV : <span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem ducimus excepturi, quisquam magni quasi, dolore impedit a numquam magnam, aspernatur hic quidem laborum commodi exercitationem velit aliquid. Adipisci, nemo dolore. </span> </p>
					</div>
					<div class="partie_2">
						<table class="table_cpn2">
							<tbody class="tbody_cpn2">
								<tr class="tr_cpn2">
									<td class="td_cpn2">Fer + ac folique</td>
									<td class="td_cpn2"> 
										<span>
											<label for=""> <input type="checkbox" name="" id=""> Oui </label>
											<label for=""> <input type="checkbox" name="" id=""> Non </label>
										</span>
									</td>
								</tr>

								<tr class="tr_cpn2">
									<td class="td_cpn2">MILDA (presciption/Datation)</td>
									<td class="td_cpn2"> 
										<span>
											<label for=""> <input type="checkbox" name="" id=""> Oui </label>
											<label for=""> <input type="checkbox" name="" id=""> Non </label>
										</span>
									</td>
								</tr>
								<tr class="tr_cpn2">
									<td class="td_cpn2">TP11</td>
									<td class="td_cpn2"> 
										<span>
											<label for=""> <input type="checkbox" name="" id=""> Oui </label>
											<label for=""> <input type="checkbox" name="" id=""> Non </label>
										</span>
									</td>
								</tr>
								<tr class="tr_cpn2">
									<td class="td_cpn2">Vaccination</td>
									<td class="td_cpn2"> 
										<span>
											<label for=""> <input type="checkbox" name="" id=""> Oui </label>
											<label for=""> <input type="checkbox" name="" id=""> Non </label>
										</span>
									</td>
								</tr>
								<tr class="tr_cpn2">
									<td class="td_cpn2">Plan d'accouchament</td>
									<td class="td_cpn2"> 
										<span>
											<label for=""> <input type="checkbox" name="" id=""> Oui </label>
											<label for=""> <input type="checkbox" name="" id=""> Non </label>
										</span>
									</td>
								</tr>
								<tr class="tr_cpn2">
									<td class="td_cpn2">IEC PF</td>
									<td class="td_cpn2"> 
										<span>
											<label for=""> <input type="checkbox" name="" id=""> Oui </label>
											<label for=""> <input type="checkbox" name="" id=""> Non </label>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			<!-- Fin de la partie du CPN2 -->
			<br>
			<hr>
			<!-- La partie du echographie morphologique -->
			<div class="echographie_morphologique">
				<h3> ECHOGRAPHIE MORPHOLOGIQUE </h3>
				<div class="partie_1">
					<p> Date : <span> Le 12/09/2020 </span> </p>
					<p> Terme theorique : <span> Pas d'exemple </span> </p>
					<p> Nombre de foetus : <span> Pas d'exemple </span> Presentation : <span> Pas d'exemple </span> </p>
				</div>

				<div class="partie_2">
					<h5> Biometrie : </h5>
					<p> Perimetre cephalique : <span> 20 mm </span>  <span> 10 percentile </span> </p>
					<p> Diametre Biparietal : <span> 20 mm </span>  <span> 10 percentile </span> </p>
					<p> Perimetre abdominal : <span> 20 mm </span>  <span> 10 percentile </span> </p>
					<p> Longueur fermorale : <span> 20 mm </span>  <span> 10 percentile </span> </p>
					<p> Estimation du poids foeutal : <span> 7kg </span>  </p>
				</div>

				<div class="partie_3">
					<h5> Vitalite </h5>
					<p> Activite cardiaque : <span> 60battement/minutes </span> </p>
					<p> Mouvements actifs : <span> pas d'exemple </span> </p>
					<p> Mouvements respiratoires : <span> pas d'exemple </span> </p>
				</div>

				<div class="partie_4">
					<h5>MORPOLOGIE FOEUTALE</h5>
					<p>Cerveau : <span> pas d'exemple </span> Foie : <span> Pas d'exemple </span> </p>
					<p>Poumons : <span> pas d'exemple </span> Estomac : <span> Pas d'exemple </span> </p>
					<p>Coeur : <span> pas d'exemple </span> Vessie : <span> Pas d'exemple </span> </p>
					<p>Rachies : <span> pas d'exemple </span> Membres : <span> Pas d'exemple </span> </p>
					<p>Levre Superieure : <span> pas d'exemple </span> Reins : <span> Pas d'exemple </span> </p>
					<p>Face : <span> pas d'exemple </span> Paroi abdominale : <span> Pas d'exemple </span> </p>
					<p>Sexe : <span>  masculin </span> </p>
				</div>

				<div class="partie_5">
					<h4>Annexes</h4>
					<p> Placenta : <span> Localisation </span> <span> Grade </span> <span> Denhez </span> <span> Bessis </span> </p>
					<p> Quantite de liquide amoniotique </p>
					<p> Cordon : <span> Pas d'exemple </span> </p>
				</div>

				<div class="partie_6">
					<h4>CONCLUSION</h4>
					<p>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus voluptatum tempore illum architecto. Harum voluptatibus tempore magni voluptatem consequatur? Doloribus dicta cumque doloremque vero eos a deserunt suscipit accusantium veniam!
					</p>
				</div>

			</div>
			<!-- Fin de la partie echographie morphologique -->
			<br>
			<hr>
			<!-- La partie du CPN3 -->
			<div class="cpn3">
				<h3> CPN 3 </h3>
				<div class="partie_1">
					<p> Date : <span> pas d'exemple </span> Ou : <span> pas d'exemple </span> Mois : <span> pas d'exemple  </span> /SA <span> pas d'exemple </span> </p>
					<p> Lieu CPN : <span> pas d'exemple </span> Par qui <span> pas d'exemple </span> </p>
					<p>Quantification prestataire : <span> pas d'exemple </span> Tel : <span> pas d'exemple </span> </p>
					<p> Plaintes : <span> pas d'exemple </span> </p>
					<p> Poids : <span> pas d'exemple </span> PB : <span> pas d'exemple </span>  TA : <span> pas d'exemple </span> </p>
					<p> Urines : <span> pas d'exemple </span> ALB : <span> pas d'exemple </span>  Sucre : <span> pas d'exemple </span> </p>
					<p> Examan des seins : <span> pas d'exemple </span></p>
					<p> HU : <span> pas d'exemple </span> MAF : <span> pas d'exemple </span>  MDC : <span> pas d'exemple </span> </p>
					<p>Palpation : <span> pas d'exemple </span></p>
					<p>TV : <span> pas d'exemple </span></p>
				</div>
				
				<div class="partie_2">
					<table class="cpn3">
						<tr class="tr_cpn3">
							<td class="td_cpn3">
								<label for=""> Fer + ac folique <input type="checkbox" name="" id=""> </label>
							</td>
							<td class="td_cpn3">
								TPI : 
							</td>
							<td class="td_cpn3">
								<label for="">  <input type="checkbox" name="" id=""> VAT </label>
							</td>
						</tr>
						<tr class="tr_cpn3">
							<td class="td_cpn3">
								<label for=""> Plan d'accouchement <input type="checkbox" name="" id=""> </label>
							</td>
							<td class="td_cpn3">
								<label for=""> Couseling PFPP <input type="checkbox" name="" id=""> </label>
							</td>
							<td class="td_cpn3">
								<label for="">  <input type="checkbox" name="" id=""> AME </label>
							</td>
						</tr>
						<tr class="tr_cpn3">
							<td class="td_cpn3" colspan="3">
								Date prochain RV : <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aut cumque molestiae nemo illum distinctio cupiditate quisquam ea commodi eius totam reiciendis accusantium quam nihil magni obcaecati repellendus, facilis blanditiis! </span>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<!-- Fin de la partie du CPN3 -->
			<br>
			<hr>
			<!-- La partie des echographie -->
			<div class="ecographie">
				<h4> HECHOGRAPHIE </h4>
				<div class="partie_1">
					<p> Date : <span> pas d'exemple </span> </p>
					<p> Terme theorique : <span> pas d'exemple </span> </p>
					<p> Nombre de foeutus : <span> pas d'exemple </span> Presentation : <span> pas d'exemple </span> </p>
				</div>
				<div class="partie_2">
					<h5>BIOMETRIE</h5>
					<p>Perimetre cephalique : <span> 20 mm </span> <span> 20 percentile </span> </p>
					<p> Diametre biparietal : <span> 20 mm </span> <span> 20 percentile </span> </p>
					<p>Perimetre abdominal : <span> 20 mm </span> <span> 20 percentile </span> </p>
					<p>Longueur femoral : <span> 20 mm </span> <span> 20 percentile </span> </p>
					<p> Estimation du poids foetal : <span> pas d'exemple </span>  </p>
				</div>
				<div class="partie_3">
					<h5>VITALITE</h5>
					<p> Activite cardiaque : <span> 20 battements/minute </span> </p>
					<p> Mouvements actifs : <span> pas d'exemple </span> </p>
					<p> Mouvements respiratoires : <span> pas d'exemple </span> </p>
				</div>
				<div class="partie_4">
					<h5>MORPHOLOGIE FOEUTAL</h5>
					<p> Cerveau : <span> pas d'exemple </span> Foie : <span> pas d'exemple </span> </p>
					<p> Poumons : <span> pas d'exemple </span> Estomac : <span> pas d'exemple </span> </p>
					<p> Coeur : <span> pas d'exemple </span> Vessie : <span> pas d'exemple </span> </p>
					<p> Rachis : <span> pas d'exemple </span> Membres : <span> pas d'exemple </span> </p>
					<p> Levre superieure : <span> pas d'exemple </span> Reins : <span> pas d'exemple </span> </p>
					<p> Face : <span> pas d'exemple </span> Paroi abdominal : <span> pas d'exemple </span> </p>
					<p> Sexe : <span> Masculin </span> </p>
				</div>
				<div class="partie_5">
					<h5>Annexes</h5>
					<p> Placenta : <span> Localisation </span> <span> Grade </span> <span> Denhez </span> <span> Bessis </span> </p>
					<p> Quantite de liquide amoniotique </p>
					<p> Cordon : <span> Pas d'exemple </span> </p>
				</div>

				<div class="partie_6">
					<h5>CONCLUSION</h5>
					<p>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus voluptatum tempore illum architecto. Harum voluptatibus tempore magni voluptatem consequatur? Doloribus dicta cumque doloremque vero eos a deserunt suscipit accusantium veniam!
					</p>
				</div>
			</div>
			<!-- Fin de la partie des echographie -->

			<br>
			<hr>

			<!-- La partie du CPN 4 -->
			<div class="cpn4">
				<p> Date : <span> pas d'exemple </span> Ou : <span> pas d'exemple </span> SA : <span> pas d'exemple </span> mois : <span> pas d'exemple </span> </p>
				<p> Lieu CPN : <span> pas exemple </span> Par qui : <span> pas exemple </span> </p>
				<p> Qualificqtion prestataire : <span> pas exemple </span> Tel : <span> pas exemple </span> </p>
				<p> Plaintes : <span> pas exemple </span> </p>
				<p> Poids : <span> pas exemple </span> PB : <span> pas exemple </span> TA : <span> pas exemple </span> </p>
				<p> Urine : <span> pas exemple </span> ALB: <span> pas exemple </span> Sucre : <span> pas exemple </span> </p>
				<p> EG : <span> pas exemple </span> Muqueuses: <span> pas exemple </span> OMI : <span> pas exemple </span> </p>
				<p> Examan des seins : <span> pas exemple </span> </p>
				<p> HU : <span> pas exemple </span> BDC : <span> pas exemple </span></p>
				<p> TVA : <span> pas exemple </span> </p>
				<p> Presentation : <span> pas exemple </span> </p>
				<p> Bassin : Pelvimetrie interne : <span> ..... </span> PRP : <span> .... </span> Ligne inominee : <span> .... </span> </p>
				<p> Pelvimetrie externe : Trillat <span> ..... </span> Bischiatique : <span> .... </span> LM : <span> .... </span> </p>
				<table class="cpn4">
					<tr class="tr_cpn4">
						<td class="td_cpn4"> <label for=""> Fer ac folique <input type="checkbox" name="" id="">  </label> </td>
						<td class="td_cpn4"> <label for=""> VAT <input type="checkbox" name="" id="">  </label> </td>
						<td class="td_cpn4"> <label for=""> TPI <input type="checkbox" name="" id="">  </label> </td>
						<td class="td_cpn4"> <label for=""> Cousseling PFPP <input type="checkbox" name="" id="">  </label> </td>
						<td class="td_cpn4"> Accepte <label for="">  <input type="checkbox" name="" id=""> Oui </label> 
						<label for="">  <input type="checkbox" name="" id="">  </label> Non
						</td>
					</tr>
				</table>
				<p> Lieu d'accouchement apres consentement : <span> .... </span>  </p>
				<p> Autres examens <span> <label for=""> <input type="checkbox" name="" id=""> Oui</label> </span> 
				<span> <label for=""> <input type="checkbox" name="" id=""> Non</label> </span>
				 Date : <span> ... </span></p>
				 <p>Resultats : <span> ... </span></p>
				 <p>Traitements : <span> ... </span></p>
				 <p>Date d'accouchement : <span> ... </span></p>
			</div>
			<!-- la fin de la partie du CPN 4 -->
			<br>
			<hr>
			<!-- La partie du visite de suivi -->
			<div class="visite_suivit">
				<h3>Visite de Suivit</h3>
				<table class="visit_suivit">
					<tr class="tr_visit_suivit">
						<th class="th_visit_suivit"> Date </th>
						<th class="th_visit_suivit"> Plaintes </th>
						<th class="th_visit_suivit"> Diagnostic </th>
						<th class="th_visit_suivit"> Traitement </th>
						<th class="th_visit_suivit"> Observation </th>
					</tr>
					<tr class="tr_visit_suivit">
						<td class="td_visit_suivit"> Pas d'exemple </td>
						<td class="td_visit_suivit"> Pas d'exemple </td>
						<td class="td_visit_suivit"> Pas d'exemple </td>
						<td class="td_visit_suivit"> Pas d'exemple </td>
						<td class="td_visit_suivit"> Pas d'exemple </td>
					</tr>
				</table>
			</div>
			<!-- Fin de la partie du visite de suivit -->


	   </div>
   </section>
<!-- fin de la premier section -->


<!-- Premiere section -->
	<section class=" container rv-enfant">
	   	<div class="enfant-left">
			<div class="rv-body">
				<h2>Rendez-Vous d'un de vos enfants</h2>
				<p>
					<span class="infos">Ousmane Diallo</span>
					<p class="infos">Nee le 12/10/2020</p>
				</p>
			</div>
	   	</div>
	   	<div class="enfant-right">
		  	<div class="infos-rv">
				<h2>Detail du Rendez-Vous</h2>
				<p>
					<span>Date : Le 40/35/3000</span>
					<span class="heure">Heure: 12:23:00</span>
				</p>
				<p>
				<span>Vaccination</span>
				</p>
				<p>
					Avec Mr Ousmane Diallo
				</p>
			</div>
	   	</div>
   	</section>
<!-- fin de la premier section -->



@endsection