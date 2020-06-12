
/////// PAGE INDEX

//la barre latterale

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
});


//le slide
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

////// PAGE ADMINISTRATEUR


// manipulation du DOM

//changement de fonctionnalite de la page admin
// et des options dans le DOM

let choixFonct=document.getElementById('fonchoix');
let fonct=document.getElementById("ajout");
let titre=document.getElementById('libele');
let formEle=document.getElementById('formAjout');
let optEle=document.getElementById('option');
let affiEle=document.getElementById('affichage');
fonct.addEventListener('click',function(){
    choixFonct.innerHTML='';
    choixFonct.insertAdjacentHTML('afterbegin','ajouter');
});
fonct=document.getElementById('modifier');
fonct.addEventListener('click',function(){
    choixFonct.innerHTML='';
    choixFonct.insertAdjacentHTML('afterbegin','modifier');
});
fonct=document.getElementById('supprimer');
fonct.addEventListener('click',function(){
    choixFonct.innerHTML='';
    choixFonct.insertAdjacentHTML('afterbegin','supprimer');
    
});
let event=document.getElementsByClassName('event');
event[0].addEventListener('click',function(e){
    if(choixFonct.textContent==='ajouter'){
        optEle.value='evenement';
        formEle.style.display='block';
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Ajouter Evenement');
        affiEle.innerHTML='';
    }
    else if(choixFonct.textContent==='modifier'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Modifier Evenement');
        formEle.style.display='none';
        affiEle.innerHTML='';
        ajaxGet('http://localhost/projets/jhs/controleur/verification.php?option=evenement&fonc=modifier',function(reponse){
          affiEle.insertAdjacentHTML('beforeend',reponse);
        });
    }
    else if(choixFonct.textContent==='supprimer'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Supprimer Evenement');
        formEle.style.display='none';
        affiEle.innerHTML='';
        ajaxGet('http://localhost/projets/jhs/controleur/verification.php?option=evenement&fonc=supprimer',function(reponse){
          affiEle.insertAdjacentHTML('beforeend',reponse);
        });
    }
});
let actu=document.getElementsByClassName('actu');
actu[0].addEventListener('click',function(e){
    if(choixFonct.textContent==='ajouter'){
        optEle.value='actualite';
        formEle.style.display='block';
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Ajouter Actualite');
        affiEle.innerHTML='';
    }
    else if(choixFonct.textContent==='modifier'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Modifier Actualite');
        formEle.style.display='none';
        affiEle.innerHTML='';
        ajaxGet('http://localhost/projets/jhs/controleur/verification.php?option=actualite&fonc=modifier',function(reponse){
          affiEle.insertAdjacentHTML('beforeend',reponse);
        });
    }
    else if(choixFonct.textContent==='supprimer'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Supprimer Actualite');
        formEle.style.display='none';
        affiEle.innerHTML='';
        ajaxGet('http://localhost/projets/jhs/controleur/verification.php?option=actualite&fonc=supprimer',function(reponse){
          affiEle.insertAdjacentHTML('beforeend',reponse);
        });
    }
});
let annon=document.getElementsByClassName('annon');
annon[0].addEventListener('click',function(e){
    if(choixFonct.textContent==='ajouter'){
        optEle.value='annonce';
        formEle.style.display='block';
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Ajouter Annonce');
        affiEle.innerHTML='';
    }
    else if(choixFonct.textContent==='modifier'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Modifier Annonce');
        formEle.style.display='none';
        affiEle.innerHTML='';
        ajaxGet('http://localhost/projets/jhs/controleur/verification.php?option=annonce&fonc=modifier',function(reponse){
          affiEle.insertAdjacentHTML('beforeend',reponse);
        });
    }
    else if(choixFonct.textContent==='supprimer'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Supprimer Annonce');
        formEle.style.display='none';
        affiEle.innerHTML='';
        ajaxGet('http://localhost/projets/jhs/controleur/verification.php?option=annonce&fonc=supprimer',function(reponse){
          affiEle.insertAdjacentHTML('beforeend',reponse);
        });
    }
});

//ajax ajout elements dans la bdd

let FormEle=document.getElementById('formAjout');
FormEle.addEventListener("submit", function (e) {
    e.preventDefault();
    var data = new FormData(FormEle);
    ajaxPost('http://localhost/projets/jhs/controleur/verification.php', data, function(){
        let mesEle=document.getElementById('message');
        mesEle.innerHTML='succes';       
    });
});


//dropdown du slide
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
});

