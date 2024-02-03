$(document).ready(function(){
    function loadTable(page){
        $.ajax({
            url: "",
            type: "POST",
            data : { page_no : page},
            success: function(data){
                $("").append(data);
            }
        });

    };
    loadTable();
});