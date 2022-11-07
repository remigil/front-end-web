 

<div class="row">
<div class="col-md-12">
    <br>
</div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div>
                <h3 style="text-align: center;">CEK LIST GIAT WAL PJR DITLANTAS <br>DAN WAL JAJARAN</h3>
            </div>
            <div class="col-md-12">
                <button class="btn btn-default pull-right add-row mb-3" style="float: inline-end;"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
                <table class="table table-bordered" id="editableTable">
                    <thead>
                        <tr>
                            <th style="display: none;">id</th>
                            <th>NOMOR LAMBUNG</th>
                            <th>IDENTITAS RT</th>
                            <th>DARI PUKUL</th>
                            <th>TUJUAN PUKUL</th>
                            <th>JUMLAH KENDARAAN YANG DIKAWAL</th>
                            <th>KET</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($data['getHT'] as $row): ?>
                            <tr data-id="1">
                                <td data-field="id" style="display: none;"><?php echo $row['id'];?></td>
                                <td data-field="no_lambung"><?php echo $row['no_lambung'];?></td>
                                <td data-field="identitas_rt"><?php echo $row['identitas_rt'];?></td>
                                <td data-field="dari_pukul"><?php echo $row['dari_pukul'];?></td>
                                <td data-field="tujuan_pukul"><?php echo $row['tujuan_pukul'];?></td>
                                <td data-field="jumlah_kendaraan"><?php echo $row['jumlah_kendaraan'];?></td>
                                <td data-field="ket"><?php echo $row['ket'];?></td>
                                <td style="text-align: center;">
                                    <a class="button button-small edit" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    &nbsp;&nbsp;
                                    <a class="button button-small hapus" onclick="deleteId('<?php echo $row['id'];?>')" title="Hapus">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr> 
                        <?php endforeach; ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 


