$(document).ready(function(){
    $('.button-add_filter').click(function() {
        $('.add-filter').css('display', 'block');
    })

    $('#add_filter').click(function () {
        var btn = $(this);
        var filter = {}, base = {}, AFC = {};
        
        $(".add-filter .base").each(function() {
        	base[this.name] = $(this).val();
    	});

    	$(".add-filter .AFC").each(function() {
        	AFC[this.name] = $(this).val();
    	});

		filter['base'] = base;
		filter['AFC']  = AFC;
        $.ajax({
        	type: 'POST',
        	url: 'filters', 
        	data: JSON.stringify(filter),
        	dataType: 'json',
        }).always(function () {
            var libnotify = humane.create({timeout: 1000, baseCls: 'humane-libnotify', addnCls: 'humane-libnotify-success'});
            libnotify.log('Filter was successfully added', function() { window.location.reload(); });
        }, 'json');
    });

    $('.delete_filter').click(function() {
        var btn = $(this);
        var filter = {}, base = {}, AFC = {};

        var tr = btn.closest('tr');
        var filterID = tr.find('.delete-filterID').val();

        $.ajax({
            type: 'DELETE',
            url: 'filters', 
            data: JSON.stringify({ 'filterID': filterID }),
            dataType: 'json',
        }).always(function () {
            var libnotify = humane.create({timeout: 1000, baseCls: 'humane-libnotify', addnCls: 'humane-libnotify-success'});
            libnotify.log('Filter was successfully deleted', function() { window.location.reload(); });
        }, 'json');
    });

    $('.update_filter').click(function() {
        var btn = $(this);
        var filter = {}, base = {}, AFC = {};

        $(".table-filter .base").each(function() {
            base[this.name] = $(this).val();
        });

        var tr = btn.closest('tr');
        var filterID = tr.find('.delete-filterID').val();

        filter['base'] = base;
        filter['filterID'] = filterID;
        $.ajax({
            type: 'PUT',
            url: 'filters', 
            data: JSON.stringify(filter),
            dataType: 'json',
        }).always(function () {
            var libnotify = humane.create({timeout: 1000, baseCls: 'humane-libnotify', addnCls: 'humane-libnotify-success'});
            libnotify.log('Filter was successfully updated', function() { window.location.reload(); });
        }, 'json');
    });
});