<?php 
get_header(); 
?>




<section class="home row" id="home">
    <div class="author-img-cont width-50">
      <img src="http://localhost:3000/minte-temple-portfolio/wp-content/uploads/2021/11/IMG_6754-1.png" />
    </div>
    <div class="width-50">
      <div class="greeting-message">
          <h1>Hello Guys !</h1>
          <h1 class="intro">I am <span class="emphasy">Minte Temple,</span> I enjoy turning complex problems into simple, beautiful and intuitive interface designs.</h1>
          <div>
            <button class="hirebtn">Hire Me</button>
            <ul class="socials">
                <li class="icon-cont">
                    <a href=""><i class="fab fa-github"></i></a>
                </li>
                <li class="icon-cont">
                    <a href="" ><i class="fab fa-linkedin"></i></a>
                </li>
                <li class="icon-cont">
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
          </div>
      </div>
    </div>
</section>

<!-- ///////////////////////////////////////////////////////////////////////////// -->

<section class="aboutme" id="aboutMe">
      <div class="section-title">
          <h1>About Me</h1>
      </div>

      <div class="section-content">
          <p>I am Minte Temple a web developer who can also stand in as a designer.  I started my career as a designer but fell in love with turning designs into intuitive and beautiful interface. I have over 5 years of experience building web and hybrid application using technologies like React/React Native, NodeJs, Flutter, WordPress and many more. I am relentless and won’t give up on a challenge even if it’s outside my comfort zone. This can-do spirit has afforded me the opportunity to dabble into a wide range of sectors including Frontend, Backend, UI/UX and devOps. </p>
          <p>Currently my goal is to work in a challenging environment that would push me as well work on projects that impact lives. I personally agree on the topic human management is the worst management but somehow, I find myself leading activities, teams, or groups. When I’m not busy I like to spend some time analysing crypto charts to predict the direction of the market. I also enjoy spending time with friends and family as well as binging a TV show.</p>
          <p>I believe what is worth doing is worth doing well, so I do my best to apply the best practices in my work.  In believe in writing clean code to maintain code quality as well as readability. </p>
      </div>
</section>

<section class="skills-section" id="skills">
      <div class="section-title">
          <h1>Skills</h1>
      </div>

      <div class="section-content">
          <div class="section-grid">
          <?php
              $author_query = new WP_Query(
                array(
                  'post_type' => 'skills',
                  'posts_per_page' => '30',
                  'orderby' => 'rand'
                )
              );
            
              if ($author_query -> have_posts() ) :
                while ( $author_query -> have_posts() ) :
                  $author_query -> the_post();
                  get_template_part('template-parts/content-skills');
                endwhile;
              endif;  
              
              ?>
          </div>
      </div>
</section>

<section class="project-section" id="projects">
      <div class="section-title">
          <h1>Projects</h1>
      </div>

      <div class="section-content">
          <div class="section-grid">
          <?php
                  if ( have_posts() ) :
                    while ( have_posts() ) :
                      the_post();
                      get_template_part('template-parts/content');
                    endwhile;
                    else :
                      get_template_part('template-parts/content-none.php');
                  endif; 
              ?>
          </div>
      </div>
</section>

<section class="contact-section" id="contactme">
    <div class="section-title">
        <h1>Contact Me</h1>
    </div>

    <div class="section-content">
        <div class="section-grid">
            <form>
                <div class="row">
                  <input id="" name="name" placeholder="Your Name*" required/>
                  <input id="" name="email" placeholder="Your Email*" required/>
                </div>
                <div class="row">
                  <input id="" name="" placeholder="Subject*" required/>
                </div>
                <div class="row">
                  <textarea  rows="4"   placeholder="Message*" required>
                  </textarea>
                </div>
                <div class="row right">
                  <input value="Submit" id="" name="" placeholder="Subject*" required/>
                </div>
            </form>
        </div>
        <div class="socials-cont">
            <div>
              <h2>I'll be pleased to have a chat with you!</h2>
            </div>
            <div class="contact-option">
              <i class="fas fa-calendar-week"></i>
              <span>Schedule a meeting</span>
            </div>
            <div class="contact-option">
              <i class="fas fa-envelope-open-text"></i>
              <span>Email me</span>
            </div>
            <div class="contact-option">
              <i class="fas fa-phone"></i>
              <span>Call me</span>
            </div class="contact-option">
            <div class="contact-option">
              <ul class="socials">
                <li class="icon-cont">
                    <a href=""><i class="fab fa-github"></i></a>
                </li>
                <li class="icon-cont">
                    <a href="" ><i class="fab fa-linkedin"></i></a>
                </li>
                <li class="icon-cont">
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
        </div>
    </div>
</section>

<a class="scrollcont" href="/minte-temple-portfolio/#home"><i class="fas fa-angle-up"></i></a>


<?php
get_footer();
