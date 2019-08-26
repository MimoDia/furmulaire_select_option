<?php
echo '<select name="source" id="source" multiple="multiple">';

$data = array('dakar', 'tamba', 'kidira');
$source= $_POST['source'];
foreach($data as $key => $value){

	$beSelected = $source==$value ? ' selected="selected"' : '';

	echo '<option value="'.$value.'"'.$beSelected.'>' .$value. '</option>';


}

echo '</select>';
?>



<?php
echo '<select name="source" id="source" multiple="multiple">';

$data = array('dakar', 'tamba', 'kidira');
$source= $_POST['source'];
foreach($data as $key => $value){

	echo '<option value="'.$value.'"';
	if ($source==$value) {
		echo ' selected="selected"';
	}
	echo '>' .$value. '</option>';

}

echo '</select>';
?>



<?php

$data = [
	'dakar' => 'Dakar',
	'tamba' => 'Tamba',
	'kidira' => 'Kidira',
	'stgermlaye' => 'Saint-Germain-en-Laye',
];

$source= $_POST['source'];
echo '<select name="source" id="source" multiple="multiple">';
foreach($data as $key => $value){

	$beSelected = $source==$key ? ' selected="selected"' : '';

	echo '<option value="'.$key.'"'.$beSelected.'>' .$value. '</option>';

}

echo '</select>';
?>

<!--
	<option value="ohjfoojojif" select="selected" > toto </option>;
	<option value="dakar" select="dakar" > dakar </option>;
-->

