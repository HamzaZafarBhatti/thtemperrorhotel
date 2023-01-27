<!--loading bootstrap js-->
{{ HTML::script('js/jquery-1.9.1.js');}}
{{ HTML::script('admin_html/vendors/jquery-pace/pace.min.js');}}
{{ HTML::script('js/loading-before.js');}}
{{ HTML::script('js/jquery-migrate-1.2.1.min.js');}}
{{ HTML::script('js/jquery-ui.js');}}
{{ HTML::script('admin_html/vendors/bootstrap/js/bootstrap.min.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js');}}
{{ HTML::script('js/html5shiv.js');}}
{{ HTML::script('js/respond.min.js');}}
{{ HTML::script('admin_html/vendors/metisMenu/jquery.metisMenu.js');}}
{{ HTML::script('admin_html/vendors/slimScroll/jquery.slimscroll.js');}}
{{ HTML::script('admin_html/vendors/jquery-cookie/jquery.cookie.js');}}
{{ HTML::script('js/jquery.menu.js');}}

<!--LOADING SCRIPTS FOR PAGE-->
{{ HTML::script('admin_html/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-daterangepicker/daterangepicker.js');}}
{{ HTML::script('admin_html/vendors/moment/moment.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-clockface/js/clockface.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js');}}
{{ HTML::script('admin_html/vendors/bootstrap-switch/js/bootstrap-switch.min.js');}}
{{ HTML::script('admin_html/vendors/jquery-maskedinput/jquery-maskedinput.js');}}
{{ HTML::script('js/form-components.js');}}

<!--LOADING SCRIPTS FOR PAGE-->
{{ HTML::script('admin_html/vendors/tinymce/js/tinymce/tinymce.min.js');}}
{{ HTML::script('admin_html/vendors/ckeditor/ckeditor.js');}}
{{ HTML::script('admin_html/vendors/ckfinder/ckfinder.js');}}
{{ HTML::script('js/content-editing-save.js');}}
{{ HTML::script('js/ui-tabs-accordions-navs.js');}}
<!--CORE JAVASCRIPT-->
{{ HTML::script('js/main.js');}}
{{ HTML::script('js/holder.js');}}

<!-- Validation Engine -->
{{ HTML::script('validationengine/js/languages/jquery.validationEngine-en.js');}}
{{ HTML::script('validationengine/js/jquery.validationEngine.js');}}
<script>
    /* CKFinder.setupCKEditor( null, { basePath : '/~yeelee72185perak/laravel/public/vendors/ckfinder/', rememberLastFolder : false } ) ; */

    $(document).ready(function() {
        $("#career-apply-form").validationEngine();
        $("#newuser").validationEngine();
        $("#changepass").validationEngine();
        $("#addvaccancy").validationEngine();
        $("#editvaccancy").validationEngine();
        
        
        

        /* For Bootstrap Switch */




    });
    function updateMapAdd(id, type)
    {
        var add = $('#map_address').val();
        var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + add;
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
            var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + add;
            helper = "com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + add;
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
            CKEDITOR.inline(this);
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

</script>