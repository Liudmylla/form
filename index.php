<?php
if($_POST){ 
    include("thanks.php");
}

?>
<div style="margin-top:20px;">
<form  action="thanks.php"  method="post">
    <div>
      <label  for="user_surname">Nom :</label>
      <input  type="text"  id="user_surname"  name="user_surname">
    </div>
    <div>
      <label  for="user_name">Prénom :</label>
      <input  type="text"  id="user_name"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Télephone :</label>
        <input  type="tel"  id="telephone"  name="phone_number">
    </div>
    <div>
      <label  for="sujet">Sujet :</label>
        <select id="sujet" name="sujet">
        <option value="perso">Perso</option>
        <option value="job">Job</option>
        <option value="business">Business</option>
        <option value="other">Other</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  </div>