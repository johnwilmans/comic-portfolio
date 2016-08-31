<?php
/*
 *  Template Name: Services Page
 *
 */

get_header();
 ?>



<div class="container comic small-size">
  <?php if(has_nav_menu('about_menu')){
    echo '<div class="row-full">';
   echo '<div class="submenu">';


      $about_menu = wp_nav_menu( array(
        'theme_location'		=>	'about_menu',
        'echo'							=>	false,
        'menu_id'						=>	'about-navbar',
        'menu_class'				=>	'sub-menu',
        'before'						=>	'',
        'after'							=>	'',
        'container'					=>	'div',
        'container_id'			=>	'sub_parent',
        'container_class'		=>	'sub_menus',
      ));
      echo $about_menu;
      echo '</div><!-- submenu -->';
    echo '</div><!-- row -->';

  }; ?>
  <div class="row-full">



    <div class="left-sidebar sidebar contact-panel">
      <div>
        <ul class="us">
          <li><a href="#" id="whatwedo" class="findme">What we do</a></li>

              <li><a href="#" id="wordpress" class="findme">WordPress</a></li>
              <li><a href="#" id="responsive" class="findme">Responsive Websites</a></li>
              <li><a href="#" id="webapp" class="findme">Web Apps</a></li>
              <li><a href="#" id="coding" class="findme">Coding Standards</a></li>

            <li><a href="#" id="design" class="findme">Web Design</a>

              <li><a href="#" id="frontend" class="findme">Front End Development</a></li>
              <li><a href="#" id="backend" class="findme">Back End Development</a></li>

          </li>
          <li><a href="#" id="process" class="findme">Our Process</a></li>
          
        </ul>
        <a href="http://www.yellow-rocket.com/contact/"><input class="btn btn-default btn-block form-btn" type="button" value="HIRE US" /></a>
      </div>


  </div><!--col-sm-3 left-sidebar sidebar -->
  <div class="services contact-panel about landing">
<div class="gradient-box">
  <div >
    <p >
      <span class="red">T</span>he Dynamic Duo wonder what all the fuss about the new kid on the Web Development block is...
    </p>
  </div>
</div><!-- grasdient box-->
  <img src="http://www.yellow-rocket.com/wp-content/uploads/2016/07/batman-robin.png" id="batman"/>
  <div >
    <p class="bubble robin">
      Holy info Batman...They actually want to know about Yellow Rocket!!
    </p>
  </div>
  <div >
    <p class="bubble batman">
      Of course Boy Wonder..They want good work and customer care.  Tell them to click on the links on the left!
    </pclass>
  </div>
  </div>
  <div class="services contact-panel whatwedo about">

    <div class="services-blurb" >
      <h2>We build websites</h2>
      <p>
        That's easy.  We design and build websites.  We are web developers.  Kindof.  Mostly.
      </p>
      <p>
        We design simple websites that act as a brochure or business card online.
      </p>
      <p>
        We build functional sites that do stuff, like shopping, or getting info from the web.
      </p>
      <p>
        We build blogging platforms, forums, chats or other interactive sites.
      </p>
      <p>
        We provide hosting for our clients on our Eco Friendly servers based in the UK.
      </p>
      <p>
        We specialise in small upcoming businesses. We are one and we want to help yours be successful.
      </p>
    </div><!-- whatwedo -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel wordpress about">
    <div class="services-blurb" >
      <h2>WordPress</h2>
      <p>
        WordPress is a powerful Content Management System (CMS) that powers more than 25% of the websites currently live. We use WordPress if necessary to integrate your Blogging platform, E-commerce and Databases. We take currently stable themes and customise them to your individual needs. We also build WordPress sites from scratch based on your design. This way we maintain the ability to keep your site secure with regular updates whilst still keeping your site unique.
      </p>

      <p>
        We also build and sell WordPress themes via our Ecommerce store(coming soon), as well as writing Blogs, and how to videos on WordPress.
      </p>

      <p>
        We absolutely love WordPress and we build the majority of our sites in it.  But don't worry if it's more than you currently need.  We can still build you a static site, and should the need arise convert it to a fully interactive WordPress theme at a later date.
      </p>
    </div><!-- WordPress -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel responsive about">
    <div class="services-blurb" >
      <h2>Responsive Websites</h2>
      <p>
        With more and more people accessing the internet via SmartPhones and Tablets it is essential to enable people to view your site correctly on these devices. We build to a strategy called 'Mobile First' which means we build for the phone view first, adding elements and interaction as required until we reach the full desktop version. This ensures we try keep data transfer over cell networks to a minimum and ensure the individual features needed for each device are available to you.
      </p>
    </div><!-- Responsive -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel webapp about">
    <div class="services-blurb" >
      <h2>Web Apps</h2>
      <p>
        These powerful sites are the future of Web Development.  Websites are moving beyond the online brochure type sites we have been seeing for years.  Now let's use your site to actually do stuff. How about letting customers book your services online? A web app can do that. Pay you? A web app can do that. Host online chats with your clients? Yip. A web app can do that. How about search your online store, find all of the blue widgets from ACME industries and have them sent to an address in Kabul, whilst having the invoice automatically generated and emailed to the client and the money deposited into your bank account and your book keeping software updated? Yip. It can do that too. I hope you're getting the picture.
      </p>
    </div><!-- webapp -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel coding about">
    <div class="services-blurb">
      <h2>Coding Standards</h2>
      <p>
        We like things done right. So we subscribe to a number of coding standards. We follow the advice of the W3C to ensure we build sites right the first time.
      </p>
      <p>
        We use the guidance from W3Schools for out HTML5, CSS3, JavaScript, PHP and MySql and Bootstrap coding standards, and the WordPress Codex for our WordPress coding.
      </p>
      <p>
        All of this will hopefully set your mind at ease with regards the quality of our code enabling you to hand our code over to your inhouse developers or another developer should the need arise.
      </p>
    </div><!-- coding -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel design about">
    <div class="services-blurb">
      <h2>Web Design</h2>
      <p>
        Web Design is a beautiful process of discovery, science and creativity. It is not just how the site looks. It is how users interact with it, what it does, how it looks, yes, and what features you need it to possess. All rolled up into a package that is both effective in the tasks it needs to perform and in it's size and footprint.
      </p>
      <p>
        Two businesses selling bat-mobiles, for example, will have two very different looking and acting sites. It all depends on their customer base, who they want to sell to, where they are and more. Let us work with you to create the site you need to build your business and help you thrive in the online market.
      </p>
    </div><!-- design -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel frontend about">
    <div class="services-blurb">
      <h2>Front End Development</h2>
      <p>
        Front End Development is what you see on your browser when you visit a site. We use a variety of languages like HTML, CSS, JavaScript, jQuery and more to bring you beautiful sites that do amazing things. Many developers specialise entirely in Front End Development. As for us? We want to be your one stop shop so we build the front and back end for you.
      </p>
      <div class="row">
            <div class="services-blurb-half frontend-bits">
                <h2>HTML/CSS</h2>
                <p>We work to the latest standards of HTML5 and CSS3.  This ensure you get the most robust code that allows us to make your sites, responsive, interactive and able to wow your clients.</p>
                <p><i class="fa fa-html5 fa-3x tumbleweed"></i></p>
                <br />
                <p class="last">Something like that.  Impressive no?</p>

                </div>
                <div class="services-blurb-half frontend-bits">
                <h2>JavaScript/jQuery</h2>
                    <p>We use JavaScript and jQuery to give the site a lot more interaction.  It's the little things that make your site unforgettable.</p>
                     <input class="btn" type="button" value="Click me!" id="play">
                     <div id="surprise">
                       <p>
                         Admit it...you're impressed right.
                       </p>
                     </div>

                </div>



            </div>
    </div><!-- process -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel backend about">
    <div class="services-blurb" >
      <h2>Back End Development</h2>
      <p>
        Back End Development is what makes your site functional. This could be accessing Data from a Database for an Ecommerce site, or a forum. It could be scraping data from another website to display or yours. It could be a chat system to allow your employees the ability to chat amongst themselves(because lets face it, who wants to talk face to face now days?)
      </p>
      <p>


