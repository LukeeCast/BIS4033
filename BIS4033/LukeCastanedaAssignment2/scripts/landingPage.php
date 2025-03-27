<?php
require_once('../app_config.php');
require_once('echoHTML.php');
echoHead('../clientScripts/product_discount_calculator.js', '../styles/cssfile.css');
echoHeader("Customer Registration");
echo'
    <main>
    <form action="display.php" onsubmit = "return validateProductData();" method="post">

      <fieldset>
        <Legend>Registration Information</Legend>
        <label> for="email">E-mail:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,} title="At least 6 letters or numbers"><br>

        <label for="varify_password">Verify Password:</label>
        <input type="password" id="varify_password" name="varify_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}><br>
      </fieldset>

      <fieldset>
        <Legend>Member Information</Legend>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" pattern="[A-Za-z]{2}" title="2-character code" required><br>

        <label for="zip">Zip Code:</label>
        <input type="text" id="zip" name="zip" pattern="[0-9]{5,9}" title="5 or 9 digits" required><br>

        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="999-999-9999" required><br>
      </fieldset>

      <fieldset>
          <Legend>Membership Information</Legend>
          <label for="member_type">Membership Type:</label>
          <select id="member_type" name="member_type" required>
            <option value="">Select a membership type</option>
            <option value="bronze">Bronze</option>
            <option value="silver">Silver</option>
            <option value="gold">Gold</option>

          <label for="start_date">Start Date:</label>
          <input type="date" id="start_date" name="start_date" title="YYYY-MM-DDrequired><br>
      </fieldset>

      <fieldset>
          <legend>Submit Your Membership</legend>

          <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount"><br>

            <input type="reset" value="Reset Fields"><br>
          </div>

      </fieldset>
    </main>
    </form>
    ';
echoFooter();
?>