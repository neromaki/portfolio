<!DOCTYPE html>
<html lang="en">
    <?php include_once('includes/head.inc.php') ?>

  <body>

    <?php include_once('includes/header.inc.php') ?>

    <?php
    // 'body'  => '<h4>Project</h4><p>Website for Pets At Home\'s animal adoption charity. Site scope was to make it easier to connect potential adopters with charities rehoming animals, via an animal/breed map searching function.</p><h4>Contribution</h4>Built the front-end templating for most of the site, using Bootstrap, jQuery and LESS-preprocessed CSS.</p>',
    $projects = array( (object) array( 'title' => "Support Adoption For Pets",
                                        'image' => "support-adoption-for-pets.jpg",
                                        'url'   => "https://www.supportadoptionforpets.co.uk/",
                                        'tags'  => array('front-end'),
                                        'body'  => '<p>Website for Pets At Home\'s animal adoption charity. Site scope was to make it easier to connect potential adopters with charities rehoming animals, via an animal/breed map searching function. Built the front-end templating for most of the site, using Bootstrap, jQuery and LESS-preprocessed CSS.</p>',
                                        'skills' => array( "Front-end", "jQuery", "LESS" )
                                      ),
                       (object) array( 'title' => "Hitachi",
                                        'image' => "hitachi.jpg",
                                        'url'   => "http://uk.hitachidigitalmedia.com/",
                                        'tags'  => array('front-end', 'angularjs'),
                                        'body'  => '<p>Utilised Grunt for building, Bower for dependencies and Angular for interactive segments, I collaborated with the studio\'s other front-end developer
                                                    to plan and develop a reusable and extensible component system for Hitachi\'s templating.</p>',
                                        'skills' => array( "AngularJS", "LESS" )
                                      ),
                        (object) array( 'title' => "NHS Smokefree Norfolk",
                                         'image' => "smokefree-norfolk.jpg",
                                         'url'   => "http://smokefreenorfolk.nhs.uk/",
                                         'tags'  => array('front-end', 'wordpress'),
                                         'body'  => '<p>Used Wordpress and UIKit for the NHS, along with a Composer-based plugin management system.</p>',
                                          'skills' => array( "jQuery", "SASS", "Wordpress", "Gulp" )
                                       ),
                       (object) array( 'title' => "Orphancare",
                                        'image' => "orphancare.jpg",
                                        'url'   => "http://orphancare.org.my/",
                                        'tags'  => array('front-end', 'wordpress', 'freelance'),
                                        'body'  => "<p>Freelance project for a Malaysian-based design studio, revamping the website of a Malaysian orphan charity. A particular focus was taken on the UX and design to ensure relevant information was as easy to find as possible.</p>",
                                        'skills' => array( "Wordpress", "Project management", "Needs requirements" )
                                      ),
                         (object) array( 'title' => "Selesti",
                                          'image' => "selesti.jpg",
                                          'url'   => "https://selesti.com",
                                          'tags'  => array('front-end', 'back-end'),
                                          'body'  => '<p>Built the majority of the front-end in UIKit as a base framework and Grunt for build tasks. As this was the studio\'s own website,
                                                      development had a particular focus on speed and optimisation.</p>',
                                          'skills' => array( "UIKit", "jQuery", "SASS", "Grunt" )
                                        ),
                          (object) array( 'title' => "Gadget Cover",
                                           'image' => "gadget-cover.jpg",
                                           'url'   => "https://www.gadget-cover.com/",
                                           'tags'  => array('front-end', 'back-end'),
                                           'body'  => '<p>This project required managing small team, scoping and assigning tasks, managing deadlines and teaching.</p><p>This used Selesti\'s version of the Kohana PHP framework, and front-end templating.</p>',
                                           'skills' => array( "Bootstrap", "jQuery", "LESS" )
                                         ),
                          (object) array( 'title' => "Indigo Swan",
                                          'image' => "indigo-swan.jpg",
                                          'url'   => "http://indigoswan.co.uk/",
                                          'tags'  => array('front-end', 'wordpress'),
                                          'body'  => '<p>A Wordpress site for a local energy broker, the project involved coordinating with their in-house designer and had a heavy focus on fine details and micro-interactions.</p>',
                                          'skills' => array( "Angular", "SASS", "Wordpress", "Composer" )
                                        ),
                        (object) array( 'title' => "Norfolk County Council",
                                         'image' => "norfolk-county-council.jpg",
                                         'url'   => "https://web.archive.org/web/20150718184810/http://www.norfolk.gov.uk/",
                                         'tags'  => array('front-end'),
                                         'body'  => '<p>Built templates for NCC to use across their site; due to this being a government project, it was essential that it was built with accessibility at
                                                      the fore-front, emphasising colour contrasts, ARIA and proper markup for screenreaders.</p>',
                                          'skills' => array( "HTML5", "LESS" )
                                       ),
                         (object) array( 'title' => "Nelsons Journey",
                                          'image' => "nelsons-journey.jpg",
                                          'url'   => "https://itunes.apple.com/gb/app/smiles-tears/id965830012?mt=8",
                                          'tags'  => array('ios app', 'api'),
                                          'body'  => '<p>Utilised <a href="https://www.appcelerator.com/titanium/7/" target="_blank">Appcelerator\'s Titanium</a>
                                                      with other members of the team to develop this iOS app, as well as Kohana to develop a back-end API to interface with.</p>',
                                          'skills' => array( "Javascript", "Titanium", "Kohana PHP" )
                                        ),
                          (object) array( 'title' => "Fytfit",
                                          'image' => "fytfit.jpg",
                                          'url'   => "https://fytfit.com",
                                          'tags'  => array('front-end', 'wordpress'),
                                          'body'  => '<p>A marketing site for the FytFit app, this was built solo using Wordpress with a focus on colour, animation and design.</p>',
                                          'skills' => array("SASS", "Gulp", "Wordpress" )
                                        ),
                          (object) array( 'title' => "Gamko",
                                           'image' => "gamko.jpg",
                                           'url'   => "http://www.gamko.com/en-gb",
                                           'tags'  => array('front-end', 'back-end'),
                                           'body'  => '<p>A full-stack build which involved writing all the back-end logic for product organisation, management and account resources; as well as templating front-end via PSD designs.</p>',
                                           'skills' => array( "Kohana PHP", "LESS" )
                                         ),
                          (object) array( 'title' => "Avery Berkel",
                                           'image' => "avery-berkel.jpg",
                                           'url'   => "http://www.averyberkel.com/en-gb",
                                           'tags'  => array('front-end', 'back-end'),
                                           'body'  => '<p>A sister-company of Gamko, this was the precursor full-stack project which Gamko was built and modified on top of. Required a lot more focus on PHP back-end than the prior.</p>',
                                           'skills' => array( "Kohana PHP", "LESS" )
                                         ),
                          (object) array( 'title' => "QMS",
                                           'image' => "qms.jpg",
                                           'url'   => "https://www.qmsuk.com/",
                                           'tags'  => array('front-end', 'wordpress'),
                                           'body'  => '<p>Refresh of QMS\' original non-responsive site, this was built in Wordpress with a decent focus on Angular and more in-depth Wordpress theme functionality development.</p>',
                                           'skills' => array( "AngularJS", "Wordpress" )
                                         ),
                    );


        $personal = array((object) array( 'title' => "Big Boss Battle",
                                        'image' => "bigbossbattle.jpg",
                                        'url'   => "https://bigbossbattle.com",
                                        'tags'  => array('wordpress'),
                                        'body'  => '<p>Taken on position of CTO, primarily ensuring the website remains reachable via managing it\'s AWS EC2 instance and CloudFlare. Also heading digital marketing via content and advertisement campaigns, enforcing SEO guidelines and monitoring performance.</p>',
                                        'skills' => array( "SEO", "Digital Marketing", "Server management", "Business Development", "WordPress" )
                                      ),
                                  (object) array( 'title' => "ParkBot",
                                          'image' => "parkbot.jpg",
                                          'url'   => "https://parkbot.co.uk/",
                                          'tags'  => array('vue', 'laravel'),
                                          'body'  => '<p>Frustrated at driving into the city only to spend 10 minutes driving around the various car parks looking for one with space,
                                                      I built a carpark data app using the Norfolk Council\'s DATEX XML feed so everyone can which carparks had spaces.</p>',
                                          'skills' => array( "VueJS", "Laravel", "SASS" )
                                        ),
                                  (object) array( 'title' => "phonetic",
                                          'image' => "phonetic.jpg",
                                          'url'   => "https://neromaki.github.com/phonetic",
                                          'tags'  => array('vue'),
                                          'body'  => '<p>Having trouble with spelling phonetically over the phone, I made a Vue app to convert text to phonetics and step through the results so you don\'t lose your place.</p>',
                                          'skills' => array( "VueJS" ),
                                          'repo' => "https://bitbucket.org/Neromaki/phonetic",
                                        ),
                                    (object) array( 'title' => "pomodoro",
                                            'image' => "pomodoro.jpg",
                                            'url'   => "https://neromaki.github.com/pomodoro",
                                            'tags'  => array('vue'),
                                            'body'  => '<p>Finding existing pomodoro timer apps to be a bit naff, I made my own in Vue.</p>',
                                            'skills' => array( "VueJS" ),
                                            'repo' => "https://bitbucket.org/Neromaki/pomodoro",
                                          ),
                        );

