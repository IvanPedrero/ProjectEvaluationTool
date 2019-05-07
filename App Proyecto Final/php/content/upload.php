<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/dropzone.css">
</head>

<body class="darklayout">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <!-- Header top area start-->
        <div class="content-inner-all">
            <!-- Multi Upload Start-->
            <div class="multi-uploaded-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert-title dropzone-custom-sys shadow-reset nt-mg-b-30">
                                <h2>Drag and Drop file uploads System</h2>
                                <p>Dropzone Drag and Drop file uploads javascript plugins. Users using an old browser will be able to upload files. If you want the whole body to be a Dropzone and display the files somewhere else you can simply instantiate a Dropzone object for the body.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dropzone-pro shadow-reset nt-mg-b-30">
                                <div id="dropzone1">
                                    <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                        <div class="dz-message needsclick download-custom">
                                            <span class="adminpro-icon adminpro-cloud-computing-down download-icon"></span>
                                            <h2>Drop files here or click to upload.</h2>
                                            <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="dropzone-pro shadow-reset">
                                <div id="dropzone">
                                    <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo-upload">
                                        <div class="dz-message needsclick download-custom">
                                            <span class="adminpro-icon adminpro-down-arrow-in-a-circle download-icon"></span>
                                            <h2>Drop files here or click to upload.</h2>
                                            <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Multi Upload End-->
        </div>
    </div>

    <!--  dropzone JS
		============================================ -->
    <script src="../../js/dropzone.js"></script>

</body>

</html>