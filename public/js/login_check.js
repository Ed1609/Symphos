document.getElementById('loginForm').addEventListener('submit', async function (event) {
    event.preventDefault(); // Empêche le comportement par défaut du formulaire

    const form = event.target;
    const formData = new FormData(form);

    try {
        // Faites une requête pour vérifier les identifiants
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
        });

        if (response.ok) {
            const result = await response.json();

            if (result.success) {
                // Connexion réussie : informer la page principale
                if (window.opener && !window.opener.closed) {
                    window.opener.location.reload(); // Recharge la page parent
                }
                window.close(); // Ferme le popup
            } else {
                // Identifiants incorrects
                displayError('Échec de la connexion. Vérifiez vos identifiants.');
            }
        } else {
            // Erreur réseau ou serveur
            displayError('Une erreur est survenue. Veuillez réessayer.');
        }
    } catch (error) {
        console.error('Erreur de connexion :', error);
        displayError('Une erreur technique est survenue. Contactez le support si le problème persiste.');
    }
});

/**
 * Fonction pour afficher un message d'erreur dans la page.
 * @param {string} message - Message à afficher.
 */
function displayError(message) {
    const errorContainer = document.getElementById('errorContainer');

    if (errorContainer) {
        errorContainer.textContent = message;
        errorContainer.style.display = 'block';
    } else {
        alert(message); // Si aucun conteneur d'erreur n'est défini, utilisez une alerte
    }
}
