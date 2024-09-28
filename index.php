<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage sheerwater_gardens
 */

get_header(); ?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        <div class="wrapper">
            <div id="slider">
                <div class="slide">
                <div class="slide-wrapper">
                    <div class="img-wrapper">
                    <img src="https://i.ibb.co/c8626Pb/ca.jpg" alt="Captain America">
                    </div>
                    <div class="title-wrapper">
                    <div class="inner-wrapper">
                        <div class="slide-title">captain america</div>
                        <div class="slide-subtitle">Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.</div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="slide">
                <div class="slide-wrapper">
                    <div class="img-wrapper">
                    <img src="https://i.ibb.co/KK4FP0p/im.jpg" alt="Iron Man">
                    </div>
                    <div class="title-wrapper">
                    <div class="inner-wrapper">
                        <div class="slide-title">iron man</div>
                        <div class="slide-subtitle">Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.</div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="slide">
                <div class="slide-wrapper">
                    <div class="img-wrapper">
                    <img src=https://i.ibb.co/svrX6s9/sm.jpg" alt="Spider Man">
                    </div>
                    <div class="title-wrapper">
                    <div class="inner-wrapper">
                        <div class="slide-title">spider man</div>
                        <div class="slide-subtitle">Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.</div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="slide">
                <div class="slide-wrapper">
                    <div class="img-wrapper">
                    <img src="https://i.ibb.co/mD6CNsM/ds.jpg" alt="Doctor Strange">
                    </div>
                    <div class="title-wrapper">
                    <div class="inner-wrapper">
                        <div class="slide-title">doctor strange</div>
                        <div class="slide-subtitle">Formerly a renowned surgeon, Doctor Stephen Strange now serves as the Sorcerer Supreme—Earth’s foremost protector against magical and mystical threats.</div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="slide">
                <div class="slide-wrapper">
                    <div class="img-wrapper">
                    <img src="https://i.ibb.co/YhJWsC9/t.jpg" alt="Thor">
                    </div>
                    <div class="title-wrapper">
                    <div class="inner-wrapper">
                        <div class="slide-title">thor</div>
                        <div class="slide-subtitle">The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.</div>
                    </div>
                    </div>
                </div>
                </div>
                <nav id="navigation">
                                <button class="bullet"></button>
                                <button class="bullet"></button>
                                <button class="bullet"></button>
                                <button class="bullet"></button>
                                <button class="bullet"></button>
                            </nav>
            </div>
            </div>
        </div><!-- #content -->

    </div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->


<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,700,900");
:root {
  --text-color: rgb(255, 255, 255);
  --blend-color: rgba(46, 61, 102, 0.6);
  --bullets-color: rgb(255, 255, 255);
  --transform-amount: 20px;
  --bullets-count: 5;
}

* {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
  width: 100%;
}

body {
  overflow: hidden;
  font-family: "Roboto", sans-serif;
  margin: 0;
}

.wrapper {
  height: 100%;
  width: 100%;
}

#slider {
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: relative;
}

.slide {
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  pointer-events: none;
}

.slide.current {
  pointer-events: initial;
  opacity: 1;
  z-index: 10;
}

.slide-wrapper {
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: relative;
}

.img-wrapper {
  width: 100%;
  height: 100%;
  background: var(--blend-color);
}

.img-wrapper img {
  width: calc(100% + var(--transform-amount));
  height: calc(100% + var(--transform-amount));
  top: calc(var(--transform-amount) / 2 * -1);
  left: calc(var(--transform-amount) / 2 * -1);
  position: relative;
  object-fit: cover;
  mix-blend-mode: luminosity;
}

.title-wrapper {
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.5) 0%,
    rgba(0, 0, 0, 0) 100%
  );
}

.inner-wrapper {
  position: absolute;
  bottom: 5em;
  left: 5em;
  color: var(--text-color);
  max-width: 70%;
}

.slide-title {
  white-space: nowrap;
  text-transform: uppercase;
  font-size: 4em;
  font-weight: 900;
}

.slide-subtitle {
  font-size: 1.5em;
}

#navigation {
  pointer-events: none;
  position: absolute;
  bottom: 0;
  z-index: 15;
  width: 100%;
  height: 50px;
  display: grid;
  grid-template-columns: repeat(var(--bullets-count), 60px);
  grid-gap: 16px;
  justify-content: center;
  align-items: center;
}

.bullet {
  pointer-events: initial;
  cursor: pointer;
  height: 5px;
  transition: opacity 0.3s ease;
  opacity: 0.2;
  height: 30px;
  background: none;
  outline: none;
  position: relative;
  border: none;
  padding: 0;

  &:after {
    content: "";
    position: absolute;
    top: calc(50% - 3px);
    background: var(--bullets-color);
    width: 100%;
    height: 6px;
    z-index: 2;
    border-radius: 4px;
    left: 0;
  }
}

.bullet.current {
  opacity: 1;
}

.bullet:not(.current):hover {
  opacity: 0.5;
}

@media (max-width: 700px) {
  .slide-title {
    font-size: 3em;
  }
  .slide-subtitle {
    font-size: 1.2em;
  }
}

@media (max-width: 500px) {
  .inner-wrapper {
    left: initial;
    width: 100%;
    max-width: initial;
  }
  .slide-title {
    font-size: 4em;
    text-align: center;
  }
  .slide-subtitle {
    display: none;
  }
}

@media (max-width: 450px) {
  .slide-title {
    font-size: 3em;
  }
}

</style>

<?php
get_sidebar();
get_footer();