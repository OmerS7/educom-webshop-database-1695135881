<?php

require_once 'utils.php';
require_once 'user_service.php';

function showChangePasswordHeader() {
    echo 'Wachtwoord Wijzigen';
}

/*
function validatePassword() {
        $password = $changedpassword = $repeatchangedpassword = ""; 
        $passwordErr = $changedpasswordErr = $repeatchangedpasswordErr = $genericErr = ""; 
        $valid = false; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $password = testInput(getPostVar("password")); 
        if (empty($password)) {  
            $passwordErr = "Voer je huidige wachtwoord in";  
        }

        $changedpassword = testInput (getPostVar("changepassword"));
        if (empty($changedpassword)){
            $changedpasswordErr = "Voer een nieuw wachtwoord in";
        }

        $repeatchangedpasswordErr = testInput (getPostVar("repeatchangedpassword"));
        if (empty($repeatchangedpassword)){
            $repeatchangedpasswordErr = "Herhaal het wachtwoord";
        }
        
        if (empty($passwordErr) && empty($changedpasswordErr) && empty($repeatchangedpasswordErr)) {
            try{ 
            if (isPasswordOccupied($password)) {
                $changedpasswordErr = "Wachtwoord is ongeldig";
            } else {
                $valid = true;
            }
            }
            catch(Exception $e){
                $genericErr = "Er is een technische storing. Probeer het later nog eens";
                logerror("changepassword failed: " . $e -> getMessage());
            }
        }
    }
    return array( 
    'valid' => $valid,
    'password' => $password,
    'changedpassword' => $changedpassword,
    'repeatchangedpassword' => $repeatchangedpassword,
    'passwordErr' => $passwordErr,
    'changedpasswordErr' => $changedpasswordErr,
    'repeatchangedpasswordErr' => $repeatchangedpasswordErr,
    'genericErr' => $genericErr
    );        
}
*/ 

function showChangePasswordForm($data) {
  echo '<form method="POST" action="index.php">
            <label for="password">Huidige wachtwoord:</label>
            <input type="password" name="password" value="password">
            <span class="error">* '.$data['passwordErr'].'</span><br><br>

            <label for="password">Wachtwoord:</label>
            <input type="password" name="newPassword" value="newPassword">
            <span class="error">* '.$data['passwordErr'].'</span><br><br>

            <div class="changePasswordButton">
                <input type="hidden" name="page" value="Password">
                <input type="submit" value="Wijzig">
            </div>
        </form>';
} 