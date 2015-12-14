<!--widget  end editable content area include  / cut here--> 
  </div><!--end widget-inside-->
  </aside>    
     </div><!--end sidebar-->
    </div><!--end midddle wrap-->
     <footer id="footer">
        <ul id="credits">
         <li><a href="http://www.aliaslead.com" target="new"><img id="aliaslead" src="<?php echo get_template_directory_uri(); ?>/images/aliaslead-all-red.png"></a></li>
         <li>&copy;&nbsp; <?php auto_copyright('2012');?> </li>
        	<!--<li>&copy;&nbsp;2013-2014</li>-->
        </ul>
   <!--footer link styles written not used at this point : )-->
      	<ul>
            <!--<li class="header">Link Header</li>
            <li>links</li>
            <li>links</li>
            <li>links</li>-->
       </ul>
       <ul class="social-media">
        	<li><!--s-m logos-->
       	    </li>
       </ul>
       <ul class="social-media">
        	<li><!--s-m logos-->
       	    </li>
        </ul>
        <ul class="social-media">
        	<li><!--s-m logos-->
   	        </li>
       </ul>
       <ul class="social-media">
	       	<li><!--s-m logos-->
	       	</li>
       </ul>
       <ul class="social-media">
        	<li><a href="http://www.youtube.com/user/darwinsagangibby?feature=watch" target="new"><img img id="youtube" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="outbound link to youtube"></a></li>
       </ul>
       <ul class="social-media">
        	<li><a href="http://www.reverbnation.com" target="new" ><img id="rblogo" src="<?php echo get_template_directory_uri(); ?>/images/Mreverbnation_logo_light_badge_flat.png" alt="outbound link to reverb nation"></a></li>
       </ul>
    </footer>
<!--this is for footer script if we need it -->   
    <?php wp_footer(); ?> 
    
</body>
</html>

<!--copy right functions for footer credits --> 
	<?php function auto_copyright($year = 'auto'){ ?>
	   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
	   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
	   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
	   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
	<?php } ?>