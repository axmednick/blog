<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Mirrored from kademi.github.io/keditor/examples/basic_with_blank_content.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2020 08:08:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$page->title}} Page Builder</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/keditor/plugins/bootstrap-3.4.1/css/bootstrap.min.css" data-type="keditor-style" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/keditor/plugins/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />
    <!-- Start of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/keditor/dist/css/keditor.css" data-type="keditor-style" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/keditor//dist/css/keditor-components.css" data-type="keditor-style" />
    <!-- End of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/keditor/plugins/code-prettify/src/prettify.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/keditor/css/examples.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<button class="btn btn-primary btn-lg" id="save" style="position: fixed !important; z-index: 5!important; right: 120px !important;">Save</button>
<div data-keditor="html">
    <div id="content-area"></div>
</div>

<script type="text/javascript" src="{{url('/')}}/keditor/plugins/jquery-1.11.3/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/bootstrap-3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/ckeditor-4.11.4/ckeditor.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/formBuilder-2.5.3/form-builder.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/formBuilder-2.5.3/form-render.min.js"></script>
<!-- Start of KEditor scripts -->
<script type="text/javascript" src="{{url('/')}}/keditor//dist/js/keditor.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor//dist/js/keditor-components.js"></script>
<!-- End of KEditor scripts -->
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/code-prettify/src/prettify.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/js-beautify-1.7.5/js/lib/beautify.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/plugins/js-beautify-1.7.5/js/lib/beautify-html.js"></script>
<script type="text/javascript" src="{{url('/')}}/keditor/js/examples.js"></script>

<script type="text/javascript" data-keditor="script">
    $(function () {
        $('#content-area').keditor();


        $('#content-area').keditor('setContent',`
        {!! $page->content !!}
        `);



        $("#save").click(function () {
            var content=$('#content-area').keditor('getContent');
            console.log($('#content-area').keditor('getContent'))
            axios.put('/admin/pageDesign/{{$page->id}}',{allcontent:content}).then(function (res) {
                console.log(res)
            })
        })
    });
</script>
</body>

<!-- Mirrored from kademi.github.io/keditor/examples/basic_with_blank_content.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Aug 2020 08:08:36 GMT -->
</html>
