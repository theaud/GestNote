<?php


form_new_student(1);





//----------------------------------------------------------------------------------------------------------------------------------
function form_new_student($id)
{
    ?>
<form method="post">
    <fieldset><legend>Yolo 1</legend>
        Surname <input name="Surname" placeholder ="Surname"  type="text">
        Forename <input name="forename" placeholder="Forename" type="text">
    </fieldset>
    <fieldset><legend>Yolo 2</legend>
        Marks <input name="Marks" placeholder ="Marks"  type="text">
    </fieldset>
    <fieldset><legend>les truc en lien avec les table deja present a definir</legend>
        contact <input name="Contact" placeholder ="Contact"  type="hidden" value="1">
        doctor  <input name="Doctor" placeholder ="Doctor"  type="hidden" value="1">
    </fieldset>
    <input type="submit"/>
        
</form>
    

  <?php  
   
}
function show_new_student($id,$surname,$forename,$contact,$doctor,$marks)
{
    echo "$id,$surname,$forename,$contact,$doctor,$marks";

}