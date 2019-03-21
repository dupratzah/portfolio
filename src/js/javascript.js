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
        offset:'30%'
    })
})
/* SMOOTH SCROLL */
var scroll = new SmoothScroll('a[href*="#"]', {
 
 
    // Speed & Duration
    speed: 1000, // Integer. Amount of time in milliseconds it should take to scroll 1000px
    speedAsDuration: false, // If true, use speed as the total duration of the scroll animation
    durationMax: null, // Integer. The maximum amount of time the scroll animation should take
    durationMin: null, // Integer. The minimum amount of time the scroll animation should take
    clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
 
 
    // History
    updateURL: true, // Update the URL on scroll
    popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)
 
    // Custom Events
    emitEvents: true // Emit custom events
 
});

