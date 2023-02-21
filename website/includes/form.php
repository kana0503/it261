<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend>Contact Kanako</legend>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">
        <span class="error"><?php echo $first_name_err;?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">
        <span class="error"><?php echo $last_name_err;?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">
        <span class="error"><?php echo $email_err;?></span>

        <label>Gender</label>
        <ul>
            <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked ="checked"'  ;?>>Female</li>
            <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked ="checked"'  ;?>>Male</li>
            <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked ="checked"'  ;?>>Neither</li>
        </ul>
        <span class="error"><?php echo $gender_err;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])  ;?>">
        <span class="error"><?php echo $phone_err;?></span>

        <label>Faborite seasons</label>
        <ul>
            <li><input type="checkbox" name="seasons[]" value="spring" <?php if(isset($_POST['seasons']) && in_array('spring', $seasons)) echo 'checked="checked"'  ;?>>Spring</li>
            <li><input type="checkbox" name="seasons[]" value="summer" <?php if(isset($_POST['seasons']) && in_array('summer', $seasons)) echo 'checked="checked"'   ;?>>Summer</li>
            <li><input type="checkbox" name="seasons[]" value="fall" <?php if(isset($_POST['seasons']) && in_array('fall', $seasons)) echo 'checked="checked"'   ;?>>Fall</li>
            <li><input type="checkbox" name="seasons[]" value="winter" <?php if(isset($_POST['seasons']) && in_array('winter', $seasons)) echo 'checked="checked"'   ;?>>Winter</li>
        </ul>
        <span class="error"><?php echo $seasons_err;?></span>

        <label>Regions</label>
        <select name="regions">
            <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions']==NULL) echo 'selected="unselected"';?>>Select One!</option>
            <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions']=='nw') echo 'selected="selected"';?>>Northwest</option>
            <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions']=='sw') echo 'selected="selected"';?>>Southwest</option>
            <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions']=='mw') echo 'selected="selected"';?>>Midwest</option>
            <option value="ec" <?php if(isset($_POST['regions']) && $_POST['regions']=='ec') echo 'selected="selected"';?>>East Coast!</option>
            <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions']=='ne') echo 'selected="selected"';?>>Northeast!</option>
        </select>
        <span class="error"><?php echo $regions_err;?></span>

        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
        <span class="error"><?php echo $comments_err;?></span>

        <label>Privacy</label>
        <ul>
            <li>
            <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked ="checked"'  ;?>>Privacy
            </li>
        </ul>
        <span class="error"><?php echo $privacy_err;?></span>

        <input type="submit" value="Send it!">
        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];   ?>'" value="reset">
    </fieldset>

</form>

</form>



