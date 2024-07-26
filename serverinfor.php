<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server and Request Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Server and Request Information</h1>

<table>
    <tr>
        <th>Information</th>
        <th>Details</th>
    </tr>
    <tr>
        <td>PHP Version</td>
        <td><?php echo phpversion(); ?></td>
    </tr>
    <tr>
        <td>Root Directory</td>
        <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
    </tr>
    <tr>
        <td>File Name</td>
        <td><?php echo $_SERVER['PHP_SELF']; ?></td>
    </tr>
    <tr>
        <td>Hosting Server Name</td>
        <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
    </tr>
    <tr>
        <td>Protocol</td>
        <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
    </tr>
    <tr>
        <td>Request Method</td>
        <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
    </tr>
    <tr>
        <td>User IP Address</td>
        <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
    </tr>
    <tr>
        <td>User Hostname</td>
        <td><?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?></td>
    </tr>
    <tr>
        <td>Server Port</td>
        <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
    </tr>
</table>

</body>
</html>
