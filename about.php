<?php
  $title       = 'About Me | Robot2';
  $description = 'I\'m Simon Nonnis, a frontend developer. Robot2 is my tiny website where I talk about me and my most relevant work.';
?>


<?php include("partials/head.php"); ?>

  <?php include("partials/navigation.php"); ?>


    <section role="main" class="about-section clearfix">
      <div class="big-img">
        <img alt="Mountain-view" src="img/about/about.png" />
      </div>
      <article class="clearfix">
        <div class="wrapper content">
          <h2>About Robot2</h2>
          <p>I'm Simon Nonnis, a frontend developer. Robot2 is my tiny website where
             I talk about me and my most relevant work.
          </p>
          <p>I've been building websites from 2009, freelancing until 2013 when I felt the need to work in a totally different environment and joined
             the <a href="http://www.ignitehospitality.com/about/" target="_blank">Ignite Team</a>.
             I've worked there for 2 years, learning to build mobile first, responsive websites with wordpress in the back-end.
             I was never a fan of frameworks and premium themes so I've built from scratch
             my own WP theme, <a href="https://github.com/SimoNonnis/ZeroWpTheme" target="_blank" >ZeroWPTheme</a>, that was quickly adopted as
             a foundation for every new project.
          </p>

          <p>I gained an extensive experience on simplifying the process to collaborate
             with UX designers and project managers to deliver stable, fast and high quality websites.
          </p>

          <p>Below you can see a short list of languages, tools, softwares that I love to work with.</p>
        </div>

        <div class="focused focused-code clearfix">
          <h2>Skill Set</h2>
          <div class="focused-wrapper clearfix">
          <ul class="focused-list">
            <li>Html</li>
            <li>CSS, SCSS, BEM</li>
            <li>Javascript</li>
            <li>Gulp, npm scripts</li>
            <li>D3js, Leafletjs</li>
          </ul>
          <ul class="focused-list">
            <li>Wordpress</li>
            <li>React</li>
            <li>RxJs</li>
            <li>CycleJs</li>
            <li>NodeJs</li>
          </ul>
          <ul class="focused-list">
            <li>GraphQL</li>
            <li>Sql</li>
            <li>MongoDB</li>
            <li>Falcor</li>
            <li>Php</li>
          </ul>
          </div>
        </div>
        <div class="wrapper content">
          <p>In mid 2015 I felt the need to take a break and dedicate myself to learn Javascript in deep.
             My goal is to be able to join a team where Javascript is at the forefront on a daily basis.
             I am not at an expert level but when it comes to coding if you really enjoy it you’ll always keep progressing.
          </p>
          <p>"You don’t know JS" book series by
             <a href="https://twitter.com/getify" target="_blank">Kyle Simpson</a>
             are a fundamental resource into my learning process.
             All the books are free to read on <a href="https://github.com/getify/You-Dont-Know-JS" target="_blank">Github</a>!
             I’ve bought the books <a href="http://www.amazon.com/s/ref=nb_sb_ss_c_0_18?url=search-alias%3Dstripbooks&amp;field-keywords=you+don%27t+know+javascript&amp;sprefix=you+don%27t+know+javascript%2Caps%2C204" target="_blank">hardcopies</a>,
             because frequently I need to go back to some chapter and concept, so I have them for offline reading.
          </p>
          <p>During this time, I had a look at js frameworks like Angular, Ember or Meteor,
             and I’ve come to realise that frameworks come and go so often in JavaScript that picking one might not be the right direction to take.
             Also they increase your project's complexity, dependencies and limit your scope of creativity.
             I prefer core-language solutions, small libraries and micro frameworks that are close to vanilla Js as possible,
             for this reason I really do like:
             <a href="https://facebook.github.io/react/"  target="_blank">React</a>,
             <a href="http://reactivex.io/"  target="_blank">RxJs</a> or
             <a href="http://cycle.js.org/"  target="_blank">Cycle.js</a>.
          </p>
          <p>I am a big fan of <a href="https://github.com/getify/You-Dont-Know-JS/blob/master/this%20%26%20object%20prototypes/ch6.md" target="_blank">OLOO (objects linking to other objects)</a> so I agree with Eric Elliot
             when he advocates against the use of <a href="https://vimeo.com/69255635" target="_blank">class pattern</a> in js.
          </p>
          <p>These days I took a shine to functional programming that opens up a different style of programming.
             Key concept in FP is split the logic from side effects like: network calls, files read or written, database queries, modified DOM elements or global variables.
             The trouble with this is that the whole point of writing computer programs is the side effects. Making a network call and rendering DOM elements is at the core
             of what a web application does. It’s what JavaScript was invented for.
          </p>
          <p>So how to solve this problem? Well, the key is that we don’t avoid functions that have side effects entirely,
             we just give them a healthy amount of respect, and put-off dealing with them until we absolutely have to.
          </p>
          <p>If you try to perform effects and logic at the same time, you may create hidden side effects which cause bugs in the logic.
             Keep functions small. Do one thing at a time, and do it well.
          </p>
          <p>I pursuit the idea of simpler programming, FP helps me to go in the right direcion.</p>
          <p>At the end though Web development is not all that much about coding, but often
             is about of figuring things out, getting in a mood to solving a small problem after the other.
             Sometime is coded related sometime is just doing research about tooling, sometime you get stucked and your
             brain doesn't process information, sometimes is fiddling around with configuration files,
             so to get better you need to cultivate your creative process to solve problems one piece at the time.
          </p>
        </div>
      </article>
    </section>

    <section class="about-btn section-ctaction edge-css">
      <?php include("partials/get-in-touch.php"); ?>
    </section>

<?php include("partials/footer.php"); ?>
