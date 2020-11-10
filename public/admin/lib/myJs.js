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
    var imid = [];

    for (let i = 0; i < countimages; i++) {
        $("#input-file" + i).change(function () {
            var string = document.getElementById("input-file" + i).value;
            var name = string.split('\\').pop();
            modal.find('.modal-body #imid' + i).val(imid[i])
            document.getElementById('image' + i).src = name
        });

    }
    for (let i = 0; i < countimages; i++) {
        images[i] = button.data('image' + i)
        imid[i] = button.data('imageid' + i)
        modal.find('.modal-body #test' + i).val(images[i])
        modal.find('.modal-body #image' + i).attr('src', '/photos/' + images[i])
    }

    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #body').html(body)
    modal.find('.modal-body #category').val(category)

    modal.find('.confirm-button').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/posts/' + id;
        form = $('#edit-form');
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
        var submitUrl = '/posts/' + id,
            form = $('#delete-form'); // change with your form

        form.attr('action', submitUrl);
        form.submit();
    })
});


//iizvestaj notice


$('#myModalN').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')
    var document_categories_id = button.data('document_categories_id')
    var pdf_file = button.data('pdf_file')
   // alert(document_categories_id)
    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #document_categories_id').val(document_categories_id)
    modal.find('.modal-body #pdf_file').html(pdf_file)

    modal.find('.confirm-button').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/notices/' + id;
        form = $('#edit-formN');

        form.attr('action', submitUrl);
        form.submit();
    })
});


$('#deleteModalN').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')

    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body #delete-title').val(title)

    modal.find('.confirm-delete-btn').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/notices/' + id,
            form = $('#delete-formN'); // change with your form

        form.attr('action', submitUrl);
        form.submit();
    })
});


///puuntni nalog warrant


$('#myModalW').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')
    var pdf_file = button.data('pdf_file')


    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #pdf_file').html(pdf_file)

    modal.find('.confirm-button').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/warrants/' + id;
        form = $('#edit-formW');

        form.attr('action', submitUrl);
        form.submit();
    })
});


$('#deleteModalW').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')

    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body #delete-title').val(title)

    modal.find('.confirm-delete-btn').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/warrants/' + id,
            form = $('#delete-formW'); // change with your form

        form.attr('action', submitUrl);
        form.submit();
    })
});
//aktuelni proj


$('#myModalA').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')
    var body = button.data('body')


    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #body').html(body)

    modal.find('.confirm-button').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/aktuelnos/' + id;
        form = $('#edit-formA');

        form.attr('action', submitUrl);
        form.submit();
    })
});


$('#deleteModalA').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') // Extract info from data-* attributes3
    var id = button.data('id')

    // If necessary, you could intiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)

    modal.find('.modal-body #delete-title').val(title)

    modal.find('.confirm-delete-btn').on('click', function (e) {
        e.preventDefault();
        var submitUrl = '/aktuelnos/' + id,
            form = $('#delete-formA'); // change with your form

        form.attr('action', submitUrl);
        form.submit();
    })
});
