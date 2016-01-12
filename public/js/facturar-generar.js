(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.facturarGenerar = function(data){
        var _this = $(this);
        var plugin = _this.data('facturarGenerar');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.facturarGenerar(this, data);
            
            _this.data('facturarGenerar', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.facturarGenerar = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
           
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        
        /*
        * Private methods
        */

       var newTaxdata = function(){
           $.ajax({
              url:'/facturacion/facturar/nuevodatosfacturacion',
              success: function(source){
                  var source = $('<div>' + source + '<div>');
                  source.find('.modal a#save').on('click',function(e){
                        source.find('p.input-error-show').remove();
                        var error_message = '<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>';
                        var isValid = true;
                        $(source).find('input[required]').filter(function(){
                            if($(this).val() == ''){
                                $(this).after(error_message);
                                isValid = false;
                            }
                        });
                        if(isValid){
                            var pacientefacturacion = new Object();
                            source.find('input').each(function(){
                                var name = $(this).attr('name');
                                var value = $(this).val();
                                pacientefacturacion[name] = value;
                            });
                            pacientefacturacion.idpaciente = settings.general_info.idpaciente;
                            $.ajax({
                                url:'/facturacion/facturar/nuevodatosfacturacion',
                                method:'POST',
                                dataType:'json',
                                data:pacientefacturacion,
                                success: function (data) {
                                    if(data.response == true){
                                        $container.find('#taxdata').append('<p><input checked name="datos_facturacion" type="radio" id="'+data.data.idpacientefacturacion+'" /><label for="'+data.data.idpacientefacturacion+'">'+data.data.pacientefacturacion_razonsocial + ' - '+data.data.pacientefacturacion_rfc+'</label></p>');
                                        $container.find('#nuevosdatosfacturacion').closeModal();
                                        $container.find('#nuevosdatosfacturacion').remove   ();
                                    }
                                }
                            });
                        }

                  });
                  $container.append(source);
                  $container.find('#nuevosdatosfacturacion').openModal();
                  
              }
           });
           
       }
       
       var generarFactura = function(){
           //Verificamos que se haya selecionado datos de facturacion
           if($('input[name=datos_facturacion]:checked').length > 0){
               var idpacientefacturacion = $('input[name=datos_facturacion]:checked').attr('id');
               var idmovimiento = settings.general_info.id;
               $.ajax({
                   url:'/facturacion/facturar/generar',
                   method: 'POST',
                   dataType: 'json',
                   beforeSend: function () {
                       $container.find('button').addClass('loading');
                   },
                   data:{idpacientefacturacion:idpacientefacturacion, idmovimiento:idmovimiento},
                    success: function (data) {
                         $container.find('button').removeClass('loading');
                        if(data.response == false){
                            alert(data.details);
                        }else{
                            $container.find('button').removeClass('loading');
                            window.location.replace("/facturacion/emitidas");
                        }
                    }
               });
           }else{
               alert('Por favor seleccione los datos de facturacion para el cual desea emitir la factura');
           }
       };
       
       var appToJsDate = function(appdate){
           
           var date_array = appdate.split('-');
           var dateJS = new Date();
           dateJS.setDate(parseInt(date_array[0]));
           dateJS.setMonth(parseInt(date_array[1]) - 1);
           //dateJS.setYear(date_array[2]);
           //dateJS.setHours(0,0,0);
           
           return dateJS;
           
       }
       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            //Verificamos si es posible factura
            var current_month = new Date();
            current_month = current_month.getMonth();
            
            var pagada_date = appToJsDate(settings.general_info.pagada);
            var pagada_month = pagada_date.getMonth();

            if(current_month != pagada_month){
                var message = $(' <div class="card-panel white-text red darken-4">Lo sentimos pero no es posible generar esta factura ya que no fue pagada en el mes en curso</div>');
                $container.find('#generar').prop('disabled',true);
                $container.prepend(message);
            }

            $container.find('#new_taxdata').on('click',newTaxdata);
            $container.find('button#generar').on('click',generarFactura);
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );