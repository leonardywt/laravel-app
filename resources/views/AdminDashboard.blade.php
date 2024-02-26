<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Welcome {{Auth::guard('admin')->user()->name}}, This is Admin Dashboard</h1>
    </body>
</html>