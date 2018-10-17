<?php include_once "config.php" ?>
  
  <!DOCTYPE html>
    <html class="no-js" lang="en" dir="ltr">
      <head>
        <?php include_once "template/head.php" ?>
      </head>

      <body>
        <div class="grid-container">
        <?php include_once "template/header.php" ?>
        
        <section class="contact-us-section">
          <div class="row medium-unstack">
            <div class="columns contact-us-section-left">
              <h1 class="contact-us-header">Get In Touch</h1>
              <ul class="contact-us-list">
                <li class="address">100 W Rincon Ave, Campbell CA 95008</li>
                <li class="email"><a href="mailto:">hello@yeticave.com</a></li>
                <li class="phone">
                  1 (408) 445 9978
                </li>
              </ul>
            </div>
            <div class="columns contact-us-section-right">
              <h1 class="contact-us-header">Mail Us</h1>
              <form class="contact-us-form">
                <input type="text" placeholder="Full name">
                <input type="email" placeholder="Email">
                <textarea name="message" id="" rows="12" placeholder="Type your message here"></textarea>
                <div class="contact-us-form-actions">
                  <input type="submit" class="button" value="Send it" />
                  <div>
                    <label for="FileUpload" class="button contact-us-file-button">Attach Files</label>
                    <input type="file" id="FileUpload" class="show-for-sr">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>

        <?php include_once "template/footer.php" ?>
        <?php include_once "template/scripts.php" ?>
      </body>
    </html>