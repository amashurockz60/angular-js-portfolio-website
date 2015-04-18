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
        <form  id="form2" method="post" action="assets/php/contact__form.php" name="contactForm">
          <div class="contact__form--text">
            <input type="text" name="contactName" placeholder="Your Name" id="contactName">
            <input type="email" name="contactEmail" placeholder="Your Email" id="contactEmail"><br>
            <input type="text" name="contactWebsite" placeholder="Your Website" id="contactWebsite">
            <select name="projectScope" id="projectScope">
              <option disabled selected value="">Select Project Category</option>
              <option value="web">Web Design &amp; Development</option>
              <option value="print">Marketing Materials</option>
              <option value="seo">SEO &amp; Online Marketing</option>
              <option value="consult">Business Consulting</option>
            </select><br>
            <input type="text" name="projectBudget" placeholder="Project Budget" id="projectBudget">
            <select name="projectTime" id="projectTime">
              <option disabled selected value="">Select Project Timeline</option>
              <option value="no timeline">No Timeline</option>
              <option value="2 weeks">2 Weeks</option>
              <option value="1 month">1 Month</option>
              <option value="1-6 months">1-6 Months</option>
            </select><br>
            <textarea id="messageContent" name="messageContent" placeholder="Type Your Message Here"></textarea>
          </div>
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
    </div>
    
  </div>
</section>