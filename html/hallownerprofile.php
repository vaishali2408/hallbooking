<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.21340" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.21340" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.21340" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.21340" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/file-uploader/fileuploader.js?v=3.3.21340"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.21340" type="text/javascript"></script>
<script type="text/javascript"> JotForm.init(function(){ JotForm.setPhoneMaskingValidator( 'input_6_full', '+91 #####-##### ' ); JotForm.newDefaultTheme = true; JotForm.extendsNewTheme = false; JotForm.newPaymentUIForNewCreatedForms = true; JotForm.newPaymentUI = true; JotForm.alterTexts(undefined); JotForm.clearFieldOnHide="disable"; setTimeout(function() { JotForm.initMultipleUploads(); }, 2); JotForm.submitError="jumpToFirstError"; /*INIT-END*/ }); JotForm.prepareCalculationsOnTheFly([null,{"name":"profileCreation","qid":"1","text":"PROFILE CREATION FORM","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"name3","qid":"3","text":"NAME","type":"control_fullname"},{"description":"","name":"email4","qid":"4","subLabel":"example@example.com","text":"EMAIL","type":"control_email"},{"description":"","name":"address5","qid":"5","text":"ADDRESS","type":"control_address"},{"description":"","name":"contactNumber","qid":"6","text":"CONTACT NUMBER","type":"control_phone"},{"description":"","name":"uploadYour","qid":"7","subLabel":"","text":"UPLOAD YOUR IMAGE","type":"control_fileupload"}]); setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"profileCreation","qid":"1","text":"PROFILE CREATION FORM","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"name3","qid":"3","text":"NAME","type":"control_fullname"},{"description":"","name":"email4","qid":"4","subLabel":"example@example.com","text":"EMAIL","type":"control_email"},{"description":"","name":"address5","qid":"5","text":"ADDRESS","type":"control_address"},{"description":"","name":"contactNumber","qid":"6","text":"CONTACT NUMBER","type":"control_phone"},{"description":"","name":"uploadYour","qid":"7","subLabel":"","text":"UPLOAD YOUR IMAGE","type":"control_fileupload"}]);}, 20); </script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.21340" />
<link id="custom-font" type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/opt/google-fonts/Candal/fontface.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.21340" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.21340" />
<style type="text/css" id="form-designer-style">
   /* Injected CSS Code */
   body
   {
     background-image: linear-gradient(to right,#2193b0,#6dd5ed);
   }

   .topnav {
     background-color: #333;
     overflow: hidden;
   }

   /* Style the links inside the navigation bar */
   .topnav a {
     float: left;
     display: block;
     color: #f2f2f2;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
     font-size: 17px;
     font-family:times;
   }

   /* Change the color of links on hover */
   .topnav a:hover {
     background-color: #ddd;
     color: black;
   }

   /* Hide the link that should open and close the topnav on small screens */
   .topnav .icon {
     display: none;
   }
   @media screen and (max-width: 600px) {
     .topnav a:not(:first-child) {display: none;}
     .topnav a.icon {
       float: right;
       display: block;
     }
   }
@import "https://fonts.googleapis.com/css?family=Candal:light,lightitalic,normal,italic,bold,bolditalic";
*,
*:after,
*:before { box-sizing: border-box;
}
.form-all { font-family: "Candal", sans-serif;
}
.main .jotform-form { width: 100%; padding: 0 3%;
}
div.form-all { display: flex; flex-direction: column; width: 100%; max-width: 752px; margin: 72px auto;
}
.form-line.form-line-active { -webkit-transition-property: all; -moz-transition-property: all; -ms-transition-property: all; -o-transition-property: all; transition-property: all; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; background-color: #f1f5ff;
}
.form-label-left,
.form-label-right { width: 230px;
}
.form-label { display: inline-block; font-size: 16px; font-weight: 500; word-break: break-word;
}
.form-label.form-label-auto { width: 100%; margin-bottom: 14px;
}
.form-line [data-layout="full"] { width: 100%;
}
.form-line [data-layout="half"] { width: calc(50% - 8px);
}
.form-label-top { width: 100%; margin-bottom: 14px;
}
.form-label:not(.form-label-top) { margin-right: 10px; margin-top: .625em; margin-bottom: .625em;
}
.form-label-right { text-align: right;
}
.form-all { font-size: 16px;
}
.form-label { font-weight: bold;
}
.form-checkbox-item label,
.form-radio-item label { font-weight: 500;
}
li.form-line { margin-top: 12px; margin-bottom: 12px;
}
.form-line { padding: 12px 10px;
}
.supernova .form-all,
.form-all { border-radius: 20px;
}
.form-section:first-child { border-radius: 20px 20px 0 0;
}
.form-section:last-child { border-radius: 0 0 20px 20px;
}
.form-section { padding: 0px 38px;
}
.form-textbox,
.form-textarea { padding: 1px 10px 1px 10px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input { background-color: #ffffff;
}
.form-label { margin-bottom: 1000px; margin-right: 0;
}
.form-label { font-family: "Candal", sans-serif;
}
.form-line-column { width: calc(50% - 8px);
}
.form-line-column.form-line-column-clear { width: calc(43%);
}
.form-iframe-container .formFooter { font-size: 16px;
}
.form-iframe-container .formFooter-leftSide { margin-left: 52px; margin-right: 0;
}
.form-iframe-container .formFooter-rightSide { position: absolute; right: 34%;
}
.form-checkbox-item label,
.form-checkbox-item span,
.form-radio-item label,
.form-radio-item span { color: #404a64;
}
.form-radio-item,
.form-checkbox-item { padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child { padding-bottom: 0;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item { width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div { position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before { display: inline-block; vertical-align: middle; left: 0; width: 20px; height: 20px;
}
.form-checkbox-item input,
.form-radio-item input { margin-top: 2px;
}
.form-checkbox-item .form-checkbox:checked + label:before,
.form-checkbox-item .form-checkbox:checked + span:before { background-color: #2e69ff; border-color: #2e69ff;
}
.form-radio-item .form-radio:checked + label:before,
.form-radio-item .form-radio:checked + span:before { border-color: #2e69ff;
}
.form-radio-item .form-radio:checked + label:after,
.form-radio-item .form-radio:checked + span:after { background-color: #2e69ff;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next { font-size: 1em; padding: 9px 15px; font-family: "Candal", sans-serif; font-size: 16px; font-weight: normal;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print { font-size: 1em; padding: 9px 15px; font-family: "Candal", sans-serif; font-size: 16px; font-weight: normal;
}
li[data-type="control_image"] div { text-align: left;
}
li[data-type="control_image"] img { border: none; border-width: 0px !important; border-style: solid !important; border-color: false !important;
}
.supernova { height: 100%; background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-attachment: fixed; background-size: auto; background-size: cover;
}
.supernova { background-image: none; background-image: url("https://images.all-free-download.com/images/graphicthumb/cooperation_handshake_picture_170365.jpg");
}
#stage { background-image: none; background-image: url("https://images.all-free-download.com/images/graphicthumb/cooperation_handshake_picture_170365.jpg");
}
/* | */
.form-all { background-repeat: no-repeat; background-attachment: scroll; background-position: center top; background-repeat: repeat;
}
.form-header-group { background-repeat: no-repeat; background-attachment: scroll; background-position: center top;
}
.header-large h1.form-header { font-size: 2em;
}
.header-large h2.form-header { font-size: 1.5em;
}
.header-large h3.form-header { font-size: 1.17em;
}
.header-large h1 + .form-subHeader { font-size: 1em;
}
.header-large h2 + .form-subHeader { font-size: .875em;
}
.header-large h3 + .form-subHeader { font-size: .75em;
}
.header-default h1.form-header { font-size: 2em;
}
.header-default h2.form-header { font-size: 1.5em;
}
.header-default h3.form-header { font-size: 1.17em;
}
.header-default h1 + .form-subHeader { font-size: 1em;
}
.header-default h2 + .form-subHeader { font-size: .875em;
}
.header-default h3 + .form-subHeader { font-size: .75em;
}
.header-small h1.form-header { font-size: 2em;
}
.header-small h2.form-header { font-size: 1.5em;
}
.header-small h3.form-header { font-size: 1.17em;
}
.header-small h1 + .form-subHeader { font-size: 1em;
}
.header-small h2 + .form-subHeader { font-size: .875em;
}
.header-small h3 + .form-subHeader { font-size: .75em;
}
.form-header-group { text-align: left;
}
.form-header-group { font-family: "Candal", sans-serif;
}
div.form-header-group.header-large { margin: 0px -38px;
}
div.form-header-group.header-large { padding: 40px 52px;
}
.form-line-error { overflow: hidden; -webkit-transition-property: none; -moz-transition-property: none; -ms-transition-property: none; -o-transition-property: none; transition-property: none; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; background-color: #ffd6d6;
}
.form-line-error .form-error-message { background-color: #f23a3c; clear: both; float: none;
}
.form-line-error .form-error-message .form-error-arrow { border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error { border: 1px solid #f23a3c; box-shadow: 0 0 3px #f23a3c;
}
.supernova { background-color: #ecedf3;
}
.form-all { background-color: #ffffff;
}
.appointmentCalendarContainer .monthYearPicker .pickerItem select,
.appointmentCalendarContainer .currentDate,
.appointmentCalendar .calendarDay { color: #2c3345;
}
li[data-type=control_fileupload] .qq-upload-button { color: #2c3345;
}
.signature-wrapper,
.signature-wrapper .pad,
.jSignature,
.signature-pad-passive,
.signature-pad-wrapper { color: #2c3345;
}
.form-dropdown,
.form-textarea,
.form-textbox,
.form-checkbox-item .form-checkbox + label:before,
.form-radio-item .form-radio + label:before,
.form-radio-item .form-radio + span:before,
.form-checkbox-item .form-checkbox + span:before,
.rating-item label,
.signature-wrapper,
.signature-pad-passive,
.form-dropdown,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input,
.appointmentCalendarContainer { border-color: #c3cad8; background-color: #ffffff;
}
.form-matrix-column-headers,
.form-matrix-table td,
.form-matrix-table td:last-child,
.form-matrix-table th,
.form-matrix-table th:last-child,
.form-matrix-table tr:last-child td,
.form-matrix-table tr:last-child th,
.form-matrix-table tr:not([role=group]) + tr[role=group] th,
.form-matrix-column-headers,
.form-matrix-table td,
.form-matrix-table td:last-child,
.form-matrix-table th,
.form-matrix-table th:last-child,
.form-matrix-table tr:last-child td,
.form-matrix-table tr:last-child th,
.form-matrix-table tr:not([role=group]) + tr[role=group] th,
.form-matrix-headers.form-matrix-column-headers,
.appointmentCalendarContainer .monthYearPicker .pickerItem + .pickerItem,
.appointmentCalendarContainer .monthYearPicker,
.isSelected .form-matrix-column-headers:nth-last-of-type(2),
.form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
.form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
.form-line[data-payment="true"] .payment_footer.new_ui,
li[data-type=control_fileupload] .qq-upload-button { border-color: #c3cad8;
}
li[data-type="control_datetime"] .extended .allowTime-container + .form-sub-label-container { background-color: #ffffff; color: #2c3345;
}
.form-subHeader,
span.form-sub-label { color: #57647e;
}
li[data-type=control_fileupload] .qq-upload-button { background-color: #ffffff;
}
.rating-item label { color: #8894ab;
}
.rating-item input:focus + label,
.rating-item input:hover + label { color: #ffffff; background-color: #96b4ff; border-color: #2e69ff;
}
.form-checkbox + label:before,
.form-radio + label:before,
.form-radio + span:before,
.form-checkbox + span:before { background-color: #ffffff; border-color: #c3cad8; color: #2c3345;
}
.form-radio-item .form-radio:checked + label:before,
.form-radio-item .form-radio:checked + span:before { border-color: #2e69ff;
}
.form-radio-item .form-radio:checked + label:after,
.form-radio-item .form-radio:checked + span:after { color: #ffffff; background-color: #2e69ff; border-color: #c3cad8;
}
input.form-radio:checked + label:after,
input.form-checkbox:checked + label:after,
.form-line[data-payment="true"] .form-product-item .p_checkbox .checked { color: #ffffff; background-color: #2e69ff; border-color: #c3cad8;
}
.rating-item input:checked + label { background-color: #2e69ff; border-color: #c3cad8; color: #ffffff;
}
.form-dropdown:focus,
.form-textarea:focus,
.form-textbox:focus,
.form-checkbox:focus + label:before,
.form-radio:focus + label:before { border-color: #2e69ff; box-shadow: #f1f5ff;
}
.appointmentCalendarContainer,
.appointmentSlot,
.rating-item-title.for-to > label:first-child,
.rating-item-title.for-from > label:first-child,
.rating-item-title .editor-container * { background: none;
}
.rating-item-title.for-to > label:first-child,
.rating-item-title.for-from > label:first-child,
.rating-item-title .editor-container * { color: #8894ab;
}
.JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:after,
.JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before { background-color: #909191;
}
.appointmentSlot,
.appointmentCalendar .calendarDay.isToday .calendarDayEach { color: #4c72fb; border-color: #4c72fb;
}
.appointmentSlot:not(.disabled):not(.active):hover { background-color: #96b4ff;
}
.form-textbox::placeholder,
.form-dropdown:not(.time-dropdown):not(:required),
.form-dropdown:not(:required),
.form-dropdown:required:invalid { color: #8894ab;
}
li[data-type=control_fileupload] .jfUpload-heading { color: #2c3345;
}
.appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach { border-color: #4c72fb;
}
.appointmentCalendar .calendarDay.isActive .calendarDayEach,
.appointmentCalendar .calendarDay:after,
.appointmentFieldRow.forSelectedDate { background-color: #4c72fb; border-color: #4c72fb; color: #FFFFFF;
}
@keyframes indicate { 0% { color: #4c72fb; background-color: transparent; } 100% { color: #fff; background-color: #4c72fb; }
}
.appointmentSlot.active { animation: indicate 0.2s linear forwards;
}
.appointmentCalendar .calendarDay.isUnavailable ::placeholder,
.appointmentCalendar .calendarDay.isUnavailable { color: #cad0dd;
}
.appointmentCalendar .calendarDay.isUnavailable ::placeholder,
.appointmentCalendar .calendarDay.isUnavailable { color: #e5eaf4;
}
.appointmentDayPickerButton { background-color: #e5eaf4;
}
.form-collapse-table,
.form-collapse-table:hover { background-color: #e5e7f2; color: #2c3345;
}
.form-sacl-button.jf-form-buttons,
.form-submit-print.jf-form-buttons { color: #2c3345; border-color: #c3cad8; background-color: #ffffff;
}
.form-pagebreak-next:hover { background-color: #2554cc; border-color: #2554cc;
}
.form-pagebreak-back:hover { background-color: #ced0da; border-color: #ced0da;
}
.form-pagebreak-next { background-color: #2e69ff; border-color: #2e69ff; color: #ffffff;
}
.form-pagebreak-back { background-color: #e5e7f2; border-color: #e5e7f2; color: #2c3345;
}
.form-pagebreak,
.form-pagebreak > div,
.form-buttons-wrapper,
.form-pagebreak,
.form-submit-clear-wrapper,
.form-header-group { border-color: #d7d8e1;
}
.submit-button { background-color: #18bd5b; border-color: #18bd5b;
}
.submit-button:hover { background-color: #16aa52; border-color: #16aa52;
}
.form-matrix-headers.form-matrix-column-headers,
.form-matrix-row-headers,
.appointmentCalendar .dayOfWeek { background-color: #e5eaf4; color: #2c3345;
}
.form-spinner-button-container > * { background-color: #f4f4f7; color: #2c3345;
}
.clear-pad-btn { background-color: #e7effe; color: #2c3345;
}
.form-line-active { background-color: #f1f5ff;
}
.form-line-error { background-color: #ffd6d6;
}
.appointmentField .timezonePickerName:before { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjMTExMTExIi8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTgwNDdINy4xNjQwNlY4Ljc1NjU5TDExLjM0MzIgMTEuMjY0MUwxMS45NDAyIDEwLjI4NDlMOC4zNTgwOSA4LjE1OTU3VjMuOTgwNDdaIiBmaWxsPSIjMTExMTExIi8+Cjwvc3ZnPgo=);
}
.form-spinner-button.form-spinner-up:before { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNUw3LjUgNy41TDEyLjUgNy41QzEyLjc3NiA3LjUgMTMgNy4yNzYgMTMgN0MxMyA2LjcyNCAxMi43NzYgNi41IDEyLjUgNi41TDcuNSA2LjVMNy41IDEuNUM3LjUgMS4yMjQgNy4yNzYgMSA3IDFDNi43MjQgMSA2LjUgMS4yMjQgNi41IDEuNUw2LjUgNi41TDEuNSA2LjVDMS4yMjQgNi41IDAuOTk5OTk5IDYuNzI0IDAuOTk5OTk5IDdDMC45OTk5OTkgNy4yNzYgMS4yMjQgNy41IDEuNSA3LjVMNi41IDcuNUw2LjUgMTIuNUM2LjUgMTIuNzc2IDYuNzI0IDEzIDcgMTNDNy4yNzYgMTMgNy41IDEyLjc3NiA3LjUgMTIuNVoiIGZpbGw9IiM1NjY1N0UiIHN0cm9rZT0iIzU2NjU3RSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KPC9zdmc+Cg==);
}
.form-spinner-button.form-spinner-down:before { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMyIgdmlld0JveD0iMCAwIDE0IDMiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDJMNy41IDJMMS41IDJDMS4yMjQgMiAxIDEuNzc2IDEgMS41QzEgMS4yMjQgMS4yMjQgMC45OTk5OTkgMS41IDAuOTk5OTk5TDYuNSAxTDEyLjUgMUMxMi43NzYgMSAxMyAxLjIyNCAxMyAxLjVDMTMgMS43NzYgMTIuNzc2IDIgMTIuNSAyWiIgZmlsbD0iIzU2NjU3RSIgc3Ryb2tlPSIjNTY2NTdFIiBzdHJva2Utd2lkdGg9IjAuNSIvPgo8L3N2Zz4K);
}
.form-collapse-table:after { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxMSAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iNS41IiBjeT0iNS41IiByPSI1LjUiIHRyYW5zZm9ybT0icm90YXRlKC05MCA1LjUgNS41KSIgZmlsbD0iI0MzQ0FEOCIgZmlsbC1vcGFjaXR5PSIwLjUiLz4KPHBhdGggZD0iTTMuMTY3NTYgNC40NjExMkMzLjE0NzkzIDQuNTAzMDggMy4xMzk2MSA0LjU1MDA4IDMuMTQzNTIgNC41OTY4M0MzLjE0NzQzIDQuNjQzNTggMy4xNjM0MyA0LjY4ODI0IDMuMTg5NzIgNC43MjU3OUw1LjMxMTE1IDcuNzU2NEM1LjMzMzEgNy43ODc3NyA1LjM2MTU3IDcuODEzMjMgNS4zOTQzIDcuODMwNzZDNS40MjcwMyA3Ljg0ODI5IDUuNDYzMTIgNy44NTc0MiA1LjQ5OTcyIDcuODU3NDJDNS41MzYzMSA3Ljg1NzQyIDUuNTcyNCA3Ljg0ODI5IDUuNjA1MTMgNy44MzA3NkM1LjYzNzg2IDcuODEzMjMgNS42NjYzMyA3Ljc4Nzc3IDUuNjg4MjkgNy43NTY0TDcuODA5NzIgNC43MjU3OUM3Ljg0MDMyIDQuNjgyMDcgNy44NTY4NiA0LjYyODkgNy44NTY4NiA0LjU3NDI2QzcuODU2NzIgNC41MzQ5OSA3Ljg0ODE4IDQuNDk2MjkgNy44MzE4OCA0LjQ2MTEyQzcuODEyMjggNC40MTkyMiA3Ljc4MjE5IDQuMzgzOTkgNy43NDQ5OCA0LjM1OTM3QzcuNzA3NzYgNC4zMzQ3NSA3LjY2NDg5IDQuMzIxNzEgNy42MjExNSA0LjMyMTcxTDMuMzc4MjkgNC4zMjE3MUMzLjMzNDU1IDQuMzIxNzEgMy4yOTE2NyA0LjMzNDc1IDMuMjU0NDYgNC4zNTkzN0MzLjIxNzI0IDQuMzgzOTkgMy4xODcxNSA0LjQxOTIyIDMuMTY3NTYgNC40NjExMlY0LjQ2MTEyWiIgZmlsbD0iI0U1RTdGMSIvPgo8L3N2Zz4K);
}
.form-star-rating-star { background-image: url(data:image/png;base64,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) !important;
}
.signature-pad-passive,
.signature-placeholder:after { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiM4Nzk1QUIiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiM4Nzk1QUIiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjODc5NUFCIi8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiM4Nzk1QUIiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iIzg3OTVBQiIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiNERkUzRUQiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiNERkUzRUQiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTc2OUwxNzAuODU1IDkuODI2NDJDMTcwLjYyMiA5Ljg4OTUgMTcwLjQ0MSAxMC4wNzMzIDE3MC4zODMgMTAuMzA3NkwxNjYuMTU1IDI3LjEwMjFMMTczLjk3NSAyMC42Mjk2QzE3My4yNDUgMTkuMjYxNyAxNzMuNTUgMTcuNTE5NCAxNzQuNzkgMTYuNDkyNkMxNzYuMjA2IDE1LjMyMDMgMTc4LjMxMiAxNS41MTk2IDE3OS40ODMgMTYuOTM1MUMxODAuNjU1IDE4LjM1MTMgMTgwLjQ1NiAyMC40NTY2IDE3OS4wNDEgMjEuNjI4MkMxNzguMzMzIDIyLjIxNDQgMTc3LjQ1MiAyMi40NTgyIDE3Ni42MDMgMjIuMzc4MUMxNzUuOTY0IDIyLjMxNzkgMTc1LjM0MyAyMi4wNzQ1IDE3NC44MjUgMjEuNjU3M0wxNjcuMDA1IDI4LjEyOTFMMTg0LjI5NCAyNy4xMTQyQzE4NC41MzQgMjcuMTAwMSAxODQuNzQ5IDI2Ljk1NzYgMTg0Ljg1NCAyNi43NDA2TDE4OS42NSAxNi44ODE5TDE4MS40MzYgNi45NTc2OVoiIGZpbGw9IiNERkUzRUQiLz4KPC9zdmc+Cg==);
}
li[data-type=control_datetime] [data-wrapper-react=true].extended > div + .form-sub-label-container .form-textbox:placeholder-shown,
li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
.appointmentCalendarContainer .currentDate { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiM1ODY1N0MiLz4KPHBhdGggZD0iTTEzLjA1MjIgMS4xMjVIMTUuMDQ1OEMxNS41OTYzIDEuMTI1IDE2LjA0MjYgMS42MDA3IDE2LjA0MjYgMi4xODc1VjRIMC4wOTM3NVYyLjE4NzVDMC4wOTM3NSAxLjYwMDcgMC41NDAwMzUgMS4xMjUgMS4wOTA1NiAxLjEyNUgzLjA4NDE3VjEuMDYyNUMzLjA4NDE3IDAuNDc1Njk3IDMuNTMwNDUgMCA0LjA4MDk3IDBDNC42MzE0OSAwIDUuMDc3NzggMC40NzU2OTcgNS4wNzc3OCAxLjA2MjVWMS4xMjVIMTEuMDU4NlYxLjA2MjVDMTEuMDU4NiAwLjQ3NTY5NyAxMS41MDQ5IDAgMTIuMDU1NCAwQzEyLjYwNTkgMCAxMy4wNTIyIDAuNDc1Njk3IDEzLjA1MjIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iIzU4NjU3QyIvPgo8L3N2Zz4K);
}
.appointmentField .timezonePickerName:after { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0wLjA1Mjk5IDAuMjM2NTcyQzAuMDExMzU0NiAwLjMwNzc4NSAtMC4wMDYzMDI4MiAwLjM4NzUzNCAwLjAwMTk5OTIzIDAuNDY2ODdDMC4wMTAzMDEzIDAuNTQ2MjA2IDAuMDQ0MjM0MyAwLjYyMTk4OSAwLjA5OTk5MDEgMC42ODU3MTVMNC41OTk5OSA1LjgyODU3QzQuNjQ2NTcgNS44ODE4IDQuNzA2OTYgNS45MjUgNC43NzYzOSA1Ljk1NDc1QzQuODQ1ODIgNS45ODQ1MSA0LjkyMjM3IDYgNC45OTk5OSA2QzUuMDc3NjIgNiA1LjE1NDE3IDUuOTg0NTEgNS4yMjM2IDUuOTU0NzVDNS4yOTMwMyA1LjkyNSA1LjM1MzQyIDUuODgxOCA1LjQgNS44Mjg1N0w5LjkgMC42ODU3MTRDOS45NjQ5MSAwLjYxMTUzIDEwIDAuNTIxMzAxIDEwIDAuNDI4NTcxQzkuOTk5NzEgMC4zNjE5MzggOS45ODE1NyAwLjI5NjI1MiA5Ljk0NyAwLjIzNjU3MUM5LjkwNTQzIDAuMTY1NDc0IDkuODQxNjEgMC4xMDU2OTEgOS43NjI2NyAwLjA2MzkxMTVDOS42ODM3MyAwLjAyMjEzMTcgOS41OTI3OCAyLjYwNjg5ZS0wNiA5LjUgLTUuNzYzMDNlLTA4TDAuNDk5OTkgMy4zNTc3M2UtMDdDMC40MDcyMTIgMy4wMDg0ZS0wNiAwLjMxNjI2NCAwLjAyMjEzMjEgMC4yMzczMjEgMC4wNjM5MTE5QzAuMTU4Mzc5IDAuMTA1NjkyIDAuMDk0NTU0NyAwLjE2NTQ3NCAwLjA1Mjk5IDAuMjM2NTcyVjAuMjM2NTcyWiIgZmlsbD0iIzExMTExMSIvPgo8L3N2Zz4K); width: 11px;
}
li[data-type=control_fileupload] .qq-upload-button:before { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjciIHZpZXdCb3g9IjAgMCAzOSAyNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMS4zMTI1QzMxLjUgNC44MTI1IDI2IDAgMTkuMzc1IDBDMTMuNjg3NSAwIDguNzUgMy41NjI1IDYuOTM3NSA4LjkzNzVDMi44NzUgOS44MTI1IDAgMTMuMzEyNSAwIDE3LjVDMCAyMi4wNjI1IDMuNTYyNSAyNS44NzUgOC4xMjUgMjYuMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjUuODc1IDM4Ljc1IDIyLjYyNSAzOC43NSAxOC43NUMzOC43NSAxNS4wNjI1IDM2IDExLjg3NSAzMi4zNzUgMTEuMzEyNVpNMjYuMDYyNSAxNC44MTI1QzI1LjkzNzUgMTQuOTM3NSAyNS44MTI1IDE1IDI1LjYyNSAxNUMyNS40Mzc1IDE1IDI1LjMxMjUgMTQuOTM3NSAyNS4xODc1IDE0LjgxMjVMMjAgOS42MjVWMjEuODc1QzIwIDIyLjI1IDE5Ljc1IDIyLjUgMTkuMzc1IDIyLjVDMTkgMjIuNSAxOC43NSAyMi4yNSAxOC43NSAyMS44NzVWOS42MjVMMTMuNTYyNSAxNC44MTI1QzEzLjMxMjUgMTUuMDYyNSAxMi45Mzc1IDE1LjA2MjUgMTIuNjg3NSAxNC44MTI1QzEyLjQzNzUgMTQuNTYyNSAxMi40Mzc1IDE0LjE4NzUgMTIuNjg3NSAxMy45Mzc1TDE4LjkzNzUgNy42ODc1QzE5IDcuNjI1IDE5LjA2MjUgNy41NjI1IDE5LjEyNSA3LjU2MjVDMTkuMjUgNy41IDE5LjQzNzUgNy41IDE5LjYyNSA3LjU2MjVDMTkuNjg3NSA3LjYyNSAxOS43NSA3LjYyNSAxOS44MTI1IDcuNjg3NUwyNi4wNjI1IDEzLjkzNzVDMjYuMzEyNSAxNC4xODc1IDI2LjMxMjUgMTQuNTYyNSAyNi4wNjI1IDE0LjgxMjVaIiBmaWxsPSIjQjNCQ0NDIi8+Cjwvc3ZnPgo=);
}
.appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzMyNzNDOC45MzMxMiA1LjYzNjI3IDkuNDM5MzkgNS42Mjk2OSA5Ljc1NjEzIDUuMzEyNzhDMTAuMDgxMyA0Ljk4NzQ1IDEwLjA4MTMgNC40NTk2MyA5Ljc1NjEzIDQuMTM0M0M5LjYwOTA0IDMuOTk2MzUgOS42MDkwMyAzLjk5NjM1IDkuMDg5NDkgMy41MTExOEM4LjQzNzQyIDIuOTAyMTggOC40Mzc0MyAyLjkwMjE4IDcuNjU1MTEgMi4xNzE1NkM2LjA4OTU2IDAuNzA5NDQ3IDYuMDg5NTYgMC43MDk0NDYgNS41Njc3MyAwLjIyMjEwMUM1LjI0MTA0IC0wLjA3NDUwNjcgNC43NTA4NSAtMC4wNzM1MDMgNC40MzIzNSAwLjIyMTkyOUwwLjI2MjU0IDQuMTE0MjRDLTAuMDgwNTQ1OSA0LjQ1NTQ1IC0wLjA4NzE3MTEgNC45ODM5NyAwLjI0MTQ2OCA1LjMxMjc4QzAuNTU5NTU4IDUuNjMxMDUgMS4wNjk3NSA1LjYzNjY4IDEuMzk3MDMgNS4zMzI2Mkw0Ljk5ODkxIDEuOTcxMzFMOC41OTc4MiA1LjMzMjczWiIgZmlsbD0iI0NGQ0ZDRiIvPgo8L3N2Zz4K);
}
.appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjIzNDk3QzEuMDY2ODcgLTAuMDgwMTAyOCAwLjU2MDYwMiAtMC4wNzM1MDI4IDAuMjQzODY5IDAuMjQzMzk3Qy0wLjA4MTI4OTggMC41Njg2OTcgLTAuMDgxMjg5OCAxLjA5NjYgMC4yNDM4NjkgMS40MjE5QzAuMzkwOTU2IDEuNTU5OCAwLjM5MDk2NiAxLjU1OTggMC45MTA1MSAyLjA0NUMxLjU2MjU3IDIuNjU0IDEuNTYyNTYgMi42NTQgMi4zNDQ4OCAzLjM4NDZDMy45MTA0NCA0Ljg0NjcgMy45MTA0MyA0Ljg0NjcgNC40MzIyNyA1LjMzNDFDNC43NTg5NSA1LjYzMDcgNS4yNDkxNSA1LjYyOTcgNS41Njc2NCA1LjMzNDNMOS43Mzc0NiAxLjQ0MkMxMC4wODA1IDEuMTAwNyAxMC4wODcxIDAuNTcyMTk3IDkuNzU4NTMgMC4yNDMzOTdDOS40NDA0NCAtMC4wNzQ5MDI4IDguOTMwMjQgLTAuMDgwNTAyOCA4LjYwMjk3IDAuMjIzNTk3TDUuMDAxMDggMy41ODQ5TDEuNDAyMTggMC4yMjM0OTdaIiBmaWxsPSIjQ0ZDRkNGIi8+Cjwvc3ZnPgo=);
}
.ap > pointmentDayPickerButton { background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDggMTQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDEzTDcgN0wxIDAuOTk5OTk5IiBzdHJva2U9IiM4Nzk1QUMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=);
}
.supernova { background-color: #ffffff; background-color: #ecedf3;
}
.supernova body { background-color: transparent;
}
/* | */
.color-select { display: none;
}
.supernova .form-all,
.form-all { background-color: #ffffff;
}
.form-textbox,
.form-textarea,
.form-dropdown,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input { background-color: #ffffff;
}
.form-matrix-table tr { border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) { background-color: #f2f2f2;
}
.form-all { color: #2c3345;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html { color: #2c3345;
}
.form-line-error { overflow: hidden; -webkit-transition-property: none; -moz-transition-property: none; -ms-transition-property: none; -o-transition-property: none; transition-property: none; -webkit-transition-duration: 0.3s; -moz-transition-duration: 0.3s; -ms-transition-duration: 0.3s; -o-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease; -moz-transition-timing-function: ease; -ms-transition-timing-function: ease; -o-transition-timing-function: ease; transition-timing-function: ease; background-color: #ffd6d6;
}
.form-iframe-container { font-size: 16px;
}
.radio-button-style-item { background-position: center; background-repeat: no-repeat; background-size: 40px; padding: 0; margin: 0 12px 12px 0; background-color: #4E4E4E; border: 1px solid #696969;
}
.radio-button-style-item img { opacity: 0;
}
.radio-button-style-item:nth-child(1) { background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 62'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Ccircle cx='12.5' cy='49.5' r='8.5' fill='%232E69FF'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Cpath stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M43 49.5l3.3 3.5 6.7-7'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(2) { background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24.9' height='24.9' x='.2' y='37.1' fill='%232E69FF' rx='12.5'/%3E%3Ccircle cx='12.7' cy='49.6' r='3.7' fill='%23fff'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='7' height='7' x='44' y='46' fill='%23fff' rx='1'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(3) { background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 62 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='22' height='22' x='1.5' y='1.5' stroke='%23C3CAD8' stroke-width='3' rx='11'/%3E%3Cpath fill='%232E69FF' d='M9.3 47c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.4.4.8.6 1.3.6.6 0 1-.2 1.3-.6l12.9-13c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L11.7 49.3 9.3 47z'/%3E%3Cpath fill='%232E69FF' d='M12.7 62.1c7 0 12.6-5.5 12.6-12.5 0-1-.8-1.8-1.8-1.8-1.1 0-1.8.7-1.8 1.8 0 5-4 9-9 9s-8.9-4-8.9-9a8.8 8.8 0 0112-8.4c.9.4 2-.2 2.3-1 .4-1-.2-2-1-2.4a12 12 0 00-4.4-.7C5.7 37.1.2 42.7.2 49.6c0 7 5.6 12.5 12.5 12.5z'/%3E%3Cmask id='a' fill='%23fff'%3E%3Crect width='25' height='25' x='35' rx='2'/%3E%3C/mask%3E%3Crect width='25' height='25' x='35' fill='%23fff' stroke='%23C3CAD8' stroke-width='6' mask='url(%23a)' rx='2'/%3E%3Cpath fill='%232E69FF' d='M51.5 39.8a1.5 1.5 0 000-3v3zm8.1 9.3a1.5 1.5 0 10-3 0h3zm-3.5 10h-17v3h17v-3zm-17.6-.6V40.3h-3v18.2h3zm.5-18.7h12.5v-3H39v3zm20.6 18.7v-9.4h-3v9.4h3zM39 59a.5.5 0 01-.5-.5h-3c0 2 1.6 3.5 3.5 3.5v-3zm17.1 3c2 0 3.5-1.5 3.5-3.5h-3c0 .3-.2.5-.5.5v3zM38.5 40.3c0-.3.3-.5.5-.5v-3c-1.9 0-3.5 1.6-3.5 3.5h3zM44.8 46.8c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.3.3.7.5 1.3.5.5 0 .9-.2 1.2-.5l12.7-12.8c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L47.2 49l-2.4-2.3z'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(4) { background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 53 57'%3E%3Cdefs/%3E%3Ccircle cx='9' cy='9' r='9' fill='%23C3CAD8'/%3E%3Cpath stroke='%23C3CAD8' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37 9l4.3 5L50 4'/%3E%3Ccircle cx='9' cy='47.8' r='9' fill='%232E69FF'/%3E%3Cpath stroke='%232E69FF' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37.4 48.5l4.1 4.6 8.2-9.3'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(5) { display: none;
}
.radio-button-style-item:nth-child(6) { background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(7) { background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Ccircle cx='27.4' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Ccircle cx='34.5' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Cpath fill='%232E69FF' d='M31 56c2 0 3.5-1.3 3.5-3h-7c0 1.7 1.6 3 3.5 3z'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3Ccircle cx='10.4' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Ccircle cx='17.5' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Cpath fill='%23C3CAD8' d='M14 16c-2 0-3.5 1.3-3.5 3h7c0-1.7-1.6-3-3.5-3z'/%3E%3C/svg%3E");
}
.clr-darkV2,
.clr-pinkV2,
.clr-darkBlueV2,
.clr-purpleV2 { position: relative;
}
.clr-darkV2:before,
.clr-pinkV2:before,
.clr-darkBlueV2:before,
.clr-purpleV2:before { content: ''; background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 36 19'%3E%3Cdefs/%3E%3Cg filter='url(%23filter0_d)'%3E%3Crect width='32' height='14' x='2' y='2' fill='%234990F7' rx='7'/%3E%3Cpath fill='%23fff' d='M13.2 12.2V6h-.9v4.8L9.2 6H8v6.2h.9v-5l3.4 5h.9zM18.6 12.2v-.8h-3V9.5h2.8v-.8h-2.7V6.8h3V6h-3.9v6.2h3.8zM25.7 10.9L24.1 6h-1l-1.5 4.9L20.2 6h-.9l1.8 6.2h1l1.5-5 1.7 5h.9L28 6h-.9l-1.4 4.9z'/%3E%3C/g%3E%3Cdefs%3E%3Cfilter id='filter0_d' width='36' height='18' x='0' y='.5' color-interpolation-filters='sRGB' filterUnits='userSpaceOnUse'%3E%3CfeFlood flood-opacity='0' result='BackgroundImageFix'/%3E%3CfeColorMatrix in='SourceAlpha' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0'/%3E%3CfeOffset dy='.5'/%3E%3CfeGaussianBlur stdDeviation='1'/%3E%3CfeColorMatrix values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0'/%3E%3CfeBlend in2='BackgroundImageFix' result='effect1_dropShadow'/%3E%3CfeBlend in='SourceGraphic' in2='effect1_dropShadow' result='shape'/%3E%3C/filter%3E%3C/defs%3E%3C/svg%3E"); width: 54px; height: 19px; position: absolute; display: inline-block; top: -12px; left: -1px; background-repeat: no-repeat;
}
.clr-clearV2:before { content: 'x'; text-transform: uppercase; color: #ffffff; width: 24px; height: 24px;
}
.clr-clearV2 > span { display: none;
}
#propsFormLayout #enableFormCols { display: none;
}
#propsLabels .sb-input-color + .sb-seperator + .sb-col-half + .sb-col-half.even { display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color + .sb-seperator + .sb-option,
#propsRadio .sb-option + .sb-seperator + .sb-option.sb-col-half { display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color { padding-left: 18px; padding-right: 12px;
}
#propsPageBreaks .sb-option:nth-child(20),
#propsPageBreaks .sb-seperator:nth-child(21) { display: none;
}
#propsButtons .sb-option:nth-child(20),
#propsButtons .sb-seperator:nth-child(21) { display: none;
}
#buttonSizeChangeContainer { display: none;
}
#buttonSizeChangeContainer + .sb-option.sb-col-half.even { padding-left: 18px; padding-right: 12px;
} /*PREFERENCES STYLE*/ .form-all { font-family: Candal, sans-serif; } .form-all .qq-upload-button, .form-all .form-submit-button, .form-all .form-submit-reset, .form-all .form-submit-print { font-family: Candal, sans-serif; } .form-all .form-pagebreak-back-container, .form-all .form-pagebreak-next-container { font-family: Candal, sans-serif; } .form-header-group { font-family: Candal, sans-serif; } .form-label { font-family: Candal, sans-serif; } .form-label.form-label-auto { display: block; float: none; text-align: left; width: 100%; } .form-line { margin-top: 12px; margin-bottom: 12px; } .form-all { max-width: 752px; width: 100%; } .form-label.form-label-left, .form-label.form-label-right, .form-label.form-label-left.form-label-auto, .form-label.form-label-right.form-label-auto { width: 230px; } .form-all { font-size: 16px } .form-all .qq-upload-button, .form-all .qq-upload-button, .form-all .form-submit-button, .form-all .form-submit-reset, .form-all .form-submit-print { font-size: 16px } .form-all .form-pagebreak-back-container, .form-all .form-pagebreak-next-container { font-size: 16px } .supernova .form-all, .form-all { background-color: #FFFFFF; } .form-all { color: #2C3345; } .form-header-group .form-header { color: #2C3345; } .form-header-group .form-subHeader { color: #2C3345; } .form-label-top, .form-label-left, .form-label-right, .form-html, .form-checkbox-item label, .form-radio-item label { color: #2C3345; } .form-sub-label { color: #464d5f; } .supernova { background-color: #ECEDF3; } .supernova body { background: transparent; } .form-textbox, .form-textarea, .form-dropdown, .form-radio-other-input, .form-checkbox-other-input, .form-captcha input, .form-spinner input { background-color: #FFFFFF; } .supernova { background-image: none; } #stage { background-image: none; } .form-all { background-image: none; } .form-all { position: relative; } .form-all:before { content: ""; background-image: url("https://images.all-free-download.com/images/graphicthumb/cooperation_handshake_picture_170365.jpg"); display: inline-block; height: 250px; position: absolute; background-size: 750px 250px; background-repeat: no-repeat; width: 100%; } .form-all { margin-top: 270px !important; } .form-all:before { top: -260px; background-position: top center; } .ie-8 .form-all:before { display: none; } .ie-8 { margin-top: auto; margin-top: initial; } /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/ /* Injected CSS Code */
</style>
<div class="topnav" id="myTopnav">
<a href="home.php">Home</a>
<a href="review.php">Reviews</a>
<a href="home.php">LogOut</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
<i class="fa fa-bars"></i>
<script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        }
        else {
            x.className = "topnav";
        }
    }

