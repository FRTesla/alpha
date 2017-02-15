<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JEUX</title>
    <link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/3757717bee.js"></script>
</head>
<body>
    <div class="container">
        <h1>Match Clicker</h1>
            <button id="click" class="click"></button>
            <hr>
            <p>
            Likes: <span id="total_clicks">0</span><br />
            Likes per <small id="time_period">1.00</small> second: <span id="clicks_per_second">0</span>
            </p>
            <h3>Buy</h3>
            <table class="table">
                <tr>
                  <td>Increase Like Power</td>
                  <td><span id="power_level">lvl 0</span></td>
                  <td><button id="increase_clicks" class="btn btn-danger">Buy for 15</button></td>
                </tr>				
				<tr>
                  <td>Auto Liker</td>
                  <td><span id="auto_liker_level">lvl 0</span></td>
                  <td><button id="auto_liker" class="btn btn-danger">Buy for 12</button></td>
                </tr>
                <tr>
                  <td>Mega Liker <small>(+100 base LPS)</small></td>
                  <td><span id="mega_clicker_lvl">lvl 0</span></td>
                  <td><button id="buy_mega_clicker" class="btn btn-danger">Buy for 800</button></td>
                </tr>
                <tr>
                  <td>Speed up by 10%</td>
                  <td><span id="speed_level">lvl 0</span></td>
                  <td><button id="upgrade_speed" class="btn btn-danger">Buy for 100</button></td>
                </tr>

            </table>
        </div>
<script src="main.js"></script>
</body>

</html>