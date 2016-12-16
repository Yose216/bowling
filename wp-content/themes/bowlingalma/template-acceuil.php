<?php
/**
 * Template Name: Acceuil
 *
 * @package Sento
 */

get_header(); ?>
<div class="main">
	<h1>Nos soirées</h1>
	<div class="contenue"><?php the_field('soiree_bowling'); ?></div>
	<div class="contenue"><?php the_field('soiree_poker'); ?></div>
	<div class="contenue"><?php the_field('soiree_billard'); ?></div>
	<div class="contenue"><?php the_field('soiree_kizomba'); ?></div>
	<div class="contenue"><?php the_field('soiree_salsa'); ?></div>
	<div class="contenue"><?php the_field('soiree_breizh'); ?></div>
	
</div>

<?php get_footer(); ?>