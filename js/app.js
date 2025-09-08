 
 document.addEventListener("DOMContentLoaded", () => {
 // Script para actualizar el contador dinámicamente del Carousel 1
  const carousel = document.querySelector('#cardCarousel');
  const counter = document.querySelector('#carouselCounter');
  const totalSlides = carousel.querySelectorAll('.carousel-item').length;

  carousel.addEventListener('slid.bs.carousel', function (event) {
    const index = event.to + 1; // empieza en 0
    counter.textContent = `${String(index).padStart(2,'0')} of ${String(totalSlides).padStart(2,'0')}`;
  });

  // inicializar contador en 01 of XX
  counter.textContent = `01 of ${String(totalSlides).padStart(2,'0')}`;


  // Script para actualizar el contador dinámicamente del Carousel 2
  const carousel2 = document.querySelector('#cardCarousel2');
  const counter2 = document.querySelector('#carouselCounter2');
  const totalSlides2 = carousel2.querySelectorAll('.carousel-item2').length;

  carousel2.addEventListener('slid.bs.carousel', function (event) {
    const index2 = event.to + 1; // empieza en 0
    counter2.textContent = `${String(index2).padStart(2,'0')} of ${String(totalSlides2).padStart(2,'0')}`;
  });

  // inicializar contador en 01 of XX
  counter2.textContent = `01 of ${String(totalSlides2).padStart(2,'0')}`;


  // Script para actualizar el contador dinámicamente del Carousel 3
  const carousel3 = document.querySelector('#cardCarousel3');
  const counter3 = document.querySelector('#carouselCounter3');
  const totalSlides3 = carousel3.querySelectorAll('.carousel-item3').length;

  carousel3.addEventListener('slid.bs.carousel', function (event) {
    const index3 = event.to + 1; // empieza en 0
    counter3.textContent = `${String(index3).padStart(2,'0')} of ${String(totalSlides3).padStart(2,'0')}`;
  });

  // inicializar contador en 01 of XX
  counter3.textContent = `01 of ${String(totalSlides3).padStart(2,'0')}`;


});


document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contactForm');
  const successAlert = document.getElementById('successAlert');
  const errorAlert = document.getElementById('errorAlert');
  
  contactForm.addEventListener('submit', function(event) {
      event.preventDefault();
      
      // Validación básica
      if (!this.checkValidity()) {
          event.stopPropagation();
          this.classList.add('was-validated');
          return;
      }
      
      // Mostrar estado de carga
      const submitBtn = this.querySelector('.btn-submit');
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...';
      submitBtn.disabled = true;
      
      // Enviar formulario con AJAX
      const formData = new FormData(this);
      
      fetch(this.action, {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              successAlert.style.display = 'block';
              errorAlert.style.display = 'none';
              this.reset();
              this.classList.remove('was-validated');
              
              // Desplazarse hacia arriba para mostrar el mensaje de éxito
              window.scrollTo({ top: 0, behavior: 'smooth' });
          } else {
              throw new Error(data.data || 'Error en el envío');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          errorAlert.style.display = 'block';
          successAlert.style.display = 'none';
      })
      .finally(() => {
          // Restaurar botón
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
      });
  });
});