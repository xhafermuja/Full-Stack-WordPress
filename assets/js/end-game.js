
/*MODAL HEADER*/

// const autoprefixer = require("autoprefixer");

window.addEventListener('DOMContentLoaded', () =>{
    /*Login MODAL*/
    const overlayLogin = document.querySelector('#overlay-login');
    const loginBtn = document.querySelector('#login-btn');
    const closeLogin = document.querySelector('#close-lglogin');
    

    const loginModal = () => {
        overlayLogin.classList.toggle('hidden');
        overlayLogin.classList.toggle('flex');
    };
    loginBtn.addEventListener('click', loginModal);

    closeLogin.addEventListener('click', loginModal);

    /*Register MODAL*/

    const overlayRegister = document.querySelector('#overlay-register');
    const registerBtn = document.querySelector('#register-btn');
    const closeRegister = document.querySelector('#close-lgregister');

    const registerModal = () => {
        overlayRegister.classList.toggle('hidden');
        overlayRegister.classList.toggle('flex');
    };
    registerBtn.addEventListener('click', registerModal);

    closeRegister.addEventListener('click', registerModal);

 
});


const toggle = () => {
    const nav = document.getElementById("topnav");
    nav.className === "topnav" ? nav.className += " responsive" : nav.className = "topnav";
};

$(window).scroll(function(){
    if ($(window).scrollTop() >= 20) {
        $('nav').addClass('fixed-header');
    }
    else {
        $('nav').removeClass('fixed-header');
    }
});


//parseInt($('.fa-star').parent().data('user')) RATING
var ratedIndex=-1,cardID=-1, uID=0;//no Rating
$(document).ready(function(){
    resetStarColors();
    var cards =document.querySelectorAll('.fa-star');
    if(localStorage.getItem('ratedIndex') !=null){
        setStars(parseInt(localStorage.getItem('ratedIndex')),parseInt(localStorage.getItem('cardID')));//ME e configuru hala
        uID = localStorage.getItem('uID');
    }
    
    cards.forEach(card => {
        card.addEventListener('click', () => {
            ratedIndex = parseInt($(card).data("index"));
            cardID = parseInt($(card).parent().data("index"));
            localStorage.setItem('ratedIndex', ratedIndex);
            localStorage.setItem('cardID',cardID);
            saveToTheDB();
        });
        
        card.addEventListener('mouseover', () => {
            resetStarColors();
            var currentIndex= parseInt($(card).data("index"));
            setStars(currentIndex,card);
        });
        card.addEventListener('mouseout', () => {
            resetStarColors();
            if(ratedIndex != -1){
               setStars(ratedIndex,card);
            }
        });

    });
});
function saveToTheDB(){
    $.ajax({
        url: "index.php",
        method:"POST",
        dataType:'json',
        data:{
            save:1,
            uID: uID,
            cardID: cardID,
            ratedIndex: ratedIndex
        }, success: function (r) {
            uID = r.id;
            localStorage.setItem('uID',uID);
       }
    });
}

function setStars(max,card){
    $('.fa-star').css('cursor','pointer');
    for(var i=0; i<=max; i++){
      $( card ).prevAll().css( "color", "black" );
      $( card ).css( "color", "black" );
    }
};

function resetStarColors(){
    $('.fa-star').css('color','black');
}

