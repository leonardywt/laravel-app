<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Welcome {{Auth::guard('editor')->user()->name}}, This is Editor Dashboard</h1>
    </body>
</html>