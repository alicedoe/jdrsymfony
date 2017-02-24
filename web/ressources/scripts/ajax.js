function move(coord) {
        $.ajax({
        async: true,
        type: 'GET',
        dataType: 'text',
        url: "./move",
        success: function (data) {
            alert (data);
        }
        
    });
    
    
    }