<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
            </script>
            <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
            <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="antialiased">
        <button class="btn btn-primary" id="btn_bkup">Get Backup</button>
        <span id="download-link"></span>
    </body>
    <script>
        $(document).ready(function () {
            alert("OK");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            })
            $.ajax({
                type: "POST",
                url: "get-backup",
                data: 1,
                success: function (response) {
                    var html =  '<a target="_blank" href="backup-files/' + response + '">Click here to download</a>';
                    $("#download-link").html(html);
                }
            });
        });
    </script>
</html>
