
<?php
    // var_dump($prospectus);
    foreach ($prospectus as $key1 => $value1) {
        if($value1['prospectus_yearlevel'] == $level && $value1['prospectus_term'] == $term)
        {
            
            echo '
            <div class="row">
                <div class="col-md-5">
                    <input type="text" class="form-control" value="'.$value1['subj_code'].'" aria-describedby="basic-addon1" style="margin-top:5px; width:100%; height:30px; border-radius:2px;" disabled>';
            echo "
                </div>";

            echo '<div class="col-md-7"><select id="editprerequisite_'.$value1['subj_id'].'_'.$ID.'_'.$level.'_'.$term.'" style="margin-top:5px; width:100%; height:30px; border-radius:2px;">
                                    <option value=""></option>';
                                    
            foreach ($subjects as $key2 => $value2) {
                if($value1['subj_id'] != $value2['ID'])
                {
                    if($value1['prospectus_pre_requisites'] == $value2['ID'])
                    {
                        echo '<option id="'; echo $value1['subj_id']; echo '" selected >'; echo $value2['subj_code'].'-'.$value2['subj_description']; echo '</option>';
                    }
                    else {
                        echo '<option id="'; echo $value2['ID']; echo '">'; echo $value2['subj_code'].'-'.$value2['subj_description']; echo '</option>';
                    }
                }
            }
            echo "</select></div></div>";
        }
    }

    
?>
