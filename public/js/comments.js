document.addEventListener('DOMContentLoaded', () => {
    const reviewForm = document.getElementById('review_form');
    const reviewsList = document.getElementById('reviews_list');

    reviewForm.addEventListener('submit', async (event) => {
        event.preventDefault(); // Empêcher le rechargement de la page
        
        const formData = new FormData(reviewForm);

        try {
            const response = await fetch(reviewForm.action, {
                method: 'POST',
                body: formData,
            });

            const result = await response.json();

            if (result.status === 'success') {
                // Ajouter dynamiquement le commentaire
                const newReview = document.createElement('div');
                newReview.className = 'user_review_container d-flex flex-column flex-sm-row';
                newReview.innerHTML = `
                    <div class="review">
                        <div class="review_date">${new Date().toLocaleDateString()}</div>
                        <div class="user_name">${result.userName}</div>
                        <p>${formData.get('message')}</p>
                    </div>
                `;
                reviewsList.prepend(newReview);

                // Réinitialiser le formulaire
                reviewForm.reset();
            } else {
                    // Ouvre la page de connexion dans une fenêtre popup
                    const width = 600;
                    const height = 400;
                    const left = (screen.width / 2) - (width / 2);
                    const top = (screen.height / 2) - (height / 2);

                    const loginPopup = window.open(
                        '/login', // Assurez-vous que ce chemin est correct
                        'PopupConnexion',
                        `width=${width},height=${height},top=${top},left=${left}`
                    );
                
                    if (!loginPopup || loginPopup.closed || typeof loginPopup.closed === 'undefined') {
                        alert('Veuillez autoriser les popups pour continuer.');
                    }
                }
            } catch (error) {
                console.error('Erreur lors de l\'ajout du commentaire:', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
    });
});