$(function() {
    $('#date').datepicker({
        language: 'en',
        minDate: new Date() // Now can select only dates, which goes after today
    })
});

function ClearButton(){
  $('form').get(0).reset()
}

function AddRecord(){
    var date = $("#date").val();
    var title = $("#title").val();
    var description = $("#description").val();
    //description characters validation
    bootstrapValidate('#description', 'max:100:Please dont enter more than 100 characters!')
    //Fetch form to apply custom Bootstrap validation
    var form = $("#todoForm")
    if (form[0].checkValidity() === false) {
        event.preventDefault()
        event.stopPropagation()
    }else {
        $('#confirmModal').modal('show');
        $('#addDate').val(date);
        $('#addTitle').val(title);
        $('#addDescription').val(description);
    }
    form.addClass('was-validated')

}

function SaveRecord(){
    var dateData = $('#addDate').val();
    var titleData = $('#addTitle').val();
    var descriptionData = $('#addDescription').val();
	$.ajax({
        type: "post",
        url: getBaseURL()+"TodoList/save",
        data: {
            date: dateData,
            title: titleData,
            description: descriptionData
        },
        success: function(){
            $('#confirmModal').modal('hide');
            $('#successModal').modal('show');
            // window.location.href = getBaseURL()+"TodoList/index";
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus); alert("Error: " + errorThrown);
        }
    });
}


function TodoList(){
    window.location.href = getBaseURL()+"TodoList/index";
}
