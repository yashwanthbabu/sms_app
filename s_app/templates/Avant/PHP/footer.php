    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li>AVANT &copy; 2014</li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

<?php
function scripttag($address) {echo "<script type='text/javascript' src='$address'></script> \n";}

    //The following plugins are used for the functionality of the theme
    scripttag('assets/js/jquery-1.10.2.min.js');
    scripttag('assets/js/jqueryui-1.10.3.min.js');
    scripttag('assets/js/bootstrap.min.js');
    scripttag('assets/js/enquire.js');
    scripttag('assets/js/jquery.cookie.js');
    scripttag('assets/js/jquery.nicescroll.min.js');

    //Following plugins can be removed based on usage
    //Used in multiple places
    scripttag('assets/plugins/codeprettifier/prettify.js');     //Google Code Prettifier
    scripttag('assets/plugins/easypiechart/jquery.easypiechart.min.js');
    scripttag("assets/plugins/sparklines/jquery.sparklines.min.js");
    scripttag("assets/plugins/form-toggle/toggle.min.js");      // Toggle buttons \n ";


$pageName = basename($_SERVER['PHP_SELF']);
if ($pageName == "maps-vector.php") {
    // echo "//Jquery VMap Plugins \n";
    scripttag("assets/plugins/jqvmap/jquery.vmap.min.js");
    scripttag("assets/plugins/jqvmap/maps/jquery.vmap.world.js");
    scripttag("assets/plugins/jqvmap/maps/jquery.vmap.europe.js");
    scripttag("assets/plugins/jqvmap/maps/jquery.vmap.usa.js");
    scripttag("assets/plugins/jqvmap/data/jquery.vmap.sampledata.js");
    scripttag("assets/demo/demos-jqvmap.js");
} elseif ($pageName == "ui-modals.php") {
    scripttag("assets/plugins/bootbox/bootbox.min.js");
    scripttag("assets/demo/demo-modals.js");
} elseif ($pageName == "ui-paginations.php") {
    scripttag("assets/plugins/form-daterangepicker/moment.min.js");
    scripttag("assets/plugins/form-datepicker/js/bootstrap-datepicker.js");
    scripttag("assets/plugins/datepaginator/bootstrap-datepaginator.js");
    scripttag("assets/demo/demo-paginations.js");
} elseif ($pageName == "form-dropzone.php") {
    scripttag("assets/plugins/dropzone/dropzone.min.js");
} elseif ($pageName == "gallery.php") {
    scripttag("assets/plugins/mixitup/jquery.mixitup.min.js");
    scripttag("assets/demo/demo-gallery-simple.js");
} elseif ($pageName == "form-components.php") {
    // echo "//Form Components \n ";
    scripttag("assets/plugins/form-multiselect/js/jquery.multi-select.min.js");  // Multiselect Plugin \n ";
    scripttag("assets/plugins/quicksearch/jquery.quicksearch.min.js");           // Quicksearch to go with Multisearch Plugin \n ";
    scripttag("assets/plugins/form-typeahead/typeahead.min.js");                 // Typeahead for Autocomplete \n ";
    scripttag("assets/plugins/form-select2/select2.min.js");                     // Advanced Select Boxes\n ";
    scripttag("assets/plugins/form-autosize/jquery.autosize-min.js");            // Autogrow Text Area\n ";
    scripttag("assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js");// Color Picker \n ";
    scripttag("assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js"); // Time Picker. Requires jQuery UI \n ";
    scripttag("assets/plugins/form-daterangepicker/daterangepicker.min.js");     // Date Range Picker \n ";
    scripttag("assets/plugins/form-datepicker/js/bootstrap-datepicker.js");      // Date Picker
    scripttag("assets/plugins/form-daterangepicker/moment.min.js");              // Moment.js for Date Range Picker \n ";
    scripttag("assets/plugins/form-fseditor/jquery.fseditor-min.js");            // Fullscreen Editor \n ";
    scripttag("assets/plugins/form-jasnyupload/fileinput.js");                   // File Input \n ";
    scripttag("assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js");     // Tokenfield \n ";
    scripttag("assets/demo/demo-formcomponents.js");
} elseif ($pageName == "form-ckeditor.php") {
    scripttag("assets/plugins/form-ckeditor/ckeditor.js");                       // WYSIWYG CKEditor \n ";
} elseif ($pageName == "form-xeditable.php") {
    scripttag("assets/plugins/form-daterangepicker/moment.min.js");
    scripttag("assets/plugins/form-xeditable/bootstrap3-editable/js/bootstrap-editable.min.js");
    scripttag("assets/demo/demo-xeditable.js");
} elseif ($pageName == "index.php") {
    scripttag("assets/plugins/fullcalendar/fullcalendar.min.js");
    scripttag("assets/plugins/form-daterangepicker/daterangepicker.min.js");
    scripttag("assets/plugins/form-daterangepicker/moment.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.orderBars.min.js");
    scripttag("assets/plugins/pulsate/jQuery.pulsate.min.js");
    scripttag("assets/demo/demo-index.js");
} elseif ($pageName == "tables-data.php") {
    scripttag("assets/plugins/datatables/jquery.dataTables.min.js");
    scripttag("assets/plugins/datatables/dataTables.bootstrap.js");
    scripttag("assets/demo/demo-datatables.js");
} elseif ($pageName == "charts-flot.php") {
    scripttag("assets/plugins/charts-flot/jquery.flot.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.stack.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.pie.min.js");
    scripttag("assets/plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("assets/demo/demo-flotgraph.js");
} elseif ($pageName == "form-wizard.php") {
    scripttag("assets/plugins/form-validation/jquery.validate.min.js");
    scripttag("assets/plugins/form-stepy/jquery.stepy.js");
    scripttag("assets/demo/demo-formwizard.js");
} elseif ($pageName == "tables-editable.php") {
    scripttag("assets/plugins/datatables/jquery.dataTables.min.js");
    // echo "// Editable Table";
    scripttag("assets/plugins/datatables/TableTools.js");
    scripttag("assets/plugins/jquery-editable/jquery.editable.min.js");
    scripttag("assets/plugins/datatables/dataTables.editor.js");
    scripttag("assets/plugins/datatables/dataTables.editor.bootstrap.js");
    scripttag("assets/plugins/datatables/dataTables.bootstrap.js");
    scripttag("assets/demo/demo-tableeditable.js");
} elseif ($pageName == "maps-google.php") {
    // echo "//Map";
    scripttag("http://maps.google.com/maps/api/js?sensor=true");
    scripttag("assets/plugins/gmaps/gmaps.js");
    scripttag("assets/demo/demo-gmaps.js");
} elseif ($pageName == "calendar.php") {
    // echo "// Calendar";
    scripttag("assets/plugins/fullcalendar/fullcalendar.min.js");
    scripttag("assets/demo/demo-calendar.js");
} elseif ($pageName == "ui-sliders.php") {
    // echo "//  jQuery Dials/Knobs and Sky Loader";
    scripttag("assets/plugins/knob/jquery.knob.min.js");
    scripttag("assets/plugins/progress-skylo/skylo.js");
    scripttag("assets/demo/demo-slider.js");
} elseif ($pageName == "form-validation.php") {
    // echo "//  Form Validation";
    scripttag("assets/plugins/form-parsley/parsley.min.js");
    scripttag("assets/demo/demo-formvalidation.js");
} elseif ($pageName == "form-masks.php") {
    scripttag("assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js");
    scripttag("assets/demo/demo-mask.js");
} elseif ($pageName == "tables-data.php") {
    scripttag("assets/demo/demo-datatables.js");
} elseif ($pageName == "form-fileupload.php") {
    // echo "// File Upload";
    scripttag("assets/plugins/jquery-fileupload/js/vendor/jquery.ui.widget.js");
    scripttag("assets/plugins/jquery-fileupload/js/tmpl.min.js");
    scripttag("assets/plugins/jquery-fileupload/js/load-image.min.js");
    scripttag("assets/plugins/jquery-fileupload/js/canvas-to-blob.min.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.blueimp-gallery.min.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload-process.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload-image.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload-audio.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload-video.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload-validate.js");
    scripttag("assets/plugins/jquery-fileupload/js/jquery.fileupload-ui.js");
    scripttag("assets/plugins/jquery-fileupload/js/main.js");
} elseif($pageName=="ui-tour.php"){
    scripttag("assets/plugins/bootstro.js/bootstro.min.js");
    scripttag("assets/demo/demo-tour.js");
} elseif($pageName=="charts-canvas.php"){
    scripttag("assets/plugins/charts-chartjs/Chart.min.js");
    scripttag("assets/demo/demo-chartjs.js");
} elseif ($pageName == "charts-svg.php") {
   // echo "//Charts Morris";
   scripttag("assets/plugins/charts-morrisjs/raphael.min.js");
   scripttag("assets/plugins/charts-morrisjs/morris.min.js");
   scripttag("assets/demo/demo-morrisjs.js");
} elseif ($pageName == "charts-inline.php") {
    // echo "// Inline Chart";
    scripttag("assets/plugins/sparklines/jquery.sparklines.min.js");
    scripttag("assets/demo/demo-inlinecharts.js");
} elseif($pageName=="form-duallistbox.php"){
    // echo "//Dualbox";
    scripttag("assets/plugins/duallistbox/jquery.bootstrap-duallistbox.js");
    scripttag("assets/demo/demo-dualbox.js");
}elseif($pageName=="form-imagecrop.php"){
    scripttag("assets/plugins/jcrop/js/jquery.Jcrop.min.js");
    scripttag("assets/demo/demo-imagecrop.js");
}elseif($pageName=="ui-nestable.php"){
    // echo "// Ui Nestable";
    scripttag("assets/plugins/form-nestable/jquery.nestable.min.js");
    scripttag("assets/plugins/form-nestable/app.min.js");
    scripttag("assets/demo/demo-nestable.min.js");
}elseif($pageName=="ui-alerts.php"){
    scripttag("assets/plugins/pines-notify/jquery.pnotify.min.js");
    scripttag("assets/plugins/pulsate/jQuery.pulsate.min.js");
    scripttag("assets/demo/demo-alerts.js");
}elseif($pageName=="extras-chatroom.php"){
    scripttag("assets/demo/demo-chatroom.js");
}

    scripttag('assets/js/placeholdr.js');  //IE8 Placeholders
    scripttag('assets/js/application.js');
    scripttag('assets/demo/demo.js');

?>

</body>
</html>