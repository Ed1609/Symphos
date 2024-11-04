// updateProm.js


document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour mettre à jour les cookies
    functionupdateCookies()
    {
        fetch('/accesCookie') // Assurez-vous que l'URL correspond à la route Symfony
        .then(response => response.json())
        .then(data => {
            console.log('Cookies updated:', data);
            // Vous pouvez utiliser les données pour mettre à jour l'interface utilisateur si nécessaire
        })
        .catch(error =>console.error('Error updating cookies:', error));
    }
    // Met à jour les cookies toutes les secondes
    setInterval(updateCookies, 1000);
});
