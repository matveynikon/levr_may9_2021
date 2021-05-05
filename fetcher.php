<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Previews</title>
</head>
<body>
<p id="demo"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<script>
let file = "/output.txt";
function file_get_contents(file) {
    fetch(file).then((resp) => resp.text()).then(function(data) {
        alert(data);
    });
};
file_get_contents()
</script>
</body>
</html>