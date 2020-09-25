<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        $(document).ready(function() {

            $("#btn1").click(function() {
                $("#div1").remove();
            });

            $("#btn2").click(function() {
                $("#div1").empty();
            });

        });
    </script>

    <div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">
        This is some text in the div.
        <p>This is a paragraph in the div.</p>
        <p>This is another paragraph in the div.</p>
    </div>
    <br>
    <button id="btn1">Remove div element</button>
    <button id="btn2">Empty the div element</button>
</body>

</html>