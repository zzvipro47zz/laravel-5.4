function checkbox(box_name, count_checkbox) {
	var all_friends = document.querySelectorAll('input[function=' + box_name + ']').length;
	document.getElementById('all_friends').innerHTML = all_friends;

	$('#check_all').change(function() {
		$("input[name='" + box_name + "[]']").prop('checked', $(this).prop('checked'));
		document.getElementById('count-checkbox-' + count_checkbox).innerHTML = this.checked ? all_friends : 0;
	});

	$('#check_all').change(function() {
		$("input[name='" + box_name + "[]']").prop('checked', $(this).prop('checked'));
		document.getElementById('count-checkbox-' + count_checkbox).innerHTML = this.checked ? all_friends : 0;
	});

	$("input[name='" + box_name + "[]']").change(function() {
		var friend_select = $("input[name='" + box_name + "[]']:checked").length;

		document.getElementById('count-checkbox-' + count_checkbox).innerHTML = friend_select;
		if (friend_select_count == all_friends) {
			$('#check_all').prop('checked', true);
			return true;
		}

		$(this).each(function(key, value) {
			if ($(value[key]).prop('unchecked', $(this).prop('checked'))) {
				$('#check_all').prop('checked', false);
				return false;
			}
		});
	});
}