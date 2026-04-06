<style>
  /* ── Overlay ──────────────────────────────────── */
  .grids-overlay {
    position: fixed;
    inset: 0;
    z-index: 10000;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(17, 24, 39, 0.6);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.25s ease, visibility 0.25s ease;
    padding: 20px;
  }

  .grids-overlay.is-visible {
    opacity: 1;
    visibility: visible;
  }

  /* ── Modal ────────────────────────────────────── */
  .grids-modal {
    position: relative;
    background: #FFFFFF;
    border-radius: 12px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 480px;
    padding: 36px 32px 28px;
    transform: translateY(16px) scale(0.97);
    transition: transform 0.25s ease;
    max-height: 90vh;
    overflow-y: auto;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    line-height: 1.5;
    box-sizing: border-box;
  }

  .grids-modal *, .grids-modal *::before, .grids-modal *::after {
    box-sizing: border-box;
  }

  .grids-overlay.is-visible .grids-modal {
    transform: translateY(0) scale(1);
  }

  /* ── Close button ─────────────────────────────── */
  .grids-modal__close {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 32px;
    height: 32px;
    border: none;
    background: #F9FAFB;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.15s;
    color: #6B7280;
    padding: 0;
  }

  .grids-modal__close:hover {
    background: #E5E7EB;
    color: #1F2937;
  }

  .grids-modal__close svg {
    width: 16px;
    height: 16px;
  }

  /* ── Headline ─────────────────────────────────── */
  .grids-modal__headline {
    font-size: 24px;
    font-weight: 800;
    color: #1F2937;
    line-height: 1.2;
    margin: 0 0 6px;
  }

  .grids-modal__subheadline {
    font-size: 15px;
    color: #6B7280;
    margin: 0 0 24px;
    line-height: 1.5;
  }

  /* ── Checkbox card ────────────────────────────── */
  .grids-modal__options {
    background: #F9FAFB;
    border: 1px solid #E5E7EB;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 20px;
  }

  .grids-modal__option {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 16px;
    transition: background 0.15s;
    position: relative;
    user-select: none;
    margin: 0;
  }

  .grids-modal__option:not(:last-child) {
    border-bottom: 1px solid #E5E7EB;
  }

  .grids-modal__check {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
    color: #10B981;
  }

  .grids-modal__option-label {
    font-size: 15px;
    font-weight: 600;
    color: #1F2937;
  }

  .grids-modal__option-meta {
    font-size: 13px;
    font-weight: 400;
    color: #6B7280;
    margin-left: 4px;
  }

  /* ── Email input ──────────────────────────────── */
  .grids-modal__field {
    margin-bottom: 14px;
    position: relative;
  }

  .grids-modal__input {
    width: 100%;
    padding: 14px 16px;
    font-size: 15px;
    font-family: inherit;
    border: 1.5px solid #E5E7EB;
    border-radius: 10px;
    outline: none;
    color: #1F2937;
    transition: border-color 0.2s, box-shadow 0.2s;
    background: #FFFFFF;
  }

  .grids-modal__input::placeholder {
    color: #9CA3AF;
  }

  .grids-modal__input:focus {
    border-color: #0EA5E9;
    box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.12);
  }

  .grids-modal__input.has-error {
    border-color: #EF4444;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
  }

  .grids-modal__error {
    font-size: 13px;
    color: #EF4444;
    margin-top: 6px;
    display: none;
    padding-left: 2px;
  }

  .grids-modal__error.is-visible {
    display: block;
  }

  /* ── Submit button ────────────────────────────── */
  .grids-modal__submit {
    width: 100%;
    padding: 15px 24px;
    font-size: 16px;
    font-weight: 700;
    font-family: inherit;
    color: #FFFFFF;
    background: #32373c;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background 0.2s, transform 0.1s;
    letter-spacing: 0.01em;
  }

  .grids-modal__submit:hover {
    background: #434a52;
  }

  .grids-modal__submit:active {
    transform: scale(0.99);
  }

  .grids-modal__submit:disabled {
    opacity: 0.7;
    cursor: not-allowed;
  }

  /* ── Compliance text ──────────────────────────── */
  .grids-modal__compliance {
    font-size: 12px;
    color: #6B7280;
    text-align: center;
    margin-top: 14px;
    line-height: 1.6;
  }

  /* ── Study tip ────────────────────────────────── */
  .grids-modal__divider {
    border: none;
    border-top: 1px solid #E5E7EB;
    margin: 22px 0 18px;
  }

  .grids-modal__tip {
    font-size: 13px;
    color: #6B7280;
    line-height: 1.55;
  }

  .grids-modal__tip-header {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 4px;
  }

  .grids-modal__tip-icon {
    flex-shrink: 0;
    width: 18px;
    height: 18px;
  }

  .grids-modal__tip-header strong {
    color: #1F2937;
    font-weight: 600;
    font-size: 13px;
  }

  /* ── Success state ────────────────────────────── */
  .grids-modal__success {
    text-align: center;
    padding: 32px 8px 16px;
    display: none;
  }

  .grids-modal__success.is-visible {
    display: block;
  }

  .grids-modal__form.is-hidden {
    display: none;
  }

  .grids-modal__success-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 20px;
    background: #ECFDF5;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .grids-modal__success-icon svg {
    width: 32px;
    height: 32px;
    color: #10B981;
  }

  .grids-modal__success h2 {
    font-size: 22px;
    font-weight: 800;
    color: #1F2937;
    margin-bottom: 8px;
  }

  .grids-modal__success p {
    font-size: 15px;
    color: #6B7280;
    line-height: 1.55;
  }

  /* ── Notice banner (returning visitors) ────────── */
  .grids-modal__notice {
    background: #EFF6FF;
    border: 1px solid #BFDBFE;
    border-radius: 8px;
    padding: 10px 14px;
    font-size: 13px;
    color: #1E40AF;
    line-height: 1.5;
    margin-bottom: 16px;
    display: none;
  }

  .grids-modal__notice.is-visible {
    display: block;
  }

  /* ── Responsive ───────────────────────────────── */
  @media (max-width: 640px) {
    .grids-modal {
      padding: 28px 22px 22px;
    }

    .grids-modal__headline {
      font-size: 21px;
    }
  }
