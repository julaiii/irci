/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// Bootstrap toasts auto-init
document.addEventListener('DOMContentLoaded', () => {
  // Sélectionne tous les éléments qui ont la classe .toast
  const toastElList = document.querySelectorAll('.toast');

  // Crée une instance de Toast pour chaque élément et l'affiche
  toastElList.forEach((toastEl) => {
    const toast = new bootstrap.Toast(toastEl, {
      delay: 5000, // Durée en millisecondes avant la fermeture automatique
    });
    toast.show();
  });

  // ===================================================
  // ANIMATIONS SCROLL REVEAL
  // ===================================================
  
  // Fonction pour vérifier si un élément est visible dans le viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    
    // L'élément est considéré visible s'il apparaît dans les 80% du bas de l'écran
    return (
      rect.top <= windowHeight * 0.8 &&
      rect.bottom >= 0
    );
  }

  // Fonction pour ajouter la classe 'revealed' aux éléments visibles
  function revealOnScroll() {
    const elementsToReveal = document.querySelectorAll(
      '.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-card'
    );

    elementsToReveal.forEach((element) => {
      if (isElementInViewport(element)) {
        element.classList.add('revealed');
      }
    });
  }

  // Écouter les événements de scroll avec throttle pour optimiser les performances
  let scrollTimeout;
  function throttleScroll() {
    if (!scrollTimeout) {
      scrollTimeout = setTimeout(() => {
        revealOnScroll();
        scrollTimeout = null;
      }, 50); // Throttle de 50ms
    }
  }

  // Événement de scroll
  window.addEventListener('scroll', throttleScroll);

  // Révéler les éléments déjà visibles au chargement de la page
  revealOnScroll();

  // Smooth scroll pour les ancres
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return; // Ignorer les liens "#" vides
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
});