$games = array((object) array( 'title' => "Penguin Deliveries",
                                'image' => "penguin-deliveries.jpg",
                                'url'   => "https://nomaki.itch.io/penguin-deliveries",
                                'tags'  => array('game', 'unity'),
                                'body'  => '<p>Built a Lundar Lander style game for Ludum Dare, now building it out into a full-sized game to release. Showcasing at Norwich Gaming Festival in 2018.</p>',
                                'skills' => array( "Unity", "Game design", "Making not-terrible art" )
                            ),
                (object) array( 'title' => "Ah Crap, Asteroid Field!",
                                'image' => "ah-crap-asteroid-field.jpg",
                                'url'   => "https://nomaki.itch.io/ah-crap-asteroid-field",
                                'tags'  => array('game', 'gamemaker studio'),
                                'body'  => '<p>Infinite runner in which you have to avoid increasing densities of asteroids to land on the scoreboard. Made in Gamemaker Studio in 7 hours.</p>',
                                'skills' => array( "Gamemaker Studio", "Game design" ),
                                'repo' => "https://bitbucket.org/Neromaki/ah-crap-asteroid-field",
                            ),
              (object) array( 'title' => "Tickets Please",
                              'image' => "tickets-please.jpg",
                              'url'   => "https://nomaki.itch.io/tickets-please",
                              'tags'  => array('game', 'unity'),
                              'body'  => '<p>A fast-paced locomotion document checking thriller. An incomplete entry into Ludum Dare 40 made in Unity, in which you can fall through the floor as an Unintentional Feature.</p>',
                              'skills' => array( "Unity", "Game design", "Making not-terrible art" ),
                              'repo' => "https://bitbucket.org/Neromaki/tickets-please",
                          ),
                        (object) array( 'title' => "COMBAT",
                                'image' => "combat.jpg",
                                'url'   => "http://combat.rpff.co.uk",
                                'tags'  => array('JS'),
                                'body'  => '<p>First game I made in JS, using DOM elements instead of canvas. The source code is wonderfully embarassing.</p>',
                                'skills' => array( "Native JS", "Game design" ),
                                'repo' => "https://bitbucket.org/Neromaki/combat",
                              ),
                        (object) array( 'title' => "PAWS!",
                                'image' => "paws.jpg",
                                'url'   => "http://paws.rpff.co.uk",
                                'tags'  => array('JS'),
                                'body'  => '<p>First attempt at making a game using Canvas, game loops and sprite animation rendering. Fun fact: the ball of yarn was originally red, accidentally looking like entrails. User testing is great.</p>',
                                'skills' => array( "Native JS", "Game design", "Basic engine creation" ),
                                'repo' => "https://bitbucket.org/Neromaki/paws"
                              ),
                          );
        ?>

    <main>
        <section>
          <div>
              <div class="hero">
                  <div class="hero__overlay">
                    <div class="uk-container uk-container-center">
                      <p class="hero__header uk-text-center">Hello!</p>
                      <p class="uk-text-large uk-text-center">I'm a Norwich-based developer who throws his time around creating:</p>

                      <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-flex-center uk-grid-margin uk-grid-match" uk-grid>
                        <div>
                          <div class="uk-card uk-card-default uk-card-body hero__card">
                              <i class="fa fa-code" aria-hidden="true"></i>
                              <h3 class="uk-card-title">Websites</h3>
                              <p>Personal, e-commercial, brochure and static: I can build whatever you want, to suit your needs. Familiar with high-quality development practices, such as: automated testing, deployment, build tools and continuous integration.</p>
                              <p>Check out the previous <a href="#projects">projects</a> I've worked on for a variety of high-profile names, and <a href="mailto:shaunlewiswall@gmail.com">get in touch</a>.</p>
                          </div>
                        </div>
                        <div>
                          <div class="uk-card uk-card-default uk-card-body hero__card">
                              <i class="fa fa-code-fork" aria-hidden="true"></i>
                              <h3 class="uk-card-title">Web apps</h3>
                              <p>I have a wealth of experience building web apps and tools; for internal business-use, solving problems and just for fun. I can plan, prototype, test and develop your idea into a reality.</p>
                              <p>Have a gander at my <a href="#personal">personal projects</a> to get an idea of what I can offer you, and <a href="mailto:shaunlewiswall@gmail.com">drop me a line</a> to talk through your ideas.</p>
                          </div>
                        </div>
                        <div>
                          <div class="uk-card uk-card-default uk-card-body hero__card">
                              <i class="fa fa-gamepad" aria-hidden="true"></i>
                              <h3 class="uk-card-title">Games</h3>
                              <p>Amongst my various projects, I enter jams and build games in my spare time; mostly for fun, with the dream of entering the games industry full time.</p>
                              <p>I have experience in Unity for all-purpose, and PhaserJS for HTML5 web games, suitable for businesses or small projects. Check out the <a href="#games">games I've built</a>!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </section>

        <section id="skills" class="uk-section section--skills uk-padding-remove">
            <div class="uk-container uk-container-center">
              <h2>Skills</h2>

              <div class="uk-grid-divider uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-margin" uk-grid>
                <div>
                  <h3>Front-end</h3>
                  <ul>
                    <li>HTML5 & CSS3</li>
                    <li>LESS & SASS</li>
                    <li>Bootstrap, Foundation, UIKit & more</li>
                    <li>JS ES2017, VueJS, jQuery</li>
                  </ul>
                </div>

                <div>
                  <h3>Back-end</h3>
                  <ul>
                    <li>PHP 5.3 - 7.1+, Laravel, Wordpress</li>
                    <li>Dev-ops (inc. familiarity with AWS, DO, Forge)</li>
                  </ul>
                </div>

                <div>
                  <h3>Build</h3>
                  <ul>
                    <li>Webpack, Yarn, Gulp</li>
                    <li>Composer, npm</li>
                    <li>Coding standards adherence, linting, automated testing</li>
                    <li>Git, automated deployment, continuous integration</li>
                  </ul>
                </div>

                <div>
                  <h3>Process</h3>
                  <ul>
                    <li>Briefing, scoping, project management, debrief reporting</li>
                    <li>Agile / SCRUM methodologies</li>
                    <li>Testing, validation, integration</li>
                    <li>Accessibility (AA+ WAI, use of Aria)</li>
                  </ul>
                </div>

              </div>
            </div>
        </section>

        <section id="projects" class="uk-section section--projects uk-padding-remove">
            <div class="uk-container uk-container-center">

                <h2>Projects</h2>

                  <p class="uk-text-large section--lead">Work I have carried out during my professional career, either through agencies or freelance.</p>

                <div class="uk-grid-match uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid uk-height-match="target: .uk-card-body">
                  <?php foreach($projects as $project) { ?>
                  <div>
                    <?php include('components/project-card.php') ?>
                  </div>
                  <?php } ?>

                </div>
            </div>
        </section>

        <hr>

        <section id="personal" class="uk-section section--projects uk-padding-remove">
            <div class="uk-container uk-container-center">

                <h2>Personal projects</h2>

                  <p class="uk-text-large section--lead">Side projects I have been developing in my spare time.</p>

                <div class="uk-grid-match uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid uk-height-match="target: .uk-card-body">
                  <?php foreach($personal as $project) { ?>
                  <div>
                    <?php include('components/project-card.php') ?>
                  </div>
                  <?php } ?>

                </div>
            </div>
        </section>

        <hr>

        <section id="games" class="uk-section section--projects uk-padding-remove">
            <div class="uk-container uk-container-center">

                <h2>Games</h2>

                  <p class="uk-text-large section--lead">Games and gaming-related things I've worked on.</p>

                <div class="uk-grid-match uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid uk-height-match="target: .uk-card-body">
                  <?php foreach($games as $project) { ?>
                  <div>
                    <?php include('components/project-card.php') ?>
                  </div>
                  <?php } ?>

                </div>
            </div>
        </section>


        <section id="cv" class="uk-section section--cv uk-padding-remove">
            <div class="uk-container uk-container-center">

                <h2>CV</h2>

                <div class="uk-width-child-1-2@m uk-grid-margin" uk-grid>

                  <section>
                    <h3>Employment</h3>

                    <h4>Content Discovered Ltd</h4>
                    <span>April 2017 - Present</span>
                    <p>Full-stack web developer</p>
                    <ul>
                      <li>Creating internal web apps to improve company processes and efficiency</li>
                      <li>Maintaining and extending existing Wordpress builds</li>
                    </ul>

                    <h4>Big Boss Battle</h4>
                    <span>December 2017 - Present</span>
                    <p>Chief Technology Officer</p>
                    <ul>
                      <li>Managing server performance and load balancing via AWS EC2</li>
                      <li>Business development and brand building, creating internal processes and systems</li>
                      <li>SEO and digital marketing via social media and AdWord campaigns to promote the site</li>
                      <li>Mantaining and improving the site's Wordpress build</li>
                      <li>Actually writing game reviews and news</li>
                    </ul>

                    <h4>Freelance</h4>
                    <span>September 2016 - April 2017</span>
                    <p>Freelance web developer</p>
                    <ul>
                      <li>Scoping, timescaling and quoting projects for clients</li>
                      <li>Developing Wordpress builds, front and back ends</li>
                    </ul>

                    <h4>Selesti Ltd</h4>
                    <span>March 2014 - September 2016</span>
                    <p>Front-end web developer</p>
                    <ul>
                      <li>Develop both front-end and PHP back-end of projects</li>
                      <li>Scope and timescale projects, both solo and in a team</li>
                      <li>Liase with various departments of studio (client, search) during project cycle</li>
                      <li>Research, test and implement practises and tech into the studio's workflow</li>
                    </ul>
                    <p>Reference: <strong>Ollie Blackmore, CEO</strong>, or <strong>Jamie Cotton, Chief Technology Officer</strong> (<a href="https://www.selesti.com/contact">contact</a>)

                    <h4>Digital Select Ltd</h4>
                    <span>March 2013 - March 2014</span>
                    <p>Software Engineer</p>
                    <ul>
                      <li>Develop both front-end and PHP back-end of projects</li>
                      <li>Work with Asterix and PHP developer to design and develop both internal and public-facing business tools</li>
                    </ul>
                    <p>Reference: <strong>Shaun Freeman, CEO</strong> (<a href="http://www.digitalselect-uk.com/Contact">contact</a>)
                  </section>


                  <section>
                    <h3>Education</h3>

                    <h4>University of Bradford</h4>
                    <span>Sept 2007 - July 2010</span>
                    <p>BSc Computer Science - First Class Honours</p>
                    <ul>
                      <li>Web Engineering</li>
                      <li>Web Technologies</li>
                      <li>Software Engineering</li>
                      <li>GUI Development</li>
                    </ul>

                    <h4>Wensum Sixth Form</h4>
                    <span>Sept 2005 - July 2007</span>
                    <p>A Levels:</p>
                    <ul>
                      <li>Biology: C</li>
                      <li>Chemistry: D</li>
                      <li>Psychology: E</li>
                    </ul>

                    <h4>Hellesdon High School</h4>
                    <span>Sept 2000 - July 2005</span>
                    <ul>
                      <li>8 GSCE passes at grades A-C</li>
                    </ul>
                  </section>

              </div>

            </div>
        </section>
    </main>

    <?php include_once('includes/footer.inc.php') ?>

  </body>
</html>
