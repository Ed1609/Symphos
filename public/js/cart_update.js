document.addEventListener("DOMContentLoaded", function() {
    function updateCartQuantity() {
        fetch('/cart/quantity')
            .then(response => response.json())
            .then(data => {
                // Vérifiez si 'data.qte' est défini
                if (data.qte !== undefined) {
                    document.getElementById('checkout_items').textContent = data.qte;
                } else {
                    console.error('Erreur: La réponse du serveur ne contient pas "qte".');
                }
            })
            .catch(error => console.error('Erreur lors de la mise à jour du panier:', error));
    }

    // Exécuter la mise à jour du panier lors du chargement de la page
    updateCartQuantity();
    
    document.querySelectorAll('.add_to_cart_button').forEach(button => {
        button.addEventListener('click', function() {
            // Attendre que le produit soit ajouté au panier avant de mettre à jour la quantité
            setTimeout(updateCartQuantity, 500); // Le délai de 500ms est à ajuster si nécessaire
        });
    });
});
