/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/style.scss';
import 'bootstrap/scss/bootstrap.scss';

// Test Vanilla JS

/*let button = document.querySelector('button');
let collapseOne = document.querySelector('#collapseOne');

button.addEventListener("click", function(){
    if(collapseOne.classList.contains('show')){
        collapseOne.classList.remove('show');
    }else{
        button.classList.add('collapsed');
        collapseOne.classList.add('show');
    }
})*/

//importer Collapse JS depuis bootstrap pour l'accordeon

    import { Collapse } from 'bootstrap/dist/js/bootstrap.esm'


    Array.from(document.querySelectorAll('.accordion-collapse'))
    .forEach(collapse => new Collapse(collapse))
