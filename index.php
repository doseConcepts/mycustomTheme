<?php get_header(); ?>
    <div id="grid">
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container-fluid">
          <div class="logo">
            <img src="images/randoms/dosegold.gif" alt="Dose gold logo">
          </div>
          <div class="portfolioT">
            <p>Portfo<span>lio</span></p>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            id="hamburger"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="assignments.html">Assignments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="name">
        <div class="myBG">
          <img src="images/randoms/dosepaint.png" alt="pic of Antoine">
        </div>
          <div class="name-content">
            <div class="textline-1">Hello my name is</div>
            <div class="textline-2">Antoine</div>
            <div class="textline-3">And I'm a <span>Student</span></div>
          </div>
      </section>
      <div class="mwAbout">
        <img src="images/Portfoliopics/mwAbout.gif" alt="moonwalkMan">
      </div>
      <section class="aboutme">
          <h1>About Me</h1>
          <p>I'm a student perfecting my craft, with a
            <span>Dose</span> of web design.
          </p>
      </section>
            <hr>
        <section>
          <div class="learncode">
            <img src="images/randoms/evilsmile.webp" alt="Evilsmil gif"/>
            <h4>Learning to code is frustrating.</h4>
          </div>

          <p class="words">So that being said, the first step is to simply re-align your
          expectations. It's normal to feel constantly frustrated when
          programming, at just about any skill level
          </p>
        </section>
      <?php get_footer(); ?>