<script>
    (function($, window, document, undefined) {
        var pluginName = "editable",
            defaults = {
                keyboard: true,
                dblclick: true,
                button: true,
                buttonSelector: ".edit",
                maintainWidth: true,
                dropdowns: {},
                edit: function() {},
                save: function() {},
                cancel: function() {}
            };

        function editable(element, options) {
            this.element = element;
            this.options = $.extend({}, defaults, options);

            this._defaults = defaults;
            this._name = pluginName;

            this.init();
        }

        editable.prototype = {
            init: function() {
            this.editing = false;

            if (this.options.dblclick) {
                $(this.element)
                .css('cursor', 'pointer')
                .bind('dblclick', this.toggle.bind(this));
            }

            if (this.options.button) {
                $(this.options.buttonSelector, this.element)
                .bind('click', this.toggle.bind(this));
            }
            },

            toggle: function(e) {
                e.preventDefault();

                this.editing = !this.editing;

                if (this.editing) {
                    this.edit();
                } else {
                    this.save();
                }
            },

            edit: function() {
                var instance = this,
                    values = {};

                $('td[data-field]', this.element).each(function() {
                    var input,
                    field = $(this).data('field'),
                    value = $(this).text(),
                    width = $(this).width();

                    values[field] = value;

                    $(this).empty();

                    if (instance.options.maintainWidth) {
                        $(this).width(width);
                    }

                    if (field in instance.options.dropdowns) {
                        input = $('<select></select>');

                        for (var i = 0; i < instance.options.dropdowns[field].length; i++) {
                            $('<option></option>')
                            .text(instance.options.dropdowns[field][i])
                            .appendTo(input);
                        };

                        input.val(value)
                        .data('old-value', value)
                        .dblclick(instance._captureEvent);
                    } else {
                        input = $('<input type="text" />')
                        .val(value)
                        .data('old-value', value)
                        .dblclick(instance._captureEvent);
                    }

                    input.appendTo(this);

                    if (instance.options.keyboard) {
                        input.keydown(instance._captureKey.bind(instance));
                    }
                });

                console.log({a:'edit', b:values});
                this.options.edit.bind(this.element)(values);
            },

            save: function() {
                var instance = this,
                    values = {};

                $('td[data-field]', this.element).each(function() {
                    var value = $(':input', this).val();

                    values[$(this).data('field')] = value;

                    $(this).empty()
                    .text(value);
                });

                this.options.save.bind(this.element)(values);
                console.log({a:'save', b:values['id']});
                $("#overlay").fadeIn(300);
                if(values['id'] == "" || values['id'] == null){
                    $.ajax({
                        type : "POST",
                        url : "<?php echo base_url();?>operasi/Ht/store", 
                        data : values, 
                        dataType : "JSON",
                        success : function(data){   
                            $("#overlay").fadeOut(300);
                            if(data['status'] == true){
                                Swal.fire(
                                `${data['message']}`, 
                                '',
                                'success'
                                ).then(function() {  
                                    // userDataTable.draw(); 
                                }); 
                            }else{
                                Swal.fire(
                                `${data['message']}`, 
                                '',
                                'error'
                                ).then(function() { 
                                });
                            } 
                            
                        }
                    });
                }else{
                    $.ajax({
                        type : "POST",
                        url : "<?php echo base_url();?>operasi/Ht/storeEdit", 
                        data : values, 
                        dataType : "JSON",
                        success : function(data){   
                            $("#overlay").fadeOut(300); 
                            if(data['status'] == true){
                                Swal.fire(
                                `${data['message']}`, 
                                '',
                                'success'
                                ).then(function() {  
                                    // userDataTable.draw(); 
                                }); 
                            }else{
                                Swal.fire(
                                `${data['message']}`, 
                                '',
                                'error'
                                ).then(function() { 
                                });
                            } 
                            
                        }
                    });
                }
            },

            cancel: function() {
                var instance = this,
                    values = {};

                $('td[data-field]', this.element).each(function() {
                    var value = $(':input', this).data('old-value');

                    values[$(this).data('field')] = value;

                    $(this).empty()
                    .text(value);
                });

                alert('cancel');
                this.options.cancel.bind(this.element)(values);
            },

            _captureEvent: function(e) {
                e.stopPropagation();
            },

            _captureKey: function(e) {
                if (e.which === 13) {
                    this.editing = false;
                    this.save();
                } else if (e.which === 27) {
                    this.editing = false;
                    this.cancel();
                }
            }
        };

        $.fn[pluginName] = function(options) {
            return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName,
                new editable(this, options));
            }
            });
        };
 

        })(jQuery, window, document);



       

        editTable();

        //custome editable starts
        function editTable(){
        
            $(function() {
                
                $('table tr').editable({
                    dropdowns: {
                        sex: ['Male', 'Female']
                    },
                    edit: function(values) {
                        $(".edit i", this)
                        .removeClass('fa-pencil-alt')
                        .addClass('fa-save')
                        .attr('title', 'Edit'); 
                    },
                    save: function(values) {
                        $(".edit i", this)
                        .removeClass('fa-save')
                        .addClass('fa-pencil-alt')
                        .attr('title', 'Simpan'); 
                    },
                    cancel: function(values) {
                        $(".hapus i", this)
                        .removeClass('fa-trash')
                        .addClass('fas fa-times')
                        .attr('title', 'Cancel');                     
                    }
                });
            });
        
        }

        $(".add-row").click(function(){
            $("#editableTable").find("tbody tr:first").before(`
            <tr>
                <td data-field="id" style="display: none;"></td>
                <td data-field="no_lambung"></td>
                <td data-field="identitas_rt"></td>
                <td data-field="dari_pukul"></td>
                <td data-field="tujuan_pukul"></td>
                <td data-field="jumlah_kendaraan"></td>
                <td data-field="ket"></td>
                <td style="text-align: center;">
                    <a class="button button-small edit" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                    </a>
                    
                    <a class="button button-small hapus" title="Hapus">
                    <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr> `);   
            editTable();  
            setTimeout(function(){   
                $("#editableTable").find("tbody tr:first td:last a[title='Edit']").click(); 
            }, 200); 
            
            setTimeout(function(){ 
                $("#editableTable").find("tbody tr:first td:first input[type='text']").focus();
            }, 300); 
            
            $("#editableTable").find("a[title='Hapus']").unbind('click').click(function(e){
                if (confirm("Are you sure you want to delete entire row?") == true) {
                    $(this).closest("tr").remove();
                } else {
                    
                } 
            }); 
        });

       

        $("#editableTable").find("a[title='Hapus']").click(function(e){    
             
                $(this).closest("tr").remove(); 
              
        });

        function deleteId(id) {
            // alert(id);   
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>operasi/Ht/delete", 
                data : {
                    'id': id, 
                }, 
                dataType : "JSON",
                success : function(result){  
                    this.options.save.bind(this.element)(values);
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'success'
                        ).then(function() {  
                            // userDataTable.draw(); 
                        }); 
                    }else{
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'error'
                        ).then(function() { 
                        });
                    } 
                    
                }
            });
        }


        // $(document).ready(function() {
        //     $('#editableTable').DataTable({ 
        //         responsive: true, 

        //         scrollX: true,

        //         sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

        //         buttons: ["excel", "csv", "pdf"],
        //     });
        // });

</script>