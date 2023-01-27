<!--loading bootstrap js-->
{{ HTML::script('assets/admin/js/jquery-1.9.1.js') }}
{{ HTML::script('assets/admin/js/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('assets/admin/js/jquery-ui.js') }}


{{ HTML::script('assets/admin/vendors/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}
{{ HTML::script('assets/admin/js/html5shiv.js') }}
{{ HTML::script('assets/admin/js/respond.min.js') }}
{{ HTML::script('assets/admin/vendors/metisMenu/jquery.metisMenu.js') }}
{{ HTML::script('assets/admin/vendors/slimScroll/jquery.slimscroll.js') }}
{{ HTML::script('assets/admin/vendors/jquery-cookie/jquery.cookie.js') }}
{{ HTML::script('assets/admin/js/jquery.menu.js') }}
{{ HTML::script('assets/admin/vendors/jquery-pace/pace.min.js') }}
{{ HTML::script('assets/admin/js/jquery.menu.js') }}


<!--LOADING SCRIPTS FOR PAGE-->
{{ HTML::script('assets/admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}
{{ HTML::script('assets/admin/vendors/moment/moment.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-clockface/js/clockface.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}
{{ HTML::script('assets/admin/vendors/bootstrap-switch/js/bootstrap-switch.min.js') }}
{{ HTML::script('assets/admin/vendors/jquery-maskedinput/jquery-maskedinput.js') }}
{{ HTML::script('assets/admin/js/form-components.js') }}

<!--LOADING SCRIPTS FOR PAGE-->
{{ HTML::script('assets/admin/vendors/tinymce/js/tinymce/tinymce.min.js') }}
{{ HTML::script('assets/admin/vendors/ckeditor/ckeditor.js') }}



{{ HTML::script('assets/admin/js/ui-tabs-accordions-navs.js') }}

<!--CORE JAVASCRIPT-->
{{ HTML::script('assets/admin/js/main.js') }}
{{ HTML::script('assets/admin/js/holder.js') }}

<!-- Validation Engine -->
{{ HTML::script('assets/admin/js/jQueryValidation/js/languages/jquery.validationEngine-en.js') }}
{{ HTML::script('assets/admin/js/jQueryValidation/js/jquery.validationEngine.js') }}

<script>
    /* CKFinder.setupCKEditor( null, { basePath : '/~yeelee72185perak/laravel/public/vendors/ckfinder/', rememberLastFolder : false } ) ; */

    $(document).ready(function() {
        $(document).on('click','#myTab li',function(){
            var classname = this.className;

            if(classname.search("main-cat") != -1){
                //createCookie('navCategories','main-cat',1);
                $.cookie('navCategories', 'main-cat',{ expires: 1, path: '/' });
            }
            if(classname.search("sub-cat") != -1){
                $.cookie('navCategories', 'sub-cat', { expires: 1, path: '/' });
                //createCookie('navCategories','sub-cat',1);
            }
        });

        //on window load
        window.onload=function() {
            var cat_tab = $.cookie('navCategories');
            if(cat_tab == 'sub-cat'){
                $('.nav-tabs a[href="#sub-category"]').tab('show');
            }
        }

        $(document).on('click','#side-menu li',function () {
            $.removeCookie('navCategories', { path: '/' }); // => true
        })

        $("#cat_id").change(function() {
            var cat_id = $("#cat_id").val();
            $.ajax({
                method: "GET",
                url: '<?php echo url('admin/enquiry_email/getsubcategory/'); ?>/' + cat_id,
                success: function(data) {
                    $("#subcat_id").html(data);
                    //$("#cat_id").trigger("chosen:updated");
                }
            });
        });
        
        $(".cat_id").change(function() {
            var cat_id = $(this).val();
            var id     = $(this).attr('id');
            $.ajax({
                method: "GET",
                url: '<?php echo url('admin/enquiry_email/getsubcategory/'); ?>/' + cat_id,
                success: function(data) {
                    $("#subcat_id"+id).html(data);
                }
            });
        });


        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        $(".datepicker").datepicker({autoclose: true});

//       $(".datepicker").datepicker({
//         format: {
//         /*
//          * Say our UI should display a week ahead,
//          * but textbox should store the actual date.
//          * This is useful if we need UI to select local dates,
//          * but store in UTC
//          */
//         toDisplay: function (date, format, language) {
//             var d = new Date(date);

//             var mth = monthNames[d.getMonth()];
//             var day = d.getDate();
//             var year = d.getFullYear();
//             if(day==1 || day==21 || day==31)
//             {
//               var tag= 'st';
//             }else if(day==2 || day==22 || day==32 )
//             {
//               var tag= 'nd';
//             }else if(day==3 || day==23)
//             {
//               var tag= 'rd';
//             }else
//             {
//               var tag = 'th';
//             }
//             var fdate = day+tag+' '+mth+', '+year;


//             //d.setDate(d.getDate() - 7);
//             //return d.toISOString();
//             return fdate;
//         },
//         toValue: function (date, format, language) {
//             //var d = new Date(date);
//             //d.setDate(d.getDate() + 7);
//             return date;
//         }
//     },
//     autoclose: true
// });

        $("#montage").validationEngine();
        $("#montageedit").validationEngine();

        $("#addvaccancy").validationEngine();
        $("#annualreport").validationEngine();

        $("#news").validationEngine();

        $("#career-apply-form").validationEngine();
        $("#newuser").validationEngine();
        $("#changepass").validationEngine();

        $("#editvaccancy").validationEngine();

        $("#add_enq_category").validationEngine();
        $("#add_enq_subcategory").validationEngine();
        $(".edit_sub_category").validationEngine();
        $("#add_enq_email").validationEngine();


        /* For Bootstrap Switch */



        $('.wholecheck').change(function() {
            if ($(this).prop('checked')) {
                $('.chkNumber').prop('checked', true);
            }
            else {
                $('.chkNumber').prop('checked', false);
            }
        });
        $('.wholecheck').trigger('change');

        $('.newscheck').change(function() {
            if ($(this).prop('checked')) {
                $('.chkNews').prop('checked', true);
            }
            else {
                $('.chkNews').prop('checked', false);
            }
        });
        $('.newscheck').trigger('change');




    });

    function createCookie(name,value,days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";
        document.cookie = name+"="+value+expires+"; path=/";
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name,"",-1);
    }


    function updateMapAdd(id, type)
    {
        var add = $('#map_address').val();
        var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q=" + add;
        if (type == 'search')
        {


            $("#" + id).attr("src", src);
        }

        if (type == 'save')
        {
            $('#' + id).attr("src", src);
            $('#right-block1-content').val(add);
        }
    }

    function updateMapAddContact(addId, id, type, url)
    {
        var helper = null;
        if (typeof url === 'undefined') {

            var add = $('#' + addId).val();
            var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q=" + add;
            helper = "com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q=" + add;
            if (type == 'search')
            {


                $("#mapmodal_" + id).attr("src", src);
            }

            if (type == 'save')
            {
                $('#map_' + id).attr("src", src);
                $('#' + id).val(helper);
                $('.msuccess').removeClass(hide);
                window.scrollTo(0, 0);
            }
        } else {

            if (url != null) {

                if (url.search("google") != -1) {

                    var x = null;   /// equ = add
                    var srcc = null;

                    if (url.search("mid") == -1) { //url not contain mid


                        var arr = url.split('/');
                        var y = arr[5];

                        /*	 if url contains search country    */
                        if (y != null && y.search("@") == -1 && y.search("%") == -1 && y.search("data") == -1) {

                            x = y.replace(/\+/g, ' ').replace(/\,/g, ' ');

                        } else {
                            var subStr = url.match("@(.*)z");
                            var f = subStr[1];
                            var llz = f.split(',');
                            //longitude
                            var mlong = llz[0];
                            //latitude
                            var mlat = llz[1];
                            //zoom defult=6
                            var zo = 6;
                            if (llz[2] != null) {
                                zo = llz[2];

                            }
                            x = mlong + " " + mlat + " &zoom=" + zo;


                        }
                        srcc = "https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + x;
                        helper = "com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + x;
                        if (type == 'search')
                        {


                            $("#mapmodal_" + id).attr("src", srcc);
                        }

                        if (type == 'save')
                        {
                            //alert(srcc);
                            $('#map_' + id).attr("src", srcc);
                            $('#' + id).val(helper);
                            updateUrl(url);
                        }

                    } else {
                        //url contain mid

                        var subStr = url.match("mid(.*)");
                        var f = subStr[0];
                        var sr = "https://www.google.com/maps/d/embed?" + f;
                        srcc = sr;

                        var zzzo = srcc.match("google.(.*)");
                        helper = zzzo[1];
                        if (type == 'search')
                        {


                            $("#mapmodal_" + id).attr("src", srcc);
                        }

                        if (type == 'save')
                        {
                            //alert(srcc);
                            $('#map_' + id).attr("src", srcc);
                            $('#' + id).val(helper);
                            updateUrl(url);
                        }
                    }
                } else {
                    $('.mfail').removeClass('hide');
                    window.scrollTo(0, 0);
                }
            } else {
                $('.mfail').removeClass('hide');
                window.scrollTo(0, 0);
            }
        }//end else if => url defined





    }



    $('.modal').on('shown.bs.modal', function(e) {

        $(this).find("*[contenteditable='false']").each(function() {
            var name;
            for (name in CKEDITOR.instances) {
                var instance = CKEDITOR.instances[name];
                if (this && this == instance.element.$) {
                    instance.destroy(true);
                }
            }
            $(this).attr('contenteditable', true);

            var content_id = $(this).attr('id');

            var editor_content = $('#' + content_id).html();
            var cont_length = $('#' + content_id).children().length;

            if (cont_length == 0)
            {
                $('#' + content_id).html('Click Here to edit Content');
            }


            CKEDITOR.inline(this, {
                on: {
                    blur: function(event) {
                        //alert('hisdsd');

                        var data = event.editor.getData();
                        //alert('data is '+ data);

                        $('#textarea-' + content_id).text(data);
                        /* var request = jQuery.ajax({
                         url: "/admin/cms-pages/inline-update",
                         type: "POST",
                         data: {
                         content : data,
                         content_id : content_id,
                         tpl : tpl
                         },
                         dataType: "html"
                         });
                         */

                    }
                }
            });


        });
    });

    $.fn.modal.Constructor.prototype.enforceFocus = function() {
        modal_this = this;
        $(document).on('focusin.modal', function(e) {


            if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
                    // add whatever conditions you need here:
                    &&
                    !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
                modal_this.$element.focus();
            }
        });
    };

    $.fn.bootstrapSwitch.defaults.onText = 'active';
    $.fn.bootstrapSwitch.defaults.offText = 'inactive';
    $.fn.bootstrapSwitch.defaults.handleWidth = 'auto';
    $.fn.bootstrapSwitch.defaults.onColor = 'success';
    $.fn.bootstrapSwitch.defaults.offColor = 'danger';

    $('.make-switch input[type="checkbox"]').bootstrapSwitch();
    $('.make-switch input[type="checkbox"]').on('switchChange.bootstrapSwitch', function(event, state) {

        if (state == true)
        {
            $(this).val(1);
        }
        else
        {
            $(this).val(0);
        }

//alert(event);
// alert(state);
    });
    function div_val(id_info) {

        var textarea_html = $("#" + id_info).html();
        $("#textarea-" + id_info).html(textarea_html);
    }



    function updateUrl(r_url) {

        const path = "http://www.yeelee.com.my/";

        var BASE = path + 'updateUrl';

        var request = $.ajax({
            async: true,
            url: BASE,
            type: "POST",
            data: {
                required_url: r_url
            }
        });

        request.done(function(msg, status, xmlhh) {
            //alert(msg);
            if (msg == "success") {
                $('.msuccess').removeClass('hide');
                window.scrollTo(0, 0);
            }
            else {
                $('.mfail').removeClass('hide');
                window.scrollTo(0, 0);
            }
        });

    }
    function Addsavepage(FormName, Fieldvalue)
    {

        document.getElementById(FormName).preview.value = Fieldvalue;
        document.getElementById(FormName).submit();
        return true;
    }


    function deletepdf(id) {
//$('#modal-delete-cover'+id+'').modal('hide');

        $.ajax({
            type: "POST",
            url: "{{url().'/admin/annual/deletepdf'}}",
            data: {'sementrasbannerid': id}, // serializes the form's elements.
            success: function(data)
            {
                $('#modal-edit-slidingbanner' + id + '').find('#succ').append(data);
                //$('#succ').append(data);
                //alert(data); // show response from the php script.
            }
        });
    }

    function deletecover(id)
    {
//$('#modal-delete-pdf'+id+'').modal('hide');
//alert(id);
        $.ajax({
            type: "POST",
            url: "{{url().'/admin/annual/deletecover'}}",
            data: {'sementrasbannerid': id}, // serializes the form's elements.
            success: function(data)
            {
                $('#modal-edit-slidingbanner' + id + '').find('#succ').append(data);
                //$('#succ').append(data);
                //salert(data); // show response from the php script.
            }
        });

    }










</script>










{{ HTML::script('assets/admin/js/content-editing-save.js') }}