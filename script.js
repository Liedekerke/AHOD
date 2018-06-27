let don = document.getElementById('button');
let somme;
don.addEventListener('click', () => {
    somme = parseInt(prompt('entrer une somme'));
    if (!isNaN(somme)){
        alert('Merci pour votre donnation de ' + somme + ' euros');
    } else {
        alert("FUCKOFF CLAUDIU"); 
    }
})

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('service-worker.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        }
    );
        }
    );
}
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}


