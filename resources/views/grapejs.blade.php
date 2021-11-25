<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.17.29/css/grapes.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <style>
        .smartphone {
            position: relative;
            width: 360px;
            height: 640px;
            margin: auto;
            border: 16px black solid;
            border-top-width: 60px;
            border-bottom-width: 60px;
            border-radius: 36px;
        }

        /* The horizontal line on the top of the device */
        .smartphone:before {
            content: '';
            display: block;
            width: 60px;
            height: 5px;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #333;
            border-radius: 10px;
        }

        /* The circle on the bottom of the device */
        .smartphone:after {
            content: '';
            display: block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 50%;
            bottom: -65px;
            transform: translate(-50%, -50%);
            background: #333;
            border-radius: 50%;
        }

        /* The screen (or content) of the device */
        .smartphone .content {
            width: 360px;
            height: 640px;
            background: white;
        }

        #gjs {
            border: 3px solid #444;
            margin: auto;
        }

        /* Reset some default styling */
        .gjs-cv-canvas {
            top: 0;
            width: 100%;
            height: 100%;
        }

        .bloc
        {
            width: 50%;
        }

        .gjs-blocks-c{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .gjs-block
        {
            width: 95%;
        }
    </style>
<body>
    <div class="row">
        <div class="col-4 w-auto bloc">
        <div id="blocks"></div>
        </div>
        <div class="col-4">
            <div id="gjs"></div>
        </div>
        <div  class="col-4">
            <div class="smartphone">
                <div class="content" style="width:100%;border:none;height:100%" >
                    <iframe id='preview' src="{{ route('previewget',1) }}" style="width:100%;border:none;height:100%" ></iframe>
            </div>
        </div>
    </div>
    </div>

    <div class="d-flex flex-row-reverse mr-3"><a href="{{route('test')}}" id="send" class="btn btn-success mt-3">Generer le lien</a></div>
</body>
    <script src="https://cdn.ckeditor.com/4.14.1/full-all/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.17.29/grapes.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-plugin-ckeditor@0.0.10/dist/grapesjs-plugin-ckeditor.min.js"></script>

<script>
    const editor = grapesjs.init({
        container: '#gjs',
        plugins: ['gjs-plugin-ckeditor'],
        fromElement: true,
        height: '640px',
        width: 'auto',
        panels: {defaults: [{}]},
        storageManager: {
            id: 'gjs-',
            type: 'remote',
            urlStore: '{{route('save')}}',
            urlLoad: '{{route('load')}}',
            params: {'page_id': 1},
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
            autosave: true,
            autoload: true,
            stepsBeforeSave: 1,
            storeComponents: true,
            storeStyles: true,
            storeHtml: true,
            storeCss: true,
        },

        deviceManager: {
            devices: [{
                name: 'Mobile',
                width: '320px',
                widthMedia: '480px',
            }]
        },

        blockManager: {
            appendTo: '#blocks',
            blocks: [
                {
                    id: 'section',
                    label: '<i class="fas fa-paragraph fa-7x"></i>',
                    attributes: { class:'gjs-block-section' },
                    content: `<section>
          <h1>Titre</h1>
          <div>This is just a Lorem text: Lorem ipsum dolor sit amet</div>
        </section>`,
                }, {
                    id: 'text',
                    label: '<i class="fas fa-text-height fa-7x"></i>',
                    content: '<div data-gjs-type="text">Inserer un texte</div>',
                }, {
                    id: 'image',
                    label: '<i class="fas fa-image fa-7x"></i>',
                    select: true,
                    content: { type: 'image' },
                    activate: true,
                },
            ]
        },

    });
    editor.on('storage:end:store', (resultObject) => {
        let test=document.getElementById('preview').src += ''
    });



</script>

</html>
