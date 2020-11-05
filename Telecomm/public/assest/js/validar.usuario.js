$.validator.setDefaults( {
			submitHandler: function () {
				var oFrm=$('#formEditar')[0];
				var datos = new FormData(oFrm);
				$.ajax({
					url: 'script.php',
					type: 'POST',
					dataType: 'json',
					data: datos,
					enctype: 'multipart/form-data',
					processData: false,
					contentType: false,
					cache: false
				})
				.done(function(respuesta){console.log(respuesta);})
				.fail(function(e){console.log(e.responseText);});
			}
			});

$( document ).ready( function ()
		{
			$( "#formRegistrar" ).validate( {
				rules:
				{
					user:
					{
						required: true,
						minlength: 2,
					 	maxlength: 60,
						pattern: /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])/
					},
					name:
					{
						required: true,
						minlength: 2,
					 	maxlength: 60,
						pattern: /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])/
					},
					role:
					{
						required: true,
						minlength: 2,
					 	maxlength: 60,
						
					},
					password:
					{
						required: true,
						minlength: 5,
					},
					passconf:
					{
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					mail:
					{
						required: true,
						email: true
					}
				},
				messages:
				{
					telefono:
					{
						pattenr: "minimo 3, maximo 12 numeros"
					}
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}
			} );

		} );