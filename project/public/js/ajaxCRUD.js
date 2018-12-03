$(function() {
    console.log('loaded');

    var updateUrl = '';
    var updateId= -1;

    var deleteEvent = function(e) {
        e.preventDefault();
        var a = $( event.target );
        var tr = a.closest('tr');
        var url = a.attr('href');
        $.ajax({
			url: url,
			method: "GET",
			success: function(response) {
				// console.log(response);
                tr.remove();
			},
			error: function(error) {
                console.log(error);
			}
		});
    }

    var viewEvent = function(e) {
        e.preventDefault();
        var a = $(this);
        var url = a.attr('href');
        url = url.toString().replace('products/','products/get/');
        $.ajax({
			url: url,
			method: "GET",
			success: function(response) {
				//console.log(response);
                var product = response;
                //populate data
                var imgSrc = (product.image) ? '/storage/'+product.image.split('/')[1] : '/img/product.gif';
                $('#imgP').attr('src',imgSrc);
                $('#nameH').html(product.name);
                $('#priceLI').html(product.price+' $');
                $('#qtyLI').html(product.quantity+' units available');
                $('#descP').html(product.description);
                $('#catLI').html(product.category_name);
                //empty form
                $('#name').val('');
                $('#price').val('');
                $('#quantity').val('');
                $('#description').val('');
                $('#category_id').val('');
                //change add button and h1 text
                $('#addBtn').val('Add Product');
                $('#addH').html('Add');
                //empty updateUrl
                updateUrl = '';
                updateId = -1;
			},
			error: function(error) {
                console.log(error);
			}
		});
    }

    var updateEvent = function(e) {
        e.preventDefault();
        var a = $(event.target);
        updateUrl = a.attr('href');
        var getUrl = updateUrl.toString().replace('products','products/get');
        getUrl = getUrl.toString().replace('/edit','');
        //get products data
        $.ajax({
			url: getUrl,
			method: "GET",
			success: function(response) {
				//console.log(response);
                var product = response;
                // populate data
                var imgSrc = (product.image) ? '/storage/'+product.image.split('/')[1] : '/img/product.gif';
                // console.log(imgSrc);
                $('#imgP').attr('src',imgSrc);
                $('#nameH').html(product.name);
                $('#priceLI').html(product.price+' $');
                $('#qtyLI').html(product.quantity+' units available');
                $('#descP').html(product.description);
                $('#catLI').html(product.category_name);
                //populate form
                $('#name').val(product.name);
                $('#price').val(product.price);
                $('#quantity').val(product.quantity);
                $('#description').val(product.description);
                $('#category_id').val(product.category_id);
                //change update button and h1 text
                $('#addBtn').val('Update Product');
                $('#addH').html('Update');
                //set updateId
                updateId = product.id;
			},
			error: function(error) {
                console.log(error);
			}
		});
    }

    var addEvent = function(e) { //add ana update event , dependindg on value of submit button
        e.preventDefault();
        var formData = $(this).serialize();
        if($('#addBtn').val()=='Add Product') {
            // console.log("add here");
            $.ajax({
                url: "http://localhost:8000/products/add",
                method: "POST",
                data: formData,
                success: function(response) {
                    console.log(response);
                    var newProduct = response;
                    var newProductRow = "<tr>";
                    newProductRow += "<td>"+newProduct.id+"</td>";
                    newProductRow += "<td>"+newProduct.name+"</td>";
                    newProductRow += "<td>"+newProduct.price+"</td>";
                    newProductRow += "<td>"+newProduct.quantity+"</td>";
                    newProductRow += "<td>"+newProduct.description+"</td>";
                    newProductRow += "<td><a href='/categories/"+newProduct.category_id+"'>"+newProduct.category_name+"</a></td>";
                    newProductRow += "<td class='viewtd'></td>";
                    newProductRow += "<td class='updatetd'></td>";
                    newProductRow += "<td class='deletetd'></td>";
                    newProductRow += "</tr>";
                    $('table.display').append(newProductRow);
                    $('td.viewtd').each(function() {
                      var addLink = $("<a class='viewBtn' href='/products/"+newProduct.id+"'>view</a>");
                      $(this).append(addLink);
                      addLink.click(viewEvent);
                    });
                    $('td.updatetd').each(function() {
                        var updateLink = $("<a class='updateBtn' href='/products/"+newProduct.id+"/edit'>"+"update</a>");
                        $(this).append(updateLink);
                        updateLink.click(updateEvent);
                    });
                    $('td.deletetd').each(function() {
                        var deleteLink = $("<a class='deleteBtn' href='/products/"+newProduct.id+"/destroy'>"+"delete</a>");
                        $(this).append(deleteLink);
                        deleteLink.click(deleteEvent);
                    });
                    $('#name').val('');
                    $('#price').val('');
                    $('#quantity').val('');
                    $('#description').val('');
                    $('#category_id').val('');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
        else if($('#addBtn').val()=='Update Product') {
            // console.log("update here");
            //update products data
            updateUrl = updateUrl.toString().replace('edit','update');
            $.ajax({
    			url: updateUrl,
    			method: "POST",
                data: formData,
    			success: function(response) {
    				//console.log(response);
                    //empty form
                    $('#name').val('');
                    $('#price').val('');
                    $('#quantity').val('');
                    $('#description').val('');
                    $('#category_id').val('');
                    //change update button and h1 text back to add
                    $('#addBtn').val('Add Product');
                    $('#addH').html('Add');
                    //view new data for product , trigger click event on viewBTn of this specific product
                    $(".viewBtn[href='/products/"+updateId+"']").trigger('click');
    			},
    			error: function(error) {
                    console.log(error);
    			}
    		});
        }
    };


    $('.viewBtn').on('click', viewEvent);

    $('.updateBtn').on('click', updateEvent);

    $('.deleteBtn').on('click', deleteEvent);

    $('#addForm').on('submit', addEvent);




});
