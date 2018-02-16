var xmlhttp = new XMLHttpRequest();
xmlhttp.overrideMimeType("application/json");
xmlhttp.open("POST", "todo.json", true);
xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200){
    var myObj = JSON.parse(this.responseText);
    for (var i=0; i < myObj['todo'].length; i++) {
      $("#a-faire").append("<label for='task"+i+"'><input type='checkbox' name='tache' value='false' id='task"+i+"' /><span>"+myObj['todo'][i]+"</span></label><br/>");
    }
    for (var j=0; j < myObj['archive'].length; j++) {
      $("#done").append("<p>"+myObj['archive'][j]+"</p>");
    }
    $("input[type=checkbox]").change(function() {
      if ($(this).is(':checked')) {
        $(this).attr('value', 'true');
        var selected = $("label[for='" +this.id +"']").text();
        myObj['archive'].push(selected);
        myObj['todo'].splice($.inArray(selected, myObj['todo']), 1);
    
        var test = myObj;
    
        $.ajax ({
            type: "POST",
            url: "encoder.php",
            beforeSend: function(xhr){
                if (xhr.overrideMimeType)
                {
                  xhr.overrideMimeType("application/json");
                }
            },
            data: {test},
            dataType: "json",
            complete: function(){location.reload();},
            success: function(response) {
              console.log("ok");
            }
            
        });
      }else{
        $(this).attr('value','false');
      }
    });
  }
};
xmlhttp.send();