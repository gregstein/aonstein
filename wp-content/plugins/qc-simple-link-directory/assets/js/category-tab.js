jQuery(document).ready(function($){
	
	$('.sld-subcat-parent-li a').on('click', function(evt){
		evt.preventDefault();
	});
	$('.qcld_sld_tablinks').on('click', function(evt){
		jQuery('.qcopd-list-wrapper:visible').siblings('.sld-tag-filter-area').find('.sld_tag_filter').removeClass('sld_tag_filter-active');
		filter = [];
		var qcld_sld_event = $(this).attr('data-cterm')
		var i, qcld_sld_tabcontent, qcld_sld_tablinks;
		qcld_sld_tabcontent = document.getElementsByClassName("qcld_sld_tabcontent");
		for (i = 0; i < qcld_sld_tabcontent.length; i++) {
			qcld_sld_tabcontent[i].style.display = "none";
		}
		qcld_sld_tablinks = document.getElementsByClassName("qcld_sld_tablinks");
		for (i = 0; i < qcld_sld_tablinks.length; i++) {
			qcld_sld_tablinks[i].className = qcld_sld_tablinks[i].className.replace(" qcld_sld_active", "");
			//jQuery('.qcld_sld_active').parent('li').removeClass('sld-tablink-active-li');
		}
		document.getElementById(qcld_sld_event).style.display = "block";
		evt.currentTarget.className += " qcld_sld_active";
		jQuery('.qcld_sld_tablinks').parent('li').removeClass('sld-tablink-active-li');
		jQuery('.qcld_sld_tablinks').parents('.sld-has-subcat').removeClass('sld-tablink-active-parent-li');
		jQuery(this).parent('li').addClass('sld-tablink-active-li');
		jQuery(this).parents('.sld-has-subcat').addClass('sld-tablink-active-parent-li');
		
		jQuery('#'+qcld_sld_event +' .qcopd-single-list').each(function(e){
			
			if($(this).find('.sldp-holder').length > 0 && $(this).find('.sldp-holder > .jp-current').length==0){

				var containerId = $(this).find('.sldp-holder').attr('id');
				var containerList = $(this).find('ul').attr('id');
				console.log(containerList);
				$("#"+$(this).find('.sldp-holder').attr('id')).jPages({
					containerID : containerList,
					perPage : per_page,
				});
				
			}
			
		})
		//$('#'+qcld_sld_event).find(".filter-btn[data-filter='all']").click();
		jQuery('.qc-grid').packery({
			itemSelector: '.qc-grid-item',
			gutter: 10
		});
		if(jQuery( '.filter-btn[data-filter="all"]' ).length>0){
			jQuery('.qcopd-list-wrapper:visible').siblings('.filter-area').find( '.filter-btn[data-filter="all"]' ).trigger( "click" );
		}

		if( jQuery('.qcopd-list-wrapper:visible').siblings('.sld-tag-filter-area').find('.sld_tag_filter').length > 0 ){
			jQuery('.qcopd-list-wrapper:visible').siblings('.sld-tag-filter-area').find('.sld_tag_filter:first').trigger('click');
		}
		
		
	})
	
})