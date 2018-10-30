<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <form method="POST" action="includes/trans.inc.php">
            <!--ROOM TRANSACTION-->
            <button type="submit" name="roomadd">room add</button>
            <button type="submit" name="roomdel">room del</button>
            <button type="submit" name="roomupd">room upd</button></br>
            <!--CLASS TRANSACTION-->
            <button type="submit" name="classadd">class add</button>
            <button type="submit" name="classdel">class del</button>
            <button type="submit" name="classupd">class upd</button></br>
            <!--CLASS REQUEST TRANSACTION-->
            <button type="submit" name="classaddreq">class add req</button>
            <button type="submit" name="classupdreq">class upd req</button></br>
            <!--EVENT TRANSACTION-->
            <button type="submit" name="eventadd">event add</button>
            <button type="submit" name="eventdel">event del</button>
            <button type="submit" name="eventupd">event upd</button></br>
            <!--EVENT REQUEST TRANSACTION-->
            <button type="submit" name="eventaddreq">event add req</button>
            <button type="submit" name="eventupdreq">event upd req</button></br>
            <!--USER TRANSACTION-->
            <button type="submit" name="useradd">user add</button>
            <button type="submit" name="userdel">user del</button>
            <button type="submit" name="userupd">user upd</button></br>
            <!--USER REQUEST TRANSACTION-->
            <button type="submit" name="useraddreq">user add req</button></br>
            <!--OTHER-->
            <button type="submit" name="a">up</button>
            <button type="submit" name="b">down</button>
            <button type="submit" name="c">right</button>
            <button type="submit" name="d">left</button>
        </form>
    </div>
</body>
</html>