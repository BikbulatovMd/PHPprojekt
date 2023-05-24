  <?php
  include('partials/header.php');
  ?>

  <main class="d-flex align-items-center justify-content-center">
    <section class="container mt-3 pb-3" id="contact-form">
      <h3 class="text-center">Feedback Form</h3>
      <!-- Form -->
      <form id="form">
        <div class="form-input">
          <label for="name" class="label">Name</label>
          <input type="text" name="name" id="name" placeholder="Name" class="input" />
          <small class="form-error-feedback"></small>
        </div>
        <div class="form-input">
          <label for="email" class="label">E-mail</label>
          <input type="text" name="email" id="email" placeholder="E-mail" class="input" />
          <small class="form-error-feedback"></small>
        </div>
        <div class="form-input">
          <label for="text" class="label">Your comment on the project</label>
          <textarea name="text" id="text" placeholder="Your comments" rows="5" class="input textarea"></textarea>
          <small class="form-error-feedback"></small>
        </div>
        <div class="form-input checkbox-input">
          <input type="checkbox" id="check" class="checkbox" />
          <label for="check" class="label">Consent to the processing of personal data</label>
          <small class="form-error-feedback"></small>
        </div>
        <button type="submit" id="form-btn">Submit</button>
      </form>
    </section>
  </main>
  <?php
  include('partials/footer.php');
  ?>