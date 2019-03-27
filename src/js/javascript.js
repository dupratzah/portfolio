/*PARRALLAX*/
import Rellax from "rellax";
import 'waypoints/lib/noframework.waypoints.min.js';
import SmoothScroll from 'smooth-scroll/dist/smooth-scroll.polyfills';
var rellax = new Rellax('.objet', {
    center: true
});
/* WAYPOINT */
const sections = document.querySelectorAll('section');
sections.forEach(section => {
    var waypoint = new Waypoint({
        element: section,
        handler: function(direction){
            section.classList.add('section--reached')
            console.log("way")
        },
        offset:'70%'
    })
})
/* SMOOTH SCROLL */
var scroll = new SmoothScroll('a[href*="#"]', {
 
 
    // Speed & Duration
    speed: 1000, // Integer. Amount of time in milliseconds it should take to scroll 1000px
    speedAsDuration: false, // If true, use speed as the total duration of the scroll animation
    clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
 
 
    // History
    updateURL: true, // Update the URL on scroll
    popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)
 
    // Custom Events
    emitEvents: true // Emit custom events
 
});



/** FONCTIONNALITES */

//GROSSIR OU RETRECIR LA POLICE

 if(typeof localStorage!=='undefined'){
    var taillePolice = localStorage.getItem('taille');
    if(taillePolice!==null){
      taillePolice = parseInt(taillePolice);
    }
    else{
      taillePolice = 16;
    }
    localStorage.setItem('taille',taillePolice);
    var baliseHTML = document.getElementsByTagName('html');
    baliseHTML[0].style = 'font-size:'+ taillePolice + 'px;';
  }
  else{
    alert("localStorage n\'est pas supporté");
  }
  
  document.getElementById('plus').addEventListener("click",function(){
    taillePolice = localStorage.getItem('taille');
    if(taillePolice <= 32){
      taillePolice = parseInt(taillePolice) + 2;
      localStorage.setItem('taille',taillePolice);
      var baliseH1 = document.getElementsByTagName('h1');
      for (var i = baliseH1.length - 1; i >= 0; i--) {
        baliseH1[i].style = 'font-size:' + taillePolice + 'px;';
      }
      var baliseH2 = document.getElementsByTagName('h2');
      for (var i = baliseH2.length - 1; i >= 0; i--) {
        baliseH2[i].style = 'font-size:' + taillePolice + 'px;';
      }
      var baliseH3 = document.getElementsByTagName('h3');
      for (var i = baliseH3.length - 1; i >= 0; i--) {
        baliseH3[i].style = 'font-size:' + taillePolice + 'px;';
      }
      var balisep = document.getElementsByTagName('p');
      for (var i = balisep.length - 1; i >= 0; i--) {
        balisep[i].style = 'font-size:' + taillePolice + 'px;';
      }
    }
    else{
      alert('Vous avez atteint la taille maximale');
    }
  });
  
  document.getElementById('moins').addEventListener("click",function(){
    taillePolice = localStorage.getItem('taille');
    if(taillePolice >= 10){
      taillePolice = parseInt(taillePolice) - 2;
      localStorage.setItem('taille',taillePolice);
      var baliseH1 = document.getElementsByTagName('h1');
      for (var i = baliseH1.length - 1; i >= 0; i--) {
        baliseH1[i].style = 'font-size:' + taillePolice + 'px;';
      }
      var baliseH2 = document.getElementsByTagName('h2');
      for (var i = baliseH2.length - 1; i >= 0; i--) {
        baliseH2[i].style = 'font-size:' + taillePolice + 'px;';
      }
      var baliseH3 = document.getElementsByTagName('h3');
      for (var i = baliseH3.length - 1; i >= 0; i--) {
        baliseH3[i].style = 'font-size:' + taillePolice + 'px;';
      }
      var balisep = document.getElementsByTagName('p');
      for (var i = balisep.length - 1; i >= 0; i--) {
        balisep[i].style = 'font-size:' + taillePolice + 'px;';
      }
    }
    else{
      alert('Vous avez atteint la taille minimale');
    }
  });

  //DYSLEXIE 

document.getElementById('dys').addEventListener("click",function(){
    var p = document.getElementsByTagName('body');
    for (var i = p.length - 1; i >= 0; i--) {
        p[i].classList.toggle("dyslexie");
    }
});