<link href="css/formStyles.css" type="text/css" rel="stylesheet">
<form action="" method="post">
<fieldset>
        <label>First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
            <span class="error">
                <?php echo $first_name_err ;?>
            </span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
            <span class="error">
                <?php echo $last_name_err ;?>
            </span>


        <!-- email -->
        <label>Email</label>
        <input type="email" name="email" id="textbox" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
        <span class="error">
            <?php echo $email_err; ?>
        </span>

        <!-- phone -->
        <label>Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
">
        <span class="error">
            <?php echo $phone_err; ?>
        </span>


        <!--checkboxes-->
        <label>Favorite Mariners Player</label>
        <ul>
            <li>
                <input type="checkbox" name="player[]" value="julio"<?php if(isset($_POST['player']) && in_array('julio', $player)) echo 'checked="checked"'; ?>
                >Julio Rodriguez
            </li>
            <li>
            <input type="checkbox" name="player[]" value="luis"<?php if(isset($_POST['player']) && in_array('luis', $player)) echo 'checked="checked"'; ?>>Luis Castillo
            </li>
            <li>
            <input type="checkbox" name="player[]" value="eugenio"<?php if(isset($_POST['player']) && in_array('eugenio', $player)) echo 'checked="checked"'; ?>>Eugenio Suarez
            </li>
            <li>
            <input type="checkbox" name="player[]" value="cal"<?php if(isset($_POST['player']) && in_array('cal', $player)) echo 'checked="checked"'; ?>>Cal Raleigh
            </li>
            <li>
            <input type="checkbox" name="player[]" value="jp"<?php if(isset($_POST['player']) && in_array('jp', $player)) echo 'checked="checked"'; ?>>JP Crawford
            </li>
        </ul>
        <span class="error">
                <?php echo $player_err; ?>
            </span>

        <!--dropdown-->
        <label>How Many Games Did You Attend in 2022?</label>
        <select name="games">
            <option value="" NULL
                <?php if(isset($_POST['games']) && $_POST['games'] == NULL) echo 'selected="unselected"';?>
            >Select One</option>
            <option value="none"<?php if(isset($_POST['games']) && $_POST['games'] == 'none') echo 'selected="unselected"';?>
            >NONE :(</option>
            <option value="couple"<?php if(isset($_POST['games']) && $_POST['games'] == 'couple') echo 'selected="unselected"';?>
            >A Couple (1-3)</option>
            <option value="few"<?php if(isset($_POST['games']) && $_POST['games'] == 'few') echo 'selected="unselected"';?>
            >A Few (4-8)</option>
            <option value="healthy"<?php if(isset($_POST['games']) && $_POST['games'] == 'healthy') echo 'selected="unselected"';?>
            >A Healthy Amount (9-12)</option>
            <option value="lot"<?php if(isset($_POST['games']) && $_POST['games'] == 'lot') echo 'selected="unselected"';?>
            >A LOT!! (15+)</option>
            <option value="season"<?php if(isset($_POST['games']) && $_POST['games'] == 'season') echo 'selected="unselected"';?>
            >I'm a Season Ticket Holder ;)</option>
        </select>
        <span class="error">
            <?php echo $games_err; ?>
        </span>


        <label>Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="agree"<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>
                >I agree</li>
        </ul>
        <span class="error">
            <?php echo $privacy_err; ?>
        </span>

        <input type="submit" value="Send it">
        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">

    </fieldset>
</form>