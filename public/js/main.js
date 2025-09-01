//---------------------------------------ScrollTop----------------------------------------------
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
        document.getElementById("scrollToTopBtn").style.display = "none";
    }
}

function scrollToTop() {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
}

//-------------------------------------Transición texto apartado 1h-------------------------------------

const heroContent = document.querySelector('.hero-content');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      heroContent.classList.add('visible');
      heroContent.classList.remove('hide');
    } else {
      heroContent.classList.remove('visible');
      heroContent.classList.add('hide');
    }
  });
}, { threshold: 0.9 }); 

observer.observe(heroContent);
//-----------------------------------------------Animación apartado 2 home-------------------------------------

  document.addEventListener("DOMContentLoaded", () => {
    const elementos = document.querySelectorAll(".apartado2hp2");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
        entry.target.classList.add("show");
        } else {
          entry.target.classList.remove("show");
        }
      });
    }, { threshold: 0.1 }); 

    elementos.forEach(el => observer.observe(el));
  });

//-----------------------------------------------Animación apartado 3 home--------------------------------------

const canvas = document.getElementById("bolitasCanvas");
const ctx = canvas.getContext("2d");
const container = document.querySelector(".container-apartado3h");

let bolitas = [];

function resizeCanvas() {
  canvas.width = container.offsetWidth;
  canvas.height = container.offsetHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

// Crear bolitas random
function crearBolitas(num) {
  bolitas = [];
  for (let i = 0; i < num; i++) {
    bolitas.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      r: Math.random() * 20 + 10,
      dx: (Math.random() - 0.5) * 1,
      dy: (Math.random() - 0.5) * 1,
    });
  }
}
crearBolitas(40);

// Animar
function animar() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = "rgba(0,150,255,0.6)";
  
  for (let b of bolitas) {
    ctx.beginPath();
    ctx.arc(b.x, b.y, b.r, 0, Math.PI * 2);
    ctx.fill();

    b.x += b.dx;
    b.y += b.dy;

    if (b.x < 0 || b.x > canvas.width) b.dx *= -1;
    if (b.y < 0 || b.y > canvas.height) b.dy *= -1;
  }

  requestAnimationFrame(animar);
}
animar();


document.addEventListener("DOMContentLoaded", () => {
  const cuadros = document.querySelectorAll(".cuadro3h");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  }, { threshold: 0.2 });

  cuadros.forEach(cuadro => observer.observe(cuadro));
});

//------------------------------------------------Ver en tamaño completo cer-----------------------------------
function toggleFullScreen1() {
  if (document.fullscreenElement) {
    document.exitFullscreen();
  } else {
    document.querySelector('.cer1').requestFullscreen();
  }
}

function toggleFullScreen2() {
  if (document.fullscreenElement) {
    document.exitFullscreen();
  } else {
    document.querySelector('.cer2').requestFullscreen();
  }
}

function toggleFullScreen3() {
  if (document.fullscreenElement) {
    document.exitFullscreen();
  } else {
    document.querySelector('.cer3').requestFullscreen();
  }
}

//-----------------------------------------------Validación formulario------------------------------------------
function validateForm() {
  var response = grecaptcha.getResponse();
  var $msgError = $('.msg-error');
  if (response.length === 0) {
    $('.msg-error').text("El reCAPTCHA es obligatorio");
    $msgError.addClass("error-text");
    return false; // Evitar que el formulario se envíe
  } else {
    $('.msg-error').text('');
    $msgError.removeClass("error-text");
    return true; // Permitir el envío del formulario
  }
}

$('#contact-form').submit(function(event) {
  // Evitar el envío automático del formulario
  event.preventDefault();
  
  // Llamar a la función de validación del reCAPTCHA
  if (validateForm()) {
    // Si el reCAPTCHA se validó correctamente, enviar el formulario manualmente
    this.submit();
  }
});