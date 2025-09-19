<?php
class Form {
    var $fields = array();
    var $action;
    var $submit = "";
    var $jumField = 0;

    function __construct($action, $submit){
        $this->action = $action;
        $this->submit = $submit;
    }

    function displayForm($judul){
        echo "<h2>$judul</h2>";
        echo "<form action='".$this->action."' method='post' enctype='multipart/form-data'>";
        echo "<table width='100%' cellpadding='8'>";
        for($i=0;$i<$this->jumField;$i++) {
            echo "<tr>
                    <td align='right' width='25%'>".$this->fields[$i]['label']."</td>
                    <td>".$this->fields[$i]['field']."</td>
                  </tr>";
        }
        echo "<tr><td></td><td><input type='submit' name='tombol' value='".$this->submit."' class='btn-submit'></td></tr>";
        echo "</table>";
        echo "</form>";
    }

    function addText($name,$label,$placeholder="",$required=true){
        $req = $required ? "required" : "";
        $field = "<input type='text' name='".$name."' placeholder='".$placeholder."' $req>";
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }

    function addNumber($name,$label,$placeholder="",$required=true){
        $req = $required ? "required" : "";
        $field = "<input type='number' name='".$name."' placeholder='".$placeholder."' $req>";
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }

    function addTextarea($name,$label,$placeholder="",$required=false){
        $req = $required ? "required" : "";
        $field = "<textarea name='".$name."' rows='4' cols='30' placeholder='".$placeholder."' $req></textarea>";
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }

    function addSelect($name,$label,$options=array(),$required=true){
        $req = $required ? "required" : "";
        $field = "<select name='".$name."' $req>";
        foreach($options as $val=>$text){
            $field .= "<option value='".$val."'>".$text."</option>";
        }
        $field .= "</select>";
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }

    function addRadio($name,$label,$options=array(),$required=true){
        $req = $required ? "required" : "";
        $field = "";
        foreach($options as $val=>$text){
            $field .= "<input type='radio' name='".$name."' value='".$val."' $req> ".$text." ";
        }
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }

    function addCheckbox($name,$label,$options=array()){
        $field = "";
        foreach($options as $val=>$text){
            $field .= "<input type='checkbox' name='".$name."[]' value='".$val."'> ".$text." ";
        }
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }

    function addFile($name,$label,$required=true){
        $req = $required ? "required" : "";
        $field = "<input type='file' name='".$name."' accept='image/*' $req>";
        $this->fields[$this->jumField] = array("label"=>$label,"field"=>$field);
        $this->jumField++;
    }
}
?>
