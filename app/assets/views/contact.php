<!-- Contact -->
<section class="contact">
  <div class="container">
    <h1>contact</h1>
    
    
    <div class="row">
      <div class="contact__info col-lg-3 col-md-4">
        <img src="assets/img/avatar.jpg" alt="Aaron Kenny">
        <h2>aaron kenny<br><span>(owner)</span></h2>
        <p>951.642.9117</p>
        <p>aaron@akmarketingsolutions.com</p>
      </div>

      <div class="contact__form col-md-8 col-lg-offset-1" ng-controller="contactFormCtrl">
        <ul>
          <li><a href="" id="form1Btn" class="formBtn-active">contact me</a></li>
          <li><a href="" id="form2Btn" class="formBtn-inactive">hire me</a></li>
        </ul>
        <!-- Contact Form 'Contact Me' -->
        <form id="form1" method="post" action="assets/php/contact__form.php" name="contactForm">
          <div class="contact__form--text">
            <input type="text" name="contactName" placeholder="Your Name" id="contactName"><br>
            <input type="email" name="contactEmail" placeholder="Your Email" id="contactEmail"><br>
            <textarea id="messageContent" name="messageContent" placeholder="Type Your Message Here"></textarea>
          </div>
          <input type="submit" name="submit" value="submit">
        </form>
        <!-- Contact Form 'Hire Me' -->
        <form  id="form2" method="post" action="assets/php/contact__form2.php" name="contactForm">
          <div class="contact__form--text">
            <input type="text" name="contactName" placeholder="Your Name" id="contactName2">
            <input type="email" name="contactEmail" placeholder="Your Email" id="contactEmail2"><br>
            <input type="text" name="contactWebsite" placeholder="Your Website" id="contactWebsite">
            <input type="text" name="projectBudget" placeholder="Project Budget" id="projectBudget">
            <textarea id="messageContent2" name="messageContent" placeholder="Type Your Message Here"></textarea>
          </div>
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
    </div>
    
  </div>
</section>