</style>

<!-- ── Email capture modal ──────────────────────── -->
<div class="grids-overlay" id="gridsOverlay">
  <div class="grids-modal" role="dialog" aria-modal="true" aria-labelledby="gridsHeadline">

    <!-- Close -->
    <button class="grids-modal__close" id="gridsClose" type="button" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>

    <!-- ─── Form content ─── -->
    <div class="grids-modal__form" id="gridsForm">
      <div class="grids-modal__notice" id="gridsNotice">You've already signed up! Check your email for your grids.</div>
      <h2 class="grids-modal__headline" id="gridsHeadline">Get Your Free Writing Grids</h2>
      <p class="grids-modal__subheadline">All 3 grid styles sent straight to your inbox — ready to print in seconds.</p>

      <!-- Grid list -->
      <div class="grids-modal__options">
        <div class="grids-modal__option" data-grid="regular">
          <svg class="grids-modal__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
          <span><span class="grids-modal__option-label">Regular Grids</span><span class="grids-modal__option-meta"> — 360 boxes</span></span>
        </div>
        <div class="grids-modal__option" data-grid="compact">
          <svg class="grids-modal__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
          <span><span class="grids-modal__option-label">Compact Grids</span><span class="grids-modal__option-meta"> — 520 boxes</span></span>
        </div>
        <div class="grids-modal__option" data-grid="separate">
          <svg class="grids-modal__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
          <span><span class="grids-modal__option-label">Separate Grids</span><span class="grids-modal__option-meta"> — 252 boxes</span></span>
        </div>
      </div>

      <!-- Email + submit (hidden for returning visitors) -->
      <div id="gridsSignup">
        <div class="grids-modal__field">
          <input type="email" class="grids-modal__input" id="gridsEmail" placeholder="Your email address" autocomplete="email">
          <div class="grids-modal__error" id="gridsError">Please enter a valid email address.</div>
        </div>

        <button class="grids-modal__submit" id="gridsSubmit" type="button">Send me the FREE grids &rarr;</button>

        <p class="grids-modal__compliance">We'll email your PDFs immediately. You'll also get occasional new worksheet updates — unsubscribe anytime.</p>
      </div>

      <!-- Tip -->
      <hr class="grids-modal__divider">
      <div class="grids-modal__tip">
        <div class="grids-modal__tip-header">
          <svg class="grids-modal__tip-icon" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 0 1 4 12.9V17a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-2.1A7 7 0 0 1 12 2z"/></svg>
          <strong>Study Tip:</strong>
        </div>
        <p>10 minutes a day is the fastest way to memorize characters.</p>
      </div>
    </div>

    <!-- ─── Success content ─── -->
    <div class="grids-modal__success" id="gridsSuccess">
      <div class="grids-modal__success-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
      </div>
      <h2>Check your inbox!</h2>
      <p>We sent a confirmation email. Click the link inside to get your free grids.</p>
    </div>

  </div>
