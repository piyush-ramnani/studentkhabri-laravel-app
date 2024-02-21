<!-- resources/views/react.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React Component</title>
</head>

<body>
    <div id="react-app"></div>

    <script src="{{ asset('./js/app.js') }}"></script> <!-- Include compiled React app -->
    <script>
        // Render the React component in the specified container
        ReactDOM.render( < Posts / > , document.getElementById('react-app'));
    </script>
</body>

</html>