The Back end is what turns a simple website into a web app, and this is where technology can really help your business.
      </p>
    </div><!-- process -->
  </div><!-- col-sm-9 contact-panel-->

  <div class="services contact-panel process about">
    <div class="services-blurb" >
      <h2>Our Process</h2>

      <div class="row-full">

                          <div class="services-blurb-quarter">
                     <h2>Research</h2>
                              <p>Research can make or break a design. We need to understand your business, your customers, your goals before we can solve the problems you may have.  </p>
                     </div>

                        <div class="services-blurb-quarter">
                     <h2>Strategy</h2>
                            <p>If research is the thinking, strategy is the plan of attack. Again, we work very closely with you in this respect. We determine what each page is trying to accomplish, the content you need to put in it, how you navigate your site and much more to ensure you get that site you need.</p>
                     </div>

                     <div class="services-blurb-quarter">
                     <h2>Wireframes and initial design</h2>
                         <p>This is where the pen meets the paper so to speak. We design a bare wireframe site to get the layout of the site right. Once you are happy with that, we build the initial design. We want you to be happy with the content, images and look before we progress.</p>
                     </div>
                   </div >
                   <div class="clear-float"></div>
                     <div class="row-full">

                     <div class="services-blurb-quarter">
                     <h2>Mockups</h2>
                         <p>Now we are talking! At the mockup stage you have a mostly functional website. Things should work and you will start to get a feel for the site.  This is where we know we are getting close!</p>
                     </div>

                     <div class="services-blurb-quarter">
                     <h2>Testing</h2>
                         <p>There is nothing worse than a site that does quirky things. We post your site onto our test domains and invite you to give it a go. We want you to try and break it so when it goes live no one else can.</p>
                     </div>

                     <div class="services-blurb-quarter">
                     <h2>Hosting</h2>
                         <p>Once we are ready to go live, we can put your site on our secure, servers, or post it up elsewhere. Our servers are reliable, their carbon footprint is offset by planting trees, effectively making us carbon neutral, and they are secure. We backup your site and keep it safe should the unforeseen happen.</p>
                     </div>
                   </div>
                   <div class="clear-float"></div>
                         <div class="row-full">
                     <div class="services-blurb-quarter">
                     <h2>Go live</h2>
                         <p>We are ready to go! We hand over the keys and our baby is now yours. But don't worry, we won't leave you hanging. We offer support and will always be there for you should you have any problems.</p>
                     </div>



                   </div>
                   <div class="clear-float"></div>

    </div><!-- process -->
  </div><!-- col-sm-9 contact-panel-->


        </div><!-- row-->
          </div><!-- container comic-->

    <?php get_footer(); ?>
