<!DOCTYPE html>
<html lang="en">
<head>
     <title>ShopEase - Registration</title>
    
</head>
<body>

    <h2 style="text-align: center;">ShopEase Registration</h2>

    <!-- Service Provider Registration Form -->
    <h3>Service Provider Registration</h3>
    <form>
        <label for="providerName">Business Name:</label>
        <input type="text" id="providerName" name="providerName" required><br><br>

        <label for="providerEmail">Email:</label>
        <input type="email" id="providerEmail" name="providerEmail" required><br><br>

        <label for="providerPhone">Phone Number:</label>
        <input type="tel" id="providerPhone" name="providerPhone" required><br><br>

        <label for="providerAddress">Business Address:</label>
        <input type="text" id="providerAddress" name="providerAddress" required><br><br>

        <label for="providerGender">Gender:</label>
        <input type="radio" id="providerMale" name="providerGender" value="Male" required>
        <label for="providerMale">Male</label>
        <input type="radio" id="providerFemale" name="providerGender" value="Female">
        <label for="providerFemale">Female</label><br><br>

        <label for="providerCategory">Business Category:</label>
        <select id="providerCategory" name="providerCategory" required>
            <option value="Clothing">Clothing</option>
            <option value="Electronics">Electronics</option>
            <option value="Grocery">Grocery</option>
            <option value="Home Decor">Home Decor</option>
        </select><br><br>

        <label for="providerPassword">Password:</label>
        <input type="password" id="providerPassword" name="providerPassword" required><br><br>

        <input type="checkbox" id="providerTerms" name="providerTerms" required>
        <label for="providerTerms">I agree to the Terms & Conditions</label><br><br>

        <input type="reset" value="Reset">
        <input type="submit" value="Register as Provider">
    </form>

    

    <!-- User Registration Form -->
    <h3>User Registration</h3>
    <form>
        <label for="userName">Full Name:</label>
        <input type="text" id="userName" name="userName" required><br><br>

        <label for="userEmail">Email:</label>
        <input type="email" id="userEmail" name="userEmail" required><br><br>

        <label for="userPhone">Phone Number:</label>
        <input type="tel" id="userPhone" name="userPhone" required><br><br>

        <label for="userAddress">Address:</label>
        <input type="text" id="userAddress" name="userAddress" required><br><br>

        <label for="userGender">Gender:</label>
        <input type="radio" id="userMale" name="userGender" value="Male" required>
        <label for="userMale">Male</label>
        <input type="radio" id="userFemale" name="userGender" value="Female">
        <label for="userFemale">Female</label><br><br>

        <label for="userType">User Type:</label>
        <select id="userType" name="userType" required>
            <option value="Buyer">Buyer</option>
            <option value="Seller">Seller</option>
        </select><br><br>

        <label>Preferred Shopping Categories:</label><br>
        <input type="checkbox" id="electronics" name="shoppingCategory" value="Electronics">
        <label for="electronics">Electronics</label>
        <input type="checkbox" id="fashion" name="shoppingCategory" value="Fashion">
        <label for="fashion">Fashion</label>
        <input type="checkbox" id="groceries" name="shoppingCategory" value="Groceries">
        <label for="groceries">Groceries</label>
        <input type="checkbox" id="beauty" name="shoppingCategory" value="Beauty">
        <label for="beauty">Beauty</label><br><br>

        <label for="userPassword">Password:</label>
        <input type="password" id="userPassword" name="userPassword" required><br><br>

        <input type="checkbox" id="userTerms" name="userTerms" required>
        <label for="userTerms">I agree to the Terms & Conditions</label><br><br>

        <input type="reset" value="Reset">
        <input type="submit" value="Register as User">
    </form>

</body>
</html>
