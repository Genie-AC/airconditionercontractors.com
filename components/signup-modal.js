// Accessible Sign-up Modal behaviors
(function(){
  const modal = document.getElementById('signupModal');
  if (!modal) return;

  const dialog = modal.querySelector('.signup-modal__dialog');
  const backdrop = modal.querySelector('.signup-modal__backdrop');
  const closeButtons = modal.querySelectorAll('[data-dismiss="signup-modal"]');
  let lastFocused = null;

  // Identify triggers: explicit data attribute or fallback to signup.php links
  const triggers = Array.from(document.querySelectorAll('a[data-open-signup-modal], a[href="signup.php"]'));

  function getFocusable(container) {
    return Array.from(container.querySelectorAll(
      'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, [tabindex]:not([tabindex="-1"]), [contentEditable=true]'
    )).filter(el => el.offsetParent !== null);
  }

  function openModal(trigger) {
    lastFocused = trigger || document.activeElement;
    modal.hidden = false;
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
    const focusables = getFocusable(dialog);
    if (focusables.length) {
      focusables[0].focus();
    } else {
      dialog.setAttribute('tabindex','-1');
      dialog.focus();
    }
    document.addEventListener('keydown', onKeyDown);
  }

  function closeModal() {
    modal.classList.remove('open');
    modal.hidden = true;
    document.body.style.overflow = '';
    document.removeEventListener('keydown', onKeyDown);
    if (lastFocused && typeof lastFocused.focus === 'function') {
      lastFocused.focus();
    }
  }

  function onKeyDown(e) {
    if (e.key === 'Escape') {
      e.preventDefault();
      closeModal();
      return;
    }
    if (e.key === 'Tab') {
      const focusables = getFocusable(dialog);
      if (!focusables.length) return;
      const first = focusables[0];
      const last = focusables[focusables.length - 1];
      if (e.shiftKey) {
        if (document.activeElement === first || !dialog.contains(document.activeElement)) {
          e.preventDefault();
          last.focus();
        }
      } else {
        if (document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    }
  }

  // Bind triggers (progressive enhancement)
  triggers.forEach(tr => {
    tr.addEventListener('click', function(e){
      e.preventDefault();
      openModal(this);
    });
  });

  // Backdrop and close buttons
  closeButtons.forEach(btn => btn.addEventListener('click', closeModal));
  if (backdrop) backdrop.addEventListener('click', closeModal);
})();