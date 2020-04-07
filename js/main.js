//initialisation du slide de la page d'index
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
        height: 350,
        indicators:false
    });
});
///////page d'accueil

//le slide
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

///// pages programmes

//initialisation du carrousel des agences

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems,{indicators:true});
});

///////page administrateur

//initialisation du menu lateralle

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

// manipulation du DOM

//changement de fonctionnalite et d'option dans le DOM
let choixFonct=document.getElementById('fonchoix');
let fonct=document.getElementById("ajout");
let titre=document.getElementById('libele');
let formEle=document.getElementById('formAjout');
let optEle=document.getElementById('option');
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
    }
    else if(choixFonct.textContent==='modifier'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Modifier Evenement');
        formEle.style.display='none';
        alert('envoi');
        //recuperation des infos a modifier de table evenement
        ajaxGet("http://localhost/projets/jhs/controleur/verification.php?fonc='modifier'&option='evenement'",function(rep){
            console.log(rep);
        });
        
    }
    else if(choixFonct.textContent==='supprimer'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Supprimer Evenement');
        formEle.style.display='none';
        ajaxGet("http://localhost/projets/jhs/controleur/verification.php?fonc='supprimer'&option='evenement'",function(rep){
            console.log(rep);
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
    }
    else if(choixFonct.textContent==='modifier'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Modifier Actualite');
        formEle.style.display='none';
        //appel de la fonction ajaxGet
        ajaxGet("http://localhost/projets/jhs/controleur/verification.php?fonc='modifier'&option='actualite'",function(rep){
            console.log(rep);
        });

    }
    else if(choixFonct.textContent==='supprimer'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Supprimer Actualite');
        formEle.style.display='none';
         //appel de la fonction ajaxGet
         ajaxGet("http://localhost/projets/jhs/controleur/verification.php?fonc='supprimer'&option='actualite'",function(rep){
            console.log(rep);
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
    }
    else if(choixFonct.textContent==='modifier'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Modifier Annonce');
        formEle.style.display='none';

    }
    else if(choixFonct.textContent==='supprimer'){
        titre.innerHTML='';
        titre.insertAdjacentHTML('afterbegin','Supprimer Annonce');
        formEle.style.display='none';
    }
});
//fonction de callback d'ajax ajout

function callback(){
    let mesEle=document.getElementById('message');
    mesEle.innerHTML='succes';   
}

//appel de la fonction ajax d'ajout

let FormEle=document.getElementById('formAjout');
FormEle.addEventListener("submit", function (e) {
    e.preventDefault();
    var data = new FormData(FormEle);
    ajaxPost('http://localhost/projets/jhs/controleur/verification.php', data, function callback(){
        let mesEle=document.getElementById('message');
        mesEle.innerHTML='succes';       
    });
});

//appel de la fonction ajax de recuperation




//dropdown du slide
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
});

