

  $('#myModal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')
    var body = button.data('body')
    var category = button.data('category')
    var countimages = button.data('countimages')
    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    var images = [];

    for (let i = 0; i < countimages; i++) {
         images[i] =  button.data('image' + i)
      }
    console.log(images)
     modal.find('.modal-body #title').val(title) 
     modal.find('.modal-body #body').html(body) 
     modal.find('.modal-body #category').val(category) 

     modal.find('.confirm-button').on('click', function (e) {
        e.preventDefault();
        var submitUrl =  '/posts/' + id,
            form = $('#edit-form'); // change with your form
    
        form.attr('action', submitUrl);
        form.submit();
  })
});


$('#deleteModal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')

    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

     modal.find('.modal-body #delete-title').val(title) 

     modal.find('.confirm-delete-btn').on('click', function (e) {
        e.preventDefault();
        var submitUrl =  '/posts/' + id,
            form = $('#delete-form'); // change with your form
    
        form.attr('action', submitUrl);
        form.submit();
  })
});
