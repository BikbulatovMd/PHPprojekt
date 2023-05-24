  <form id="form" action="inc/contact/insert.php" method="post">
    <div class="form-input">
      <label for="name" class="label">Name</label>
      <input type="text" name="contact_name" id="contact_name" placeholder="Name" class="input" />
      <small class="form-error-feedback"></small>
    </div>
    <div class="form-input">
      <label for="email" class="label">E-mail</label>
      <input type="text" name="contact_email" id="contact_email" placeholder="E-mail" class="input" />
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
    <button type="submit" id="form-btn" name="contact_us">Submit</button>
  </form>