<a href="?action=admin&cms_action=insert">Insert data</a><br>
<p>Content:</p>
   <table>
       <tr>
           <td>id</td>
           <td>name</td>
           <td>street</td>
           <td>streetNumber</td>
           <td>zipCode</td>
           <td>telNr</td>
           <td>email</td>
           <td>website</td>
           <td>disctrict</td>
           <td>openday</td>
           <td>openclass</td>
       </tr>
    </table>
    <hr>
    <table>
    {foreach from=$result item=oneItem}
       <tr>
            <td>{$oneItem.id}</td>
            <td>{$oneItem.name}</td>
            <td>{$oneItem.street}</td>
            <td>{$oneItem.streetNumber}</td>
            <td>{$oneItem.zipCode}</td>
            <td>{$oneItem.telNr}</td>
            <td>{$oneItem.email}</td>
            <td>{$oneItem.website}</td>
            <td>{$oneItem.districts_id}</td>
            <td>{$oneItem.openday}</td>
            <td>{$oneItem.openclass}</td>
            <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
            <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
       </tr>
       
    {/foreach}
</table>

