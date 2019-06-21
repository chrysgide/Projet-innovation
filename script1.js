// validation du formulaire
		/*var validation = document.getElementById('bouton_envoi');
		// champs nom
		var nom = document.getElementById('name');
		var nom_m = document.getElementById('nom_manquant');
		var nom_v = /^[a-zA-Z][a-zèéêA-Z]+([-'\s][a-zA-Z0-9])?/;
		validation.addEventListener('click', n_valid);


		function n_valid(e){
			if(nom.validity.valueMissing){
				e.preventDefault();
				nom_m.textContent = 'Champs obligatoire';
				nom_m.style.color ='red';
			}else if(nom_v.test(nom.value) == false) {
				event.preventDefault();
				nom_m.textContent = 'Format incorrect';
				nom_m.style.color ='orange';
			}else{			}
		}

		// champs fnom
		/*
		var fnom = document.getElementById('fname');
		var fnom_m = document.getElementById('fnom_manquant');
		var fnom_v = /^[a-zA-Z][a-zèéêA-Z]+([-'\s][a-zA-Z0-9])?/;
		validation.addEventListener('click', fn_valid);


		function fn_valid(e){
			if(fnom.validity.valueMissing){
				e.preventDefault();
				fnom_m.textContent = 'Champs obligatoire';
				fnom_m.style.color ='red';
			}else if(fnom_v.test(fnom.value) == false) {
				event.preventDefault();
				fnom_m.textContent = 'Format incorrect';
				fnom_m.style.color ='orange';
			}else{			}
		}*/

		// champs prenom
		var prenom = document.getElementById('prenom');
		var prenom_m = document.getElementById('prenom_manquant');
		var prenom_v = /^[a-zA-Z][a-zèéêA-Z]+([-'\s][a-zA-Z0-9])?/;
		validation.addEventListener('click', p_valid);


		function p_valid(e){
			if(prenom.validity.valueMissing){
				e.preventDefault();
				prenom_m.textContent = 'Champs obligatoire';
				prenom_m.style.color ='red';
			}else if(prenom_v.test(prenom.value) == false) {
				event.preventDefault();
				prenom_m.textContent = 'Format incorrect';
				prenom_m.style.color ='orange';
			}else{			}
		}

		// champs fprenom
		var fprenom = document.getElementById('fprenom');
		var fprenom_m = document.getElementById('fprenom_manquant');
		var fprenom_v = /^[a-zA-Z][a-zèéêA-Z]+([-'\s][a-zA-Z0-9])?/;
		validation.addEventListener('click', fp_valid);


		function fp_valid(e){
			if(fprenom.validity.valueMissing){
				e.preventDefault();
				fprenom_m.textContent = 'Champs obligatoire';
				fprenom_m.style.color ='red';
			}else if(fprenom_v.test(fprenom.value) == false) {
				event.preventDefault();
				fprenom_m.textContent = 'Format incorrect';
				fprenom_m.style.color ='orange';
			}else{			}
		}

		// champs lieu de naissance

		var lieu_naiss = document.getElementById('lieu_naiss');
		var lieu_naiss_m = document.getElementById('lieu_manquant');
		var lieu_naiss_v = /^[a-zA-Z][a-zèéêA-Z]+([-'\s][a-zA-Z0-9])?/;
		validation.addEventListener('click', l_valid);


		function l_valid(e){
			if(lieu_naiss.validity.valueMissing){
				e.preventDefault();
				lieu_naiss_m.textContent = 'Champs obligatoire';
				lieu_naiss_m.style.color ='red';
			}else if(lieu_naiss_v.test(lieu_naiss.value) == false) {
				event.preventDefault();
				lieu_naiss_m.textContent = 'Format incorrect';
				lieu_naiss_m.style.color ='orange';
			}else{			}
		}


		// champs adresse mail
		/*
		var mail = document.getElementById('mail');
		var mail_m = document.getElementById('mail');
		var mail_v = /^[a-zA-Z][a-zèéêA-Z]+([-'\s][a-zA-Z0-9])?/;
		validation.addEventListener('click', m_valid);


		function m_valid(e){
			if(mail.validity.valueMissing){
				e.preventDefault();
				mail_m.textContent = 'Champs obligatoire';
				mail_m.style.color ='red';
			}else if(mail_v.test(mail.value) == false) {
				event.preventDefault();
				mail_m.textContent = 'Adresse e-mail invalide !';
				mail_m.style.color ='orange';
			}else{			}
		}*/


	//  /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;