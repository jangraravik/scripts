<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script> --><script type="text/javascript" src="../jquery.js"></script><script type="text/javascript">	jQuery(document).ready(function(){						// when any option from country list is selected		jQuery("select[name='country']").change(function(){							// path of ajax-loader gif image			var ajaxLoader = "<img src='../ajax-loader.gif' alt='loading...' />";						// get the selected option value of country			var optionValue = jQuery("select[name='country']").val();					jQuery("#cityAjax")				.html(ajaxLoader)				.load('data.php', {country: optionValue, status: 1}, function(response){										if(response) {						jQuery("#cityAjax").css('display', '');					} else {						jQuery("#cityAjax").css('display', 'none');					}			});					});	});</script><?php?>Countries: <select name="country">	<option value="">Please Select</option>	<option value="1">Nepal</option>	<option value="2">India</option>	<option value="3">China</option>	<option value="4">USA</option>	<option value="5">UK</option></select><div id="cityAjax" style="display:none">	<select name="city">		<option value="">Please Select</option>	</select></div>