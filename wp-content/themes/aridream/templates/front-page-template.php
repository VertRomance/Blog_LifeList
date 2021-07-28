<?php
/*
	Template Name: Front Page
	Design Theme's Front Page to Display the Home Page if Selected
	
*/
get_header(); ?>


<section class="bannerLayout">
<div class="container">
            <div class="row">
			<div class="aghinner"><h1><?php 
					if ( get_theme_mod( 'header__first_heading' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'header__first_heading' ) ) . '';
					} else
					{
						echo __('Malesuada Sollitudin', 'aridream');
					}?>
					</h1>
					<?php 
					if ( get_theme_mod( 'header__second_heading' ) <> '' ) {
						echo '' . esc_html( get_theme_mod( 'header__second_heading' ) ) . '';
					} else
					{
						echo __('Curabitur pharetra libero in justo consectetur varius. Proin quis nulla elit. Aenean bibendum luctus congue.', 'aridream');
					}?>
			<div>
			<div>
			<div>
		</section>

 

    <!-- Page Content -->
        <div class="section   services">
        <div class="container">
                        <div class="row">
						
						<?php
				aridream_social_links();
				?>
						
						
						
						
                         
                              
                              
                      
                             
                        </div>
                        <!-- /.row -->
                    </div></div>
        
     
        
    
        
        
                
        
        
        
        

 
 
<?php get_footer(); ?>
