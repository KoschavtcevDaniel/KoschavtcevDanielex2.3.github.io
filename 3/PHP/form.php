<form action="" method="POST">
 <label>FIO</label>
  <input name="fio" />
  <label>E-MAIL</label>
  <input name="email"/>
  <label>YEAR</label>
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <label>Your SEX?</label>
  <input type="radio" checked="checked" name="sex" value="0" />
  <input type="radio" name="sex" value="1" />
  
  <label>Num Of LIMBS?</label>
  <label>4 limbs</label>
  <input type="radio" checked="checked" name="num_of_limbs" value="4" />
  <label>8 limbs</label>
  <input type="radio" name="num_of_limbs" value="8" />   
  <label>16 limbs</label>       
  <input type="radio" name="num_of_limbs" value="16" /> 

  <label> Ваша биография:</label>
        <textarea name="biography"></textarea>


  <input type="submit" value="ok" />
</form>

