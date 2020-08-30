<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast Report</title>
</head>
<style>
body {
  background-image: url('w3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
input[type=text]
{
    width: 120px;
    height:20px;
    border-radius: 4px;
}
input[type=submit]
{
    width: 60px;
    height:25px;
    border-radius: 4px;
}
</style>
<body>

    <center><br><br>
        <form method="GET" action="get.php">
        <h1>Type city and country</h1>
        <br><p><b>For example,Kolkata, in</b></p>
            <input type="text" name="q" required>
            <input type="submit" name="Submit">
        </form>
    </center>
</body>
</html>


















