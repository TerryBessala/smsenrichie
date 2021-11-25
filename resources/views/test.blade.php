<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
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


    </style>
</head>

<body>

    <div class="smartphone">
        <div class="content" style="width:100%;border:none;height:100%" >
            <a href="{{ route('previewget',1) }}">Le lien de la page</a>
            <p>messgage mesaage message m >messgage mesaage message m>messgage mesaage message m>messgage mesaage message m>messgage mesaage message m>messgage mesaage message m>messgage mesaage message m</p>
        </div>
    </div>

</body>


</html>
