<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Sample Form</title>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script>

$(document).ready(function() {

    $('#myForm').submit(function() {

      $('#color, #size, #category').find('option').each(function() {

            $(this).attr('selected', 'selected');

        });

    });

});

</script>

</head>

 

<body>

    <form id="myForm" action="index.html" method="post" onSubmit="return false;">

        <select id="do-not-select" name="do-not-select[]" multiple="multiple" size="3">

            <option>Do</option>

            <option>not</option>

            <option>select</option>

        </select>

        <select id="color" name="color[]" multiple="multiple" size="3">

            <option>Red</option>

            <option>Green</option>

            <option>Blue</option>

        </select>

        <select id="size" name="size[]" multiple="multiple" size="3">

            <option>Small</option>

            <option>Medium</option>

            <option>Large</option>

        </select>

        <select id="category" name="category[]" multiple="multiple" size="3">

            <option>Children</option>

            <option>Ladies</option>

           <option>Men</option>

        </select>

        <input type="submit" value="Submit" />

    </form>

</body>

</html>

