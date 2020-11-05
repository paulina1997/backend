$.validator.setDefaults( {
			submitHandler: function () {
				var oFrm=$('#frmEditar')[0];
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
			$( "#frmEditar" ).validate( {
				rules:
				{
					rfc:
					{
						required: true,
						minlength: 12,
					 	maxlength: 13,
						pattern: /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/
					},
					nombre:
					{
						required: true,
						minlength: 2,
					 	maxlength: 60,
						pattern: /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])/
					},
					direccion:
					{
						required: true,
						minlength: 2,
					 	maxlength: 60,
						
					},
					telefono:
					{
						required: true,
						minlength: 2,
					 	maxlength: 60,
						pattern: /^[0-9-()+]{3,12}$/
					},
					correo:
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