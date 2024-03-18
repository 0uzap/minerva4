document.addEventListener("DOMContentLoaded", function() {
    const genreCheckboxes = document.querySelectorAll('.genre-checkbox');

    // Fonction pour filtrer les livres en fonction des genres sélectionnés
    function filterLivres() {
        const selectedGenres = Array.from(genreCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.id);

        const livres = document.querySelectorAll('.livre-card');

        livres.forEach(livre => {
            const genre = livre.querySelector('.test strong').getAttribute('id');

            // Si aucun genre n'est sélectionné, afficher tous les livres
            if (selectedGenres.length === 0) {
                livre.style.display = 'block';
            } else {
                // Si le genre du livre est parmi les genres sélectionnés, l'afficher, sinon le cacher
                if (selectedGenres.includes(genre)) {
                    livre.style.display = 'block';
                } else {
                    livre.style.display = 'none';
                }
            }
        });
    }

    // Ajouter un écouteur d'événement à chaque case à cocher
    genreCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterLivres);
    });

    // Appliquer le filtre au chargement de la page
    filterLivres();
});