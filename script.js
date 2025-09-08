// Highlight active menu (if needed)
document.querySelectorAll('.nav a').forEach(link => {
    link.addEventListener('click', function () {
      document.querySelector('.nav a.active')?.classList.remove('active');
      this.classList.add('active');
    });
  });
  const typingText = "I'm a Software Developer";
let i = 0;

function typeWriter() {
  const target = document.getElementById("typing");
  if (i < typingText.length) {
    target.innerHTML += typingText.charAt(i);
    i++;
    setTimeout(typeWriter, 100);
  } else {
    setTimeout(() => {
      target.innerHTML = "";
      i = 0;
      typeWriter();
    }, 2000);
  }
}

window.onload = typeWriter;

// Modal helpers (kept for pages that include modals). Only defined once.
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) modal.style.display = "block";
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) modal.style.display = "none";
}

// Close modal when clicking outside of modal content
window.addEventListener('click', function(event) {
  const modals = document.querySelectorAll('.modal');
  modals.forEach(modal => {
    const content = modal.querySelector('.modal-content');
    if (event.target === modal && (!content || !content.contains(event.target))) {
      modal.style.display = 'none';
    }
  });
});
