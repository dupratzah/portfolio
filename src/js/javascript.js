/*PARRALLAX*/
import Rellax from "rellax";
import 'waypoints/lib/noframework.waypoints.min.js';
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
