//DOMContentLoaded déclenché quand document HTML a été chargé et analysé
document.addEventListener("DOMContentLoaded", function() {
    const searchContainer = document.getElementById('searchContainer');
    const searchForm = searchContainer.querySelector('form');
    const searchInput = searchForm.querySelector('input[type="text"]');
    const searchUrl = searchContainer.dataset.searchUrl;

    searchForm.addEventListener('submit', function(event) {
        // Empêcher comportement par défaut du form
        event.preventDefault();

        const research = searchInput.value.trim();
        if (research !== '') {
            //encodeURIComponent() -> assure que la recherche est bien encodée pour l'utiliser dans une URL 
            window.location.href = searchUrl + '?q=' + encodeURIComponent(research);
        }
    });
});


