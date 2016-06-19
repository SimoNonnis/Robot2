<?php
  $title       = 'Making Programming Simpler | Robot2';
  $description = 'Keep it extremely simple, \'cause code is mostly for humans, computers only cares about machine code.';
?>

<?php include("partials/head.php"); ?>

  <?php include("partials/navigation.php"); ?>



    <section class="big-img">
        <img alt="Robot in the forefront and a city skyline behind it" src="dist/images/base.png" />
    </section>

    <section role="main" class="home-main-section g-wrapper [ u-textCenter u-cf ]">
      <article class="home-main-article u-cf">
        <h2>Keep it extremely simple</h2>
        <p>Complexity is the enemy of productivity. 
           Shorter code with fewer moving parts is simpler to read and test, 
           so as a developer my job is to simplify and find a solution that works exactly as expected, is performant, is easy to understand
           and doesn't take too long to implement.
        </p>
      </article>
    </section>

    <section class="section-ctaction edge-css">
    	<?php include("partials/get-in-touch.php"); ?>
    </section>


<?php include("partials/footer.php"); ?>
