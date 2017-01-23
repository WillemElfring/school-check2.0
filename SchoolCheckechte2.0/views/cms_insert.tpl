<form action="./model/insert_item.php" method="get">
    <table>
       
       
       
       
        <tr>
            <td>name<input type="text" class="textField" placeholder="Schoolname" name="name" value="" required></td>
        </tr>
        <tr>
            <td>street<input type="text" class="textField" placeholder="street" name="street" value="" required></td>
        </tr>
        <tr>
            <td>streetNumber<input type="text" class="textField" placeholder="streetNumber" name="streetNumber" value="" required></td>
        </tr>
        <tr>
            <td>zipCode<input type="text" class="textField" placeholder="zipCode" name="zipCode" value="" required></td>
        </tr>
        <tr>
            <td>telNr<input type="text" class="textField" placeholder="telNr" name="telNr" value="" required></td>
        </tr>
        <tr>
            <td>email<input type="text" class="textField" placeholder="email" name="email" value="" required></td>
        </tr>
        <tr>
            <td>website<input type="text" class="textField" placeholder="website" name="website" value="" required></td>
        </tr>
        <tr>
            <td>disctrict<input type="number" class="textField" placeholder="districts_id" name="districts_id" value="" min="1" max="9" required></td>
        </tr>
        <tr>
            <td>openday<input type="datetime-local" name="openday" required></td>
        </tr>
        <tr>
            <td>openclass<input type="datetime-local" name="openclass" required></td>
        </tr>
        <tr>
            <td><input type="submit" id="submit" name="submit" value="Registreer"></td>
        </tr>
        
    </table>
    <a href="index.php?action=admin">Keer terug</a>
    
</form>