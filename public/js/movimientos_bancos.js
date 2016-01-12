(function($){
 

    $.fn.movimientosbancos = function( data ) {
        
        var _this = $(this);
        plugin = _this.data('movimientosbancos');
        if (!plugin) {
            plugin = new $.movimientosbancos(this, data);
            _this.data('movimientosbancos', plugin);
            return plugin;
        }
    }
    
    $.movimientosbancos = function(container, options){
       
        var plugin = this;
        
        /* 
        * Important Components
        */
       
       var $container = $(container);
       
       /* 
        * Important Variables
        */
       
       var conceptos;
       var uploadObj;
       /* 
        * Public methods
        */
       
       
       plugin.init = function(){
           
           var idbanco = null;
           var last_row = null;
           //Inicialiazamos la fecha
           var Objfecha = new Date();
           var fecha = Objfecha.getDate() + '/' + (Objfecha.getMonth() + 1) +'/' + Objfecha.getFullYear();
           
           $container.find('input[name=banco_fecha]').val(fecha);
           
           //Inicializamos el componente autcomplete de conceptos
           $.getJSON(
                   '/bancos/movimientos/getconceptos',
                   function(data){
                       conceptos = data;
                       /*$container.find('input[name=banco_concepto]').autocomplete({
                            source:conceptos,
                            select: function( event, ui ) {
                                 $container.find('input[name=idconcepto]').val(ui.item.value);
                                 $(this).val(ui.item.label);
                                 event.preventDefault();
                            }
                       });*/
                       
                     var selectBancoConcepto = document.getElementById('bancoConcepto');
                     //selectBancoConcepto.style.display = "inline";
                     //selectBancoConcepto.style.width = "auto";
                     //	selectBancoConcepto.style.height = "auto";
                     
                     var selectidConcepto = document.getElementById('idConcepto');
                     //selectidConcepto.style.display = "inline";
                     //selectidConcepto.style.width = "auto";
                     //selectidConcepto.style.height = "auto";
                     $.each(conceptos,function(index,element){
                            
                            // agregamos los valores <option> a seleccionar
                            var selectOption = new Option(element.label,element.value);
                            var selectidOption = new Option(element.label,element.value);
                            selectBancoConcepto.appendChild(selectOption);
                            selectidConcepto.appendChild(selectidOption);
                            
                            //Inicilizamos el filtro de los conceptos
                            $container.find('#concepto_filter').append('<option value="'+element.value+'">'+element.label+'</option>');
                            });
                       
                       $container.find("#concepto_filter").multipleSelect({
                            selectAll:true,
                            allSelected:'Todos los conceptos',
                            selectAllText:'Todos los conceptos',
                            onClick : filterByDate,
                            onCheckAll:filterByDate,
                            onUncheckAll:filterByDate
                        });

                        $container.find("#tipo_filter").multipleSelect({
                            selectAll:true,
                            allSelected:'Todos los tipo',
                            selectAllText:'Todos los tipos',
                            onClick : filterByDate,
                            onCheckAll:filterByDate,
                            onUncheckAll:filterByDate
                        });

                        $container.find("#tipo_filter").multipleSelect("checkAll");
                        $container.find("#concepto_filter").multipleSelect("checkAll");
                        
                        
                       
                   }
            );
    
                        
    


            //$("select#tipo_filter").multipleSelect("checkAll");
    
            //Inicializamos los calendarios
            $container.find('#fecha_filter_from').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                onClose: function(dateText, inst){
                    filterByDate();
                }
            });
            $container.find('#fecha_filter_to').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                onClose: function(dateText, inst){
                    filterByDate();
                }
            });
            
    
            //Incializamos el select de tipo de movimiento
            $container.find('select[name=banco_tipomoviento]').material_select();
            
            //Incializamos el input cantidad
            $container.find('input[name=banco_cantidad]').on('keydown',onlyNumbers);

            //Incializamos evento guardar
            $container.find('#banco_guardar').on('click',function(){
                var isValid = validateForm($container);
                
                /*Si el formulario es valido, guardamos*/
                if(isValid){
                    
                    var movimiento = new Object();
                    //Guardamos nuestros datos 
                    $.each($container.find('input,select'),function(index,element){
                        movimiento[$(element).attr('name')] = $(element).val();                        
                    });
                    
                    //Hacemos la peticion ajax
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        async: false,
                        data: movimiento,
                        url:'/bancos/movimientos/nuevomovimiento',
                        success: function (response) {
                            
                            if(response.response == true){
                                idbanco = response.data.id;
                                var tr = $('<tr>').attr('id',response.data.id).attr('data-time',response.data.fecha_js);
                                tr.append('<td>'+response.data.fecha+'</td>');
                           //alert($('#bancoConcepto option:selected').val())
                                //tr.append('<td class="banco_concepto" id='+$('input[name=idconcepto]').val()+'>'+$container.find('input[name=banco_concepto]').val()+'</td>');
                               // tr.append('<td class="banco_concepto" id='+$('#bancoConcepto option:selected').text()+'>'+$('#bancoConcepto option:selected').text()+'</td>');
                            tr.append('<td class="banco_concepto" id='+$('#bancoConcepto option:selected').val()+'>'+$('#bancoConcepto option:selected').text()+'</td>');
                                if($container.find('select[name=banco_tipomoviento]').val() == 'cargo'){
                                    tr.append('<td>'+accounting.formatMoney($container.find('input[name=banco_cantidad]').val())+'</td>');
                                    tr.append('<td class="movmiento_vacio" > ---- </td>');
                                }else{
                                    tr.append('<td class="movmiento_vacio" > ---- </td>');
                                    tr.append('<td>'+accounting.formatMoney($container.find('input[name=banco_cantidad]').val())+'</td>');      
                                }
                                 tr.append('<td class="comprobantes_banco"></td>');
                                tr.append('<td>'+$container.find('input[name=banco_nota]').val()+'</td>');
                                var td_opciones = $('<td>');
                                td_opciones.append('<a class="tooltipped" href="#" data-tooltip="Editar" data-position="right"><i class="tiny mdi-action-assignment"></i></a>');
                                td_opciones.append('<a style="margin-left: 10px;" class="tooltipped modal-trigger" href="#delete-modal-8" data-tooltip="Eliminar" data-position="right"><i class="tiny mdi-action-delete"></i></a>');
                                

                                //Adjuntamos el evento eliminar movmiento
                                td_opciones.find('i.mdi-action-assignment').on('click',function(){
                                    var id = response.data.id;
                                    editarMovimiento(id);
                                });
                                
                                //Adjuntamos el evento editar movmiento
                                td_opciones.find('i.mdi-action-delete').on('click',function(){
                                    var id = response.data.id;
                                    eliminarMovmiento(id);
                                });
                                
                                //Comenzamos a subir nuestros archivos
                                uploadObj.startUpload();
                                uploadObj.reset();
                                
                     
                                
                                tr.append(td_opciones);
                                
                                //Mostramos el mensaje de exito
                                $('#movmiento_mensaje').show();
                                
                                //Insertamos la fila
                                $container.find('tbody').append(tr);
                                
                                //Recalculamos el balance;
                                var cantidad = parseFloat($container.find('input[name=banco_cantidad]').val());

                                var current_balance = accounting.unformat($container.find('#balance').text());
                                
                                if($container.find('select[name=banco_tipomoviento]').val() == 'cargo'){
                                    var new_balance = current_balance + cantidad
                                }else{
                                    var new_balance = current_balance - cantidad ;
                                }
                                
                                $container.find('#balance').text(accounting.formatMoney(new_balance));

                                $container.find('input:not(input[name=banco_fecha]):not(input.select-dropdown)').val('');
                                
                                calcularTotalIngresosEgresos();
                                
                                last_row = tr;
                                
                            }
                        }
                        
                    });
                    
                }
            });
            
            //Evento de cerrar de notificacion
            $('#movmiento_mensaje a').on('click',function(){
                $('#movmiento_mensaje').hide();
            });
            $('#movmiento_mensaje_eliminar a').on('click',function(){
                $('#movmiento_mensaje_eliminar').hide();
            });
            
            $('#movmiento_mensaje_editar a').on('click',function(){
                $('#movmiento_mensaje_editar').hide();
            });
            
            //Evento eliminar movimiento
            $container.find('i.mdi-action-delete').on('click',function(){
                var id = $(this).closest('tr').attr('id');
                eliminarMovmiento(id);
            });
            
            //Evento eliminar movimiento
            $container.find('i.mdi-action-assignment').on('click',function(){
                var id = $(this).closest('tr').attr('id');
                editarMovimiento(id);
            });
            
            //File upload
            uploadObj = $("#fileuploader").uploadFile({
                url:"/bancos/movimientos/uploadcomprobante",
                fileName:"myfile",
                uploadStr: 'Comprobante',
                dragDropStr: "<span><b>Arrestre y sulte sus archivos</b></span>",
                autoSubmit:false,
                cancelStr:"cancelar",
                showPreview: true,
                previewHeight: 90,
                previewWidth:90,
                dynamicFormData: function()
                {
                    var data ={ idbanco:idbanco}
                    return data;
                },
                afterUploadAll:function(obj)
                {
                    //Jalamos los comprobantes subidos
                    $.getJSON('/bancos/movimientos/getcomprobantesbyid',{id:idbanco},function(data){
                        var td_comprobantes = last_row.find('td.comprobantes_banco');
                        $.each(data,function(index,element){
                            td_comprobantes.append('<a href="'+element.referenciaabono_archivo+'"><img src="/img/comprobantes-bancos/comprobante-icon.png"><a/>');
                        });

                    });
                }
            });
                
            

       }

       /* 
        * Private methods
        */
       
       var editarMovimiento = function(id){
           $.ajax({
                async:false,
                method:'GET',
                url:'/bancos/movimientos/editarmovmiento',
                data:{id:id},
                success: function (modalHTML) {
                    var source = $('<div id="active_modal">' + modalHTML + '</div>');
                    $container.after(source);
                    //Inicializamos el file uploader
                    var upObj = source.find("#fileuploader").uploadFile({
                        url:"/bancos/movimientos/uploadcomprobante",
                        fileName:"myfile",
                        uploadStr: 'Comprobante',
                        dragDropStr: "<span><b>Arrestre y sulte sus archivos</b></span>",
                        autoSubmit:false,
                        cancelStr:"cancelar",
                        showPreview:true,
                        previewWidth:'90px',
                        previewHeight:'90px',
                        showDelete: true,
                        showFileSize: false,
                        deleteCallback: function(data,pd){
                            
                            $.ajax({
                                async: false,
                                url:'/bancos/movimientos/eliminarcomprobante',
                                method: 'POST',
                                data:{imagen:pd.preview.attr('src')},
                            });
                            
                            $.getJSON('/bancos/movimientos/getcomprobantesbyid',{id:id},function(data){
                                var td_comprobantes = $container.find('tbody').find('tr#'+id).children('td').eq(4);
                                td_comprobantes.text('');
                                $.each(data,function(index,element){
                                    td_comprobantes.append('<a href="'+element.referenciaabono_archivo+'"><img src="/img/comprobantes-bancos/comprobante-icon.png"><a/>');
                                });

                            });
                            
                        },
                        dynamicFormData: function()
                        {
                            var data ={ idbanco:id}
                            return data;
                        },
                        afterUploadAll:function(obj)
                        {
                            //Jalamos los comprobantes subidos
                            $.getJSON('/bancos/movimientos/getcomprobantesbyid',{id:id},function(data){
                                var td_comprobantes = $container.find('tr#'+id).find('td').eq(4);
                                td_comprobantes.text('');
                                $.each(data,function(index,element){
                                    td_comprobantes.append('<a href="'+element.referenciaabono_archivo+'"><img src="/img/comprobantes-bancos/comprobante-icon.png"><a/>');
                                });

                            });
                        }

                    });
                    
                    
                   $.getJSON('/bancos/movimientos/getcomprobantesbyid',{id:id},function(data){
                        
                        for(var i=0;i<data.length;i++)
                        {
                            var filename = data[i].referenciaabono_archivo.split('/img/comprobantes-bancos/comprbante-banco-');
                            filename = filename[1].split(" ");
                            upObj.createProgress(filename[1],data[i].referenciaabono_archivo,500);
                        }

                    });
                    
                    //Inicializamos el evento guardar
                    source.find('a.guardar').on('click',function(){
                        
                        var isValid = validateForm(source);
                        
                        if(isValid){

                            var movimiento = new Object();
                            //Guardamos nuestros datos 
                            $.each(source.find('input,select'),function(index,element){
                                movimiento[$(element).attr('name')] = $(element).val();                        
                            });

                            //Hacemos la peticion ajax
                            $.ajax({
                                type: 'POST',
                                dataType: 'json',
                                enctype: "multipart/form-data",
                                async: false,
                                data: movimiento,
                                url:'/bancos/movimientos/editarmovmiento',
                                success: function(data) {
                                    if(data.response == true){
                                        //Cerramos el modal
                                        $('#active_modal').children('.modal').closeModal();
                                        //Actualizamos nuestro row
                                        $container.find('tr#'+data.banco.idbanco).children('td').eq(0).text(data.banco.banco_fecha).attr('data-time',data.banco.banco_fecha_js);
                                        $container.find('tr#'+data.banco.idbanco).children('td').eq(1).text(data.banco.bancotransaccion_nombre).attr('id',data.banco.idconceptobanco);
                                        if(data.banco.banco_tipomovimiento == 'cargo'){
                                             $container.find('tr#'+data.banco.idbanco).children('td').eq(2).removeClass('movmiento_vacio').text(accounting.formatMoney(data.banco.banco_cantidad));
                                             $container.find('tr#'+data.banco.idbanco).children('td').eq(3).addClass('movmiento_vacio').text(' ---- ');
                                        }else{
                                             $container.find('tr#'+data.banco.idbanco).children('td').eq(2).addClass('movmiento_vacio').text(' ---- ');
                                            $container.find('tr#'+data.banco.idbanco).children('td').eq(3).removeClass('movmiento_vacio').text(accounting.formatMoney(data.banco.banco_cantidad));  
                                        }
                                        
                                        $container.find('tr#'+data.banco.idbanco).children('td').eq(5).text(data.banco.banco_nota);
                                        
                                        //subimos archivos
                                        upObj.startUpload();
                                        
                                        
                                         $container.find('#balance').text(accounting.formatMoney(data.banco.new_balance));
                                        //Eliminamos el row
                                        $('#active_modal').remove();
                                        $('#movmiento_mensaje_editar').show();
                                    }
                                }
                            });
                        }

                    });
                }
           });
           $('#active_modal').children('.modal').openModal();
       }
       
       var filterByDate = function(){
           
           $container.find('tbody').children('tr').show();
           
           var selected =  $("#concepto_filter").multipleSelect('getSelects');

            $container.find('td.banco_concepto').filter(function(index){
                if($.inArray($(this).attr('id'),selected) == -1){
                    
                     $(this).closest('tr').hide();
                 }
            });
            

            var typeselected =  $("#tipo_filter").multipleSelect('getSelects');
            $container.find('tbody tr:visible').filter(function(index){
                var tr_tipo = ($(this).find('td').eq(2).attr('class') == 'ingreso') ? 'ingreso' : 'egreso';
                if($.inArray(tr_tipo,typeselected) == -1){
                    $(this).closest('tr').hide();
                }
            });
            
           var from = $container.find('#fecha_filter_from').val();
           var to = $container.find('#fecha_filter_to').val();

           //Si almenos colocaron el filtro from
           if(from != '' && to == ''){
               
               $container.find('tbody').children('tr').show();
               
                from = $container.find('#fecha_filter_from').datepicker( "getDate" );
                to = $container.find('#fecha_filter_to').datepicker( "getDate" );
                
                var selected =  $("select#concepto_filter").multipleSelect('getSelects');
                $container.find('td.banco_concepto').filter(function(index){
                    if($.inArray($(this).attr('id'),selected) == -1){
                         $(this).closest('tr').hide();
                     }
                });
                
                
                $container.find('tbody').children('tr:visible').filter(function(index){
                    var datejs = new Date($(this).find('td:first-child').attr('data-time'));
                    if(datejs.getTime() < from.getTime()){
                        $(this).hide();
                    }
                });
            }else if(from != '' && to != ''){
                $container.find('tbody').children('tr').show();
                
                from = $container.find('#fecha_filter_from').datepicker( "getDate" );
                to = $container.find('#fecha_filter_to').datepicker( "getDate" );
                
                var selected =  $("select#concepto_filter").multipleSelect('getSelects');
                $container.find('td.banco_concepto').filter(function(index){
                    if($.inArray($(this).attr('id'),selected) == -1){
                         $(this).closest('tr').hide();
                     }
                });
                
                $container.find('tbody').children('tr:visible').filter(function(index){
                    var datejs = new Date($(this).find('td:first-child').attr('data-time'));
                    if(datejs.getTime() >= from.getTime() && datejs.getTime() <= to.getTime()){
                        $(this).show();
                    }else{
                        $(this).hide();
                    }
                });
            }
                
            calcularTotalIngresosEgresos();
            
        }
        
        calcularTotalIngresosEgresos = function(){
            
            $container.find('#row_report').remove();
            $row_report = $('<tr id="row_report" class="green lighten-5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
            $td_ingresos = $row_report.find('td').eq(2);
            $td_egresos = $row_report.find('td').eq(3);

            var totalIngresos = 0;
            var totalEgresos = 0;
            $container.find('tbody').children('tr:visible').filter(function(index){
                totalIngresos = (totalIngresos + accounting.unformat($(this).find('td').eq(2).text()));
                totalEgresos = (totalEgresos + accounting.unformat($(this).find('td').eq(3).text()));
            });
            
             $td_ingresos.text(accounting.formatMoney(totalIngresos));
             $td_egresos.text(accounting.formatMoney(totalEgresos));
            
            $container.find('tbody').after($row_report);
            
            
        }

       var filterByConcepto = function(){
           $container.find('tbody').children('tr').show();
           var selected =  $("select#concepto_filter").multipleSelect('getSelects');
           $container.find('td.banco_concepto').filter(function(index){
               if($.inArray($(this).attr('id'),selected) == -1){
                    $(this).closest('tr').hide();
                }
           });  
       }
        
       var validateForm = function(parent){
               
            var isValid = true;
            parent.find('p.input-error-show').remove();
            
            if(parent.find('select[name=banco_tipomoviento]').val() == '' || parent.find('select[name=banco_tipomoviento]').val() == null){
                isValid = false;
                parent.find('select[name=banco_tipomoviento]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if(parent.find('input[name=banco_concepto]').val() == '' ){
                isValid = false;
                parent.find('input[name=banco_concepto]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if(parent.find('input[name=banco_cantidad]').val() == '' ){
                isValid = false;
                parent.find('input[name=banco_cantidad]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            if(parent.find('input[name=banco_fecha]').val() == '' ){
                isValid = false;
                parent.find('input[name=banco_fecha]').after('<p class="input-error-show"> <i class="tiny mdi-alert-error"></i>Este campo no puede ir vacio</p>'); 
            }
            
            return isValid;
                
       };
       
       var eliminarMovmiento = function(id){
           
           $.ajax({
            async:false,
            method:'GET',
            url:'/bancos/movimientos/eliminarmovmiento',
            success: function (modalHTML) {
                var source = $('<div id="active_modal">' + modalHTML + '</div>');
                $container.find('table').after(source);
                //Evento eliminar
                source.find('a.eliminar').on('click',function(){
                    $.ajax({
                        dataType: 'json',
                        async:false,
                        method:'POST',
                        data:{id:id},
                        url:'/bancos/movimientos/eliminarmovmiento',
                        success:function(data){
                            if(data.response == true){
                                $('#active_modal').children('.modal').closeModal();
                                $container.find('#balance').text(accounting.formatMoney(data.data.new_balance));
                                //Eliminamos el row
                                $('#active_modal').remove();
                                $container.find('tr#'+id).remove();
                                $('#movmiento_mensaje_eliminar').show();
                                calcularTotalIngresosEgresos();
                            }
                        }
                    });
                });
                $('#active_modal').children('.modal').openModal();
            }
            
        });
        
        
       }
       
       var onlyNumbers = function(e){
             -1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault();
        }
       
       
       plugin.init();
       
    }
 
})(jQuery)