<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Welcome {{Auth::guard('student')->user()->name}}, This is Student Dashboard</h1>
    </body>
</html>