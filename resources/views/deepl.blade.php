<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deepl</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
    
<br /><br />
	<h2>Deepl</h2>
    <br />
    <div class="row">
        <div class="col-6">
            <select id="source_lang" class="form-control">
                <option value="">-- Source Language --</option>
                <option value="en">English</option>
                <option value="nl">Dutch</option>
                <option value="fr">French</option>
                <option value="es">Spanish</option>
                <option value="de">German</option>
            </select>
        </div>
        <div class="col-6">
            <select id="target_lang" class="form-control">
                    <option value="">-- Target Language --</option>
                    <option value="en">English</option>
                    <option value="nl">Dutch</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                    <option value="de">German</option>
            </select>   
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-12">
            <textarea id="text" class="form-control" rows="8" placeholder="Type text to translate"></textarea>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-2">
            <button type="button" id="btn-translate" class="btn btn-sm btn-success">Translate</button>
        </div>            
        <div class="col-10" id="translation">        
        </div>
    </div>

 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>

$(document).ready(function () {

    $('#btn-translate').click(function(){
                
        $.ajax({
            url: '/translate',
            cache: false,
            type: 'GET',
            data: {
                source_lang: $('#source_lang').val(),
                target_lang: $('#target_lang').val(),
                text: $('#text').val(),
            },
            success: function (response) {

                $('#translation').html(response);				
            }
        });		
    }); 	
});

</script>
</body>
</html>