</div>

<script>
(function () {
  'use strict';

  // ── Elements ───────────────────────────────────
  var overlay    = document.getElementById('gridsOverlay');
  var form       = document.getElementById('gridsForm');
  var success    = document.getElementById('gridsSuccess');
  var emailInput = document.getElementById('gridsEmail');
  var errorEl    = document.getElementById('gridsError');
  var submitBtn  = document.getElementById('gridsSubmit');
  var closeBtn   = document.getElementById('gridsClose');
  var noticeEl   = document.getElementById('gridsNotice');
  var signupEl   = document.getElementById('gridsSignup');


  // ── Helpers ────────────────────────────────────
  function isValidEmail(str) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(str.trim());
  }

  function openModal() {
    // Reset to form state
    form.classList.remove('is-hidden');
    success.classList.remove('is-visible');
    emailInput.value = '';
    emailInput.classList.remove('has-error');
    errorEl.classList.remove('is-visible');
    submitBtn.textContent = 'Send me the FREE grids \u2192';
    submitBtn.disabled = false;

    // Returning visitors: show notice, hide signup form
    var isReturning = !!localStorage.getItem('grids_subscribed');
    noticeEl.classList.toggle('is-visible', isReturning);
    signupEl.style.display = isReturning ? 'none' : '';

    overlay.classList.add('is-visible');
    if (!isReturning) {
      setTimeout(function () {
        emailInput.focus();
      }, 50);
    }
  }

  function closeModal() {
    overlay.classList.remove('is-visible');
  }

  function showSuccess() {
    form.classList.add('is-hidden');
    success.classList.add('is-visible');

    // Auto-dismiss after 4 seconds
    setTimeout(closeModal, 4000);
  }

  // ── Intercept the 3 free grid download buttons ──
  var downloadBtns = document.querySelectorAll('.grids-download-btn');

  downloadBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      openModal();
    });
  });

  // ── Submit ─────────────────────────────────────
  submitBtn.addEventListener('click', function () {
    var email = emailInput.value.trim();

    if (!email || !isValidEmail(email)) {
      emailInput.classList.add('has-error');
      errorEl.classList.remove('is-visible');
      // Force reflow for re-trigger
      void errorEl.offsetWidth;
      errorEl.classList.add('is-visible');
      emailInput.focus();
      return;
    }

    // Loading state
    submitBtn.textContent = 'Sending\u2026';
    submitBtn.disabled = true;

    // Subscribe via Kit.com
    fetch('https://app.kit.com/forms/9290976/subscriptions', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
      body: JSON.stringify({ email_address: email })
    })
    .then(function (res) {
      if (!res.ok) throw new Error('Request failed');
      localStorage.setItem('grids_subscribed', '1');
      showSuccess();
    })
    .catch(function () {
      submitBtn.textContent = 'Send me the FREE grids \u2192';
      submitBtn.disabled = false;
      errorEl.textContent = 'Something went wrong. Please try again.';
      errorEl.classList.add('is-visible');
    });
  });

  // ── Clear error on typing ──────────────────────
  emailInput.addEventListener('input', function () {
    emailInput.classList.remove('has-error');
    errorEl.classList.remove('is-visible');
  });

  // ── Enter key submits ──────────────────────────
  emailInput.addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
      submitBtn.click();
    }
  });

  // ── Close: X button ────────────────────────────
  closeBtn.addEventListener('click', closeModal);

  // ── Close: click outside ───────────────────────
  overlay.addEventListener('click', function (e) {
    if (e.target === overlay) closeModal();
  });

  // ── Close: Escape key ──────────────────────────
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && overlay.classList.contains('is-visible')) {
      closeModal();
    }
  });

  // ── Close: click anywhere in success state ─────
  success.addEventListener('click', closeModal);
})();
</script>