</script>
</a>
</div>
<form class="jotform-form" action="ownerdetails.php" method="post" enctype="multipart/form-data" name="form_202961307185051" id="202961307185051" accept-charset="utf-8" autocomplete="on"> <input type="hidden" name="formID" value="202961307185051" /> <input type="hidden" id="JWTContainer" value="" /> <input type="hidden" id="cardinalOrderNumber" value="" /> <div role="main" class="form-all"> <div class="formLogoWrapper Center"> <img class="formLogoImg" src="https://images.all-free-download.com/images/graphicthumb/cooperation_handshake_picture_170365.jpg" height="250" width="750"> </div>
  <style> .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Center { top: -260px; text-align: center;} </style> <ul class="form-section page-section"> <li id="cid_1" class="form-input-wide" data-type="control_head"> <div class="form-header-group header-large"> <div class="header-text httac htvam"> <h1 id="header_1" class="form-header" data-component="header"> PROFILE CREATION FORM </h1> <div id="subHeader_1" class="form-subHeader"> Connect with our community💖💖 </div> </div> </div> </li> <li class="form-line jf-required" data-type="control_fullname" id="id_3" data-compound-hint="Enter your name,Enter your initial"> <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> NAME <span class="form-required"> * </span> </label> <div id="cid_3" class="form-input-wide jf-required" data-layout="full"> <div data-wrapper-react="true"> <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"> <input type="text" id="first_3" name="firstname" class="form-textbox validate[required]" size="10" value="" placeholder="Enter your name" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" /> <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label> </span> <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"> <input type="text" id="last_3" name="lastname" class="form-textbox validate[required]" size="15" value="" placeholder="Enter your initial" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" /> <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label> </span> </div> </div> </li> <li class="form-line jf-required" data-type="control_email" id="id_4"> <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> EMAIL <span class="form-required"> * </span> </label> <div id="cid_4" class="form-input-wide jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"> <input type="email" id="input_4" name="email" class="form-textbox validate[required, Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4" required="" /> <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> example@example.com </label> </span> </div> </li> <li class="form-line jf-required" data-type="control_address" id="id_5"> <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_addr_line1"> ADDRESS <span class="form-required"> * </span> </label> <div id="cid_5" class="form-input-wide jf-required" data-layout="full"> <div summary="" class="form-address-table jsTest-addressField"> <div class="form-address-line-wrapper jsTest-address-line-wrapperField"> <span class="form-address-line form-address-street-line jsTest-address-lineField"> <span class="form-sub-label-container" style="vertical-align:top"> <input type="text" id="input_5_addr_line1" name="address" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" aria-labelledby="label_5 sublabel_5_addr_line1" required="" /> <label class="form-sub-label" for="input_5_addr_line1" id="sublabel_5_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label> </span> </span> </div> <div class="form-address-line-wrapper jsTest-address-line-wrapperField"> <span class="form-address-line form-address-street-line jsTest-address-lineField"> <span class="form-sub-label-container" style="vertical-align:top"> <input type="text" id="input_5_addr_line2" name="q5_address5[addr_line2]" class="form-textbox form-address-line" value="" data-component="address_line_2" aria-labelledby="label_5 sublabel_5_addr_line2" /> <label class="form-sub-label" for="input_5_addr_line2" id="sublabel_5_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label> </span> </span> </div> <div class="form-address-line-wrapper jsTest-address-line-wrapperField"> <span class="form-address-line form-address-city-line jsTest-address-lineField "> <span class="form-sub-label-container" style="vertical-align:top"> <input type="text" id="input_5_city" name="city" class="form-textbox validate[required] form-address-city" value="" data-component="city" aria-labelledby="label_5 sublabel_5_city" required="" /> <label class="form-sub-label" for="input_5_city" id="sublabel_5_city" style="min-height:13px" aria-hidden="false"> City </label> </span> </span> <span class="form-address-line form-address-state-line jsTest-address-lineField "> <span class="form-sub-label-container" style="vertical-align:top"> <input type="text" id="input_5_state" name="state" class="form-textbox validate[required] form-address-state" value="" data-component="state" aria-labelledby="label_5 sublabel_5_state" required="" /> <label class="form-sub-label" for="input_5_state" id="sublabel_5_state" style="min-height:13px" aria-hidden="false"> State / Province </label> </span> </span> </div> <div class="form-address-line-wrapper jsTest-address-line-wrapperField"> <span class="form-address-line form-address-zip-line jsTest-address-lineField "> <span class="form-sub-label-container" style="vertical-align:top"> <input type="text" id="input_5_postal" name="pin" class="form-textbox validate[required] form-address-postal" value="" data-component="zip" aria-labelledby="label_5 sublabel_5_postal" required="" />
     <label class="form-sub-label" for="input_5_postal" id="sublabel_5_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label> </span> </span> </div> </div> </div> </li>
     <li class="form-line jf-required" data-type="control_phone" id="id_6">
      <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6_area"> CONTACT NUMBER <span class="form-required"> * </span> </label> <div id="cid_6" class="form-input-wide jf-required" data-layout="half"> <div data-wrapper-react="true"> <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode"> <input type="tel" id="input_6_area" name="q6_contactNumber[area]" class="form-textbox validate[required]" value="" data-component="areaCode" aria-labelledby="label_6 sublabel_6_area" required="" /> <span class="phone-separate" aria-hidden="true"> - </span> <label class="form-sub-label" for="input_6_area" id="sublabel_6_area" style="min-height:13px" aria-hidden="false"> Area Code </label> </span> <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone"> <input type="tel" id="input_6_phone" name="phone" class="form-textbox validate[required]" value="" data-component="phone" aria-labelledby="label_6 sublabel_6_phone" required="" /> <label class="form-sub-label" for="input_6_phone" id="sublabel_6_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label> </span> </div> </div> </li> <li class="form-line" data-type="control_button" id="id_2"> <div id="cid_2" class="form-input-wide" data-layout="full"> <div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField">
     <li class="form-line" data-type="control_button" id="id_2"> <div id="cid_2" class="form-input-wide" data-layout="full"> <div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField"> <button id="input_2" type="submit" action = "ownerdetails.php" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content=""> Submit </button> </div> </div> </li> <li style="display:none"> Should be Empty: <input type="text" name="website" value="" /> </li> </ul> </div> <script> JotForm.showJotFormPowered = "new_footer"; </script> <script> JotForm.poweredByText = "Powered by JotForm"; </script> <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="202961307185051" /> <script type="text/javascript"> var all_spc = document.querySelectorAll("form[id='202961307185051'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{ all_spc[i].value = "202961307185051-202961307185051";
} </script>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.21340"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.21340"></script>
