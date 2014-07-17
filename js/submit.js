var err1,err2,err3,err4,err5,err6;
jQuery(function(){
	switch(LANG){
		case 'es':
			err1 = "Campo requerido.";
			err2 = "Campo requerido.";
			err3 = "Campo requerido.";
			err4 = "Campo requerido.";
			err5 = "Campo requerido.";
			err6 = "Campo inválido.<br />Usar 'usuario@ejemplo.com'";
			break;
	}
});
jQuery(function(){
	jQuery('#form').validate({
		rules:{
			name:{required:true},
			lastname:{required:true},
			institution:{required:true},
			city:{required:true},
			country:{required:true},
			email:{required: true,email: true},
			category:{required: true},
		},
		messages:{
			name: err1,
			lastname: err2,
			institution: err3,
			city: err4,
			country: err5,
			email: err6,
		},
		submitHandler:function(){
			jQuery('#spinner').show();
			var name = jQuery('#name').val();
			var lastname = jQuery('#lastname').val();
			var institution = jQuery('#institution').val();
			var city = jQuery('#city').val();
			var country = jQuery('#country').val();
			var email = jQuery('#email').val();
			var category = jQuery('#category').val();
            jQuery.ajax({
            	type: "post",
				url: BASE_URL+LANG+'/register/save',
				data:{
					name:name,
					lastname:lastname,
					institution:institution,
					city:city,
					country:country,
					email:email,
					category:category
				},
				success: function(data){
					var message=eval('('+data+')');
					jQuery('#spinner').hide('slow',function(){
						jQuery('#form').hide(function(){
							jQuery('#message').html(message.msg).show(function(){
								setTimeout(function(){
									jQuery('#message').html('').hide(function(){
										setTimeout(function(){
											jQuery('#form').reset();
											jQuery('#form').show('slow');
										},100);
									});
								},5000);
							});	
						});
					});
				}
			});
			return false;
		}
	});
});
