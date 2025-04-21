const watchedElements = new Set();

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      watchedElements.add(entry.target);
    } else {
      watchedElements.delete(entry.target);
      entry.target.classList.remove('centered');
    }
  });
}, {
  root: null,
  threshold: 0 // triggers as soon as the element is visible
});

document.querySelectorAll('.watch-me').forEach(el => observer.observe(el));

function checkWhichIsCentered() {
  const viewportCenter = window.innerHeight / 2;

  watchedElements.forEach(el => {
    const rect = el.getBoundingClientRect();
    const elCenter = rect.top + rect.height / 2;
    const distance = Math.abs(viewportCenter - elCenter);

    if (distance < 160) {
      el.classList.add('centered');
    } else {
      el.classList.remove('centered');
    }
  });
}

window.addEventListener('scroll', checkWhichIsCentered);
window.addEventListener('resize', checkWhichIsCentered